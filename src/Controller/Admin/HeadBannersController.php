<?php
namespace App\Controller\Admin;

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
           $this->viewBuilder()->layout('admin/admin');
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
           $this->viewBuilder()->layout('admin/admin');
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
           $this->viewBuilder()->layout('admin/admin');
        $headBanner = $this->HeadBanners->newEntity();
        if ($this->request->is('post')) {
            // $headBanner = $this->HeadBanners->patchEntity($headBanner, $this->request->getData());
              var_dump($this->request->getData());
              $data = $this->request->getData();
           if (!empty($_FILES)) {
          
             $res = $this->Functions->uploadImage($_FILES['banner'], 'img/banners/');
             var_dump($res);
               if($res['status'] = 'success'){
                 $headBanner->image = $res['data'];
                 }
                 else{
                     $this->Flash->error($res['message']);
                 }
            }
            $headBanner->title_st = $data['title_st'];
            $headBanner->title_nd = $data['title_nd'];
            $headBanner->start_special_date = $data['start_special_date'];
            $headBanner->end_special_date = $data['end_special_date'];
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
           $this->viewBuilder()->layout('admin/admin');
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
