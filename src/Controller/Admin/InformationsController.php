<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Informations Controller
 *
 * @property \App\Model\Table\InformationsTable $Informations
 *
 * @method \App\Model\Entity\Information[] paginate($object = null, array $settings = [])
 */
class InformationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->viewBuilder()->layout('admin/admin');
        $informations = $this->paginate($this->Informations);
        $this->set(compact('informations'));
        $this->set('_serialize', ['informations']);
    }

    /**
     * View method
     *
     * @param string|null $id Information id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->layout('admin/admin');
        $information = $this->Informations->get($id, [
            'contain' => []
        ]);

        $this->set('information', $information);
        $this->set('_serialize', ['information']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->layout('admin/admin');
        $informations_i = $this->Informations->find()->first();

        $information = $this->Informations->newEntity();
        if ($this->request->is('post')) {
            $information = $this->Informations->patchEntity($information, $this->request->getData());
            if ($this->Informations->save($information)) {
                $this->Flash->success(__('The information has been saved.'));

                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error(__('The information could not be saved. Please, try again.'));
        }
        $this->set('information', $information);
        $this->set('informations_i', $informations_i);
        $this->set('_serialize', ['information']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Information id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->layout('admin/admin');
        $information = $this->Informations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $information = $this->Informations->patchEntity($information, $this->request->getData());
            if ($this->Informations->save($information)) {
                $this->Flash->success(__('The information has been edited.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The information could not be saved. Please, try again.'));
        }
        $this->set(compact('information'));
        $this->set('_serialize', ['information']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Information id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $information = $this->Informations->get($id);
        if ($this->Informations->delete($information)) {
            $this->Flash->success(__('The information has been deleted.'));
        } else {
            $this->Flash->error(__('The information could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
