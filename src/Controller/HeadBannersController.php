<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * HeadBanners Controller
 *
 * @property \App\Model\Table\HeadBannersTable $HeadBanners
 *
 * @method \App\Model\Entity\HeadBanner[] paginate($object = null, array $settings = [])
 */
class HeadBannersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $headBanners = $this->paginate($this->HeadBanners);

        $this->set(compact('headBanners'));
        $this->set('_serialize', ['headBanners']);
    }

    /**
     * View method
     *
     * @param string|null $id Head Banner id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $headBanner = $this->HeadBanners->get($id, [
            'contain' => []
        ]);

        $this->set('headBanner', $headBanner);
        $this->set('_serialize', ['headBanner']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $headBanner = $this->HeadBanners->newEntity();
        if ($this->request->is('post')) {
            $headBanner = $this->HeadBanners->patchEntity($headBanner, $this->request->getData());
            if ($this->HeadBanners->save($headBanner)) {
                $this->Flash->success(__('The head banner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The head banner could not be saved. Please, try again.'));
        }
        $this->set(compact('headBanner'));
        $this->set('_serialize', ['headBanner']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Head Banner id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $headBanner = $this->HeadBanners->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $headBanner = $this->HeadBanners->patchEntity($headBanner, $this->request->getData());
            if ($this->HeadBanners->save($headBanner)) {
                $this->Flash->success(__('The head banner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The head banner could not be saved. Please, try again.'));
        }
        $this->set(compact('headBanner'));
        $this->set('_serialize', ['headBanner']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Head Banner id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $headBanner = $this->HeadBanners->get($id);
        if ($this->HeadBanners->delete($headBanner)) {
            $this->Flash->success(__('The head banner has been deleted.'));
        } else {
            $this->Flash->error(__('The head banner could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
