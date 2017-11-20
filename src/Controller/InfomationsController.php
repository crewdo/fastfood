<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Infomations Controller
 *
 * @property \App\Model\Table\InfomationsTable $Infomations
 *
 * @method \App\Model\Entity\Infomation[] paginate($object = null, array $settings = [])
 */
class InfomationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $infomations = $this->paginate($this->Infomations);

        $this->set(compact('infomations'));
        $this->set('_serialize', ['infomations']);
    }

    /**
     * View method
     *
     * @param string|null $id Infomation id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $infomation = $this->Infomations->get($id, [
            'contain' => []
        ]);

        $this->set('infomation', $infomation);
        $this->set('_serialize', ['infomation']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $infomation = $this->Infomations->newEntity();
        if ($this->request->is('post')) {
            $infomation = $this->Infomations->patchEntity($infomation, $this->request->getData());
            if ($this->Infomations->save($infomation)) {
                $this->Flash->success(__('The infomation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The infomation could not be saved. Please, try again.'));
        }
        $this->set(compact('infomation'));
        $this->set('_serialize', ['infomation']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Infomation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $infomation = $this->Infomations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $infomation = $this->Infomations->patchEntity($infomation, $this->request->getData());
            if ($this->Infomations->save($infomation)) {
                $this->Flash->success(__('The infomation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The infomation could not be saved. Please, try again.'));
        }
        $this->set(compact('infomation'));
        $this->set('_serialize', ['infomation']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Infomation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $infomation = $this->Infomations->get($id);
        if ($this->Infomations->delete($infomation)) {
            $this->Flash->success(__('The infomation has been deleted.'));
        } else {
            $this->Flash->error(__('The infomation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
