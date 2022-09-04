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

    public function initialize() : void {
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
        $this->viewBuilder()->setLayout('chat1');
        $chats = $this->paginate($this->Chats);
        $this->loadModel('Users');
        $users = $this->paginate($this->Users);
  
                $this->set(compact('users'));

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

    public function to($id = null)
    {
        $this->viewBuilder()->setLayout('chat1');
        $this->loadModel('Users');
        $users = $this->Users->find();
        $to = $this->Users->get($id, [
            'contain' => [],
        ]);
        $from = $this->Authentication->getResult()->getData();
        $chats = $this->Chats->find()
            ->where([

                'OR'=>[
                    ['AND'=>[
                        'user_id_from'=>$to->id,
                        'user_id_to'=>$from->id
                    ]],                    
                    ['AND'=>[
                        'user_id_from'=>$from->id,
                        'user_id_to'=>$to->id
                    ]],
                ]
            ])
            ->contain(['UserFrom','UserTo'])->all();
        $this->set(compact(['to','users', 'chats','from']));
    }

    public function sendMessage(){
        $this->request->allowMethod(['ajax']);
        if($this->request->is('ajax')){
            $chat = $this->Chats->newEmptyEntity();
            $chat = $this->Chats->patchEntity($chat, $this->request->getData());
            $chat->user_id_from = $this->Authentication->getResult()->getData()->id;
            // $chat->user_id_to = $this->request->getData('to');
            if($this->Chats->save($chat)){
                $this->set(compact('chat'));
            }else{
                $this->Flash->error(__('The chat could not be saved. Please, try again.'));
            }
        }
    }

}
