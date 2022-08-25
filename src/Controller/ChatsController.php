<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Chats Controller
 *
 * @property \App\Model\Table\ChatsTable $Chats
 * @method \App\Model\Entity\Chat[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ChatsController extends AppController
{

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

        $this->loadModel('Users');
        $users = $this->Users->find();
        $to = $this->Users->get($user_to, [
            'contain' => [],
        ]);

        $this->set(compact(['to','users']));

//        $user_to = 2;
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

}
