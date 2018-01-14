<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * FootBanners Controller
 *
 * @property \App\Model\Table\FootBannersTable $FootBanners
 *
 * @method \App\Model\Entity\FootBanner[] paginate($object = null, array $settings = [])
 */
class FootBannersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->viewBuilder()->layout('admin/admin');
        $footBanners = $this->paginate($this->FootBanners);

        $this->set(compact('footBanners'));
        $this->set('_serialize', ['footBanners']);
    }

    /**
     * View method
     *
     * @param string|null $id Foot Banner id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->layout('admin/admin');
        $footBanner = $this->FootBanners->get($id, [
            'contain' => []
        ]);

        $this->set('footBanner', $footBanner);
        $this->set('_serialize', ['footBanner']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->layout('admin/admin');
        $footBanner = $this->FootBanners->newEntity();
        if ($this->request->is('post')) {
            $footBanner = $this->FootBanners->patchEntity($footBanner, $this->request->getData());
            if ($this->FootBanners->save($footBanner)) {
                $this->Flash->success(__('The foot banner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The foot banner could not be saved. Please, try again.'));
        }
        $this->set(compact('footBanner'));
        $this->set('_serialize', ['footBanner']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Foot Banner id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->layout('admin/admin');
        $footBanner = $this->FootBanners->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $footBanner = $this->FootBanners->patchEntity($footBanner, $this->request->getData());
            if ($this->FootBanners->save($footBanner)) {
                $this->Flash->success(__('The foot banner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The foot banner could not be saved. Please, try again.'));
        }
        $this->set(compact('footBanner'));
        $this->set('_serialize', ['footBanner']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Foot Banner id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $footBanner = $this->FootBanners->get($id);
        if ($this->FootBanners->delete($footBanner)) {
            $this->Flash->success(__('The foot banner has been deleted.'));
        } else {
            $this->Flash->error(__('The foot banner could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
