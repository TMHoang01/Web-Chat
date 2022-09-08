<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Status Controller
 *
 * @property \App\Model\Table\StatusTable $Status
 * @method \App\Model\Entity\Status[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StatusController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $status = $this->paginate($this->Status);

        $this->set(compact('status'));
    }

    /**
     * View method
     *
     * @param string|null $id Status id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $status = $this->Status->get($id, [
            'contain' => ['Users'],
        ]);
        exit("haha");
        $this->set(compact('status'));
    }


    public function add()
    {
        $this->request->allowMethod(['ajax']);
        $status = $this->Status->newEmptyEntity();
        if ($this->request->is('ajax')) {
            $status = $this->Status->patchEntity($status, $this->request->getData());
            if ($this->Status->save($status)) {
                // $this->Flash->success(__('The status has been saved.'));
                exit(json_encode($status));
                
            }
            $this->Flash->error(__('The status could not be saved. Please, try again.'));
        }
        $users = $this->Status->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('status', 'users'));
    }


    public function edit($id = null)
    {
        $status = $this->Status->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $status = $this->Status->patchEntity($status, $this->request->getData());
            if ($this->Status->save($status)) {
                $this->Flash->success(__('The status has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The status could not be saved. Please, try again.'));
        }
        $users = $this->Status->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('status', 'users'));
    }



    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete','ajax']);

        if($this->request->is('ajax')){
            $data = $this->request->getData();
            $user_id = $data['user_id'];
            $resource_id = $data['resource_id'];
    
            $status = $this->Status->find('all', [
                'conditions' => [
                    'user_id' => $user_id,
                    'resource_id' => $resource_id
                ]
            ])->first();
            echo json_encode($status);
    
            if ($this->Status->delete($status)) {
                return (json_encode("success ajax"));
            } else {
                return (json_encode("error ajax"));
            }

        }else{
            $status = $this->Status->get($id);
        
            if ($this->Status->delete($status)) {
                exit(json_encode("success"));
            } else {
                exit(json_encode("error"));
            }
        }





    }
}
