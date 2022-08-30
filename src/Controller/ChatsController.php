<?php
declare(strict_types=1);

namespace App\Controller;

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
/**
 * Chats Controller
 *
 * @property \App\Model\Table\ChatsTable $Chats
 * @method \App\Model\Entity\Chat[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ChatsController extends AppController
    implements MessageComponentInterface
{
    protected $clients;


    public function initialize(): void
    {
        parent::initialize();
        $this->clients = new \SplObjectStorage;
    }
    public function onOpen(ConnectionInterface $conn) {
        // Store the new connection to send messages to later
        $this->clients->attach($conn);

        echo "New connection! ({$conn->resourceId})\n";
    }

    public function onMessage(ConnectionInterface $from, $msg) {
        $numRecv = count($this->clients) - 1;
        echo sprintf('Connection %d sending message "%s" to %d other connection%s' . "\n"
            , $from->resourceId, $msg, $numRecv, $numRecv == 1 ? '' : 's');

        foreach ($this->clients as $client) {
            if ($from !== $client) {
                // The sender is not the receiver, send to each client connected
                $client->send($msg);
            }
        }
    }

    public function onClose(ConnectionInterface $conn) {
        // The connection is closed, remove it, as we can no longer send it messages
        $this->clients->detach($conn);

        echo "Connection {$conn->resourceId} has disconnected\n";
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        echo "An error has occurred: {$e->getMessage()}\n";

        $conn->close();
    }



    public function index()
    {
        $chats = $this->Chats->find('all',[
            'contain' =>[
                'UserFrom',
                'UserTo'
            ]
            ]);
        $chats = $this->paginate($this->Chats);
//    debug($chats->all());
//    exit;
        $this->set(compact('chats'));
    }


    public function view($id = null)
    {
        $chat = $this->Chats->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('chat'));
    }


    public function add()
    {
        $chat = $this->Chats->newEmptyEntity();
        if ($this->request->is('post')) {
            $chat = $this->Chats->patchEntity($chat, $this->request->getData());
            if ($this->Chats->save($chat)) {
                $this->Flash->success(__('The chat has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chat could not be saved. Please, try again.'));
        }
        $this->set(compact('chat'));
    }


    public function edit($id = null)
    {
        $chat = $this->Chats->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $chat = $this->Chats->patchEntity($chat, $this->request->getData());
            if ($this->Chats->save($chat)) {
                $this->Flash->success(__('The chat has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chat could not be saved. Please, try again.'));
        }
        $this->set(compact('chat'));
    }


    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $chat = $this->Chats->get($id);
        if ($this->Chats->delete($chat)) {
            $this->Flash->success(__('The chat has been deleted.'));
        } else {
            $this->Flash->error(__('The chat could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function to($user_to = null)
    {

        $chat = $this->Chats->newEmptyEntity();
        if ($this->request->is('post')) {
            $chat = $this->Chats->patchEntity($chat, $this->request->getData());
//            debug($chat);
//            exit();
            if ($this->Chats->save($chat)) {
                $this->Flash->success(__('The chat has been saved.'));
                return $this->redirect(['action' => 'to', $user_to]);
            }
            $this->Flash->error(__('The chat could not be saved. Please, try again.'));
        }

        $this->set(compact('chat'));
        $this->loadModel('Users');
        $users = $this->Users->find();
        $to = $this->Users->get($user_to, [
            'contain' => [],
        ]);

        $this->set(compact(['to','users']));

        $user_from =$this->Authentication->getResult()->getData()->id;

        $this->viewBuilder()->setLayout('chat1');
        $chats = $this->Chats->find()
            ->where([
                'OR' =>[
                    ['AND'=>['user_id_from' => $user_from, 'user_id_to' => $user_to]],
                    ['AND'=>['user_id_from' => $user_to, 'user_id_to' => $user_from]],
                ]
            ])->contain(['UserFrom', 'UserTo'])->all();

        $this->set(compact('chats'));
    }

    public function send($user_to = null){
        $user_from = $this->Authentication->getResult()->data->id;

        $chat = $this->Chats->newEmptyEntity();
        $chat->user_id_from = $user_from;
        $chat->user_id_to = $user_to;
        exitt($chat);

        if ($this->request->is('post')) {
            $chat = $this->Chats->patchEntity($chat, $this->request->getData());
            if ($this->Chats->save($chat)) {
                $this->Flash->success(__('The chat has been saved.'));
                return $this->redirect(['action' => 'to', $user_to]);
            }
            $this->Flash->error(__('The chat could not be saved. Please, try again.'));
        }
        $this->set(compact('chat'));

    }

    public function sendMessage(){
        $this->request->allowMethod('ajax');


        $chat = $this->Chats->newEmptyEntity();
        if ($this->request->is('ajax')) {
            $chat = $this->Chats->patchEntity($chat, $this->request->getData());

            if ($this->Chats->save($chat)) {
//                $this->Flash->success(__('The chat has been saved.'));

                $this->set('newMsg',$chat);
                return;
            }
            $this->Flash->error(__('The chat could not be saved. Please, try again.'));

        }
    }

    public function editMessage(){
        $this->request->allowMethod('ajax');

        if ($this->request->is(['ajax'])) {
            $para = $this->request->getData();
            $chat = $this->Chats->get($para->id);
            $chat->message = $para->message;
            if ($this->Chats->save($chat)) {
                $this->Flash->success(__('The chat has been saved.'));

            }else{
                $this->Flash->error(__('The chat could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('chat'));
    }

    public function deleteMessage()
    {
        $this->request->allowMethod(['ajax', 'delete', 'post', 'get']);
        if ($this->request->is(['ajax'])) {
//            debug($this->request->getQuery('message_id'));
//            exit;
            $id = $this->request->getQuery('message_id');
            $chat = $this->Chats->get($id);
            if(!$id){
                echo "not ".$id,' is vaild';
            }else
            if ($this->Chats->delete($chat)) {
                $this->Flash->success(__('The chat has been deleted.'));
                echo "1";

            } else {
                $this->Flash->error(__('The chat could not be deleted. Please, try again.'));
                echo "delete not comple";
            }

        }else{
            echo 'not method ajax';
        }
        exit();

//        return $this->redirect(['action' => 'index']);
    }


}
