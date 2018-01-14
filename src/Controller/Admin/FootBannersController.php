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
        public function  uploadImage($file, $product_id, $feature){
     if (!empty($file["name"])) {
            $target_dir = WWW_ROOT . 'img/products/';
            $target_file = $target_dir . basename($file["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
            $check = getimagesize($file["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else {
                return "File is not an image.";
                $uploadOk = 0;
            }

            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            return "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
            }
            if ($uploadOk == 0) {
            $this->Flash->error('Sorry, your file was not uploaded.');
            } else {
            if (move_uploaded_file($file["tmp_name"], $target_file)) {
                $image = $this->ProductImages->newEntity();
                $image->link = '/img/products/'.$file["tmp_name"];
                $image->product_id = $product_id;
                $image->feature = $feature;
                // var_dump($image);
                if ($this->ProductImages->save($image)) {
                     return "success";
                } else {
                    return 'fail';
                }
            } else {
                return "Sorry, there was an error uploading your file.";
            }
            }

            }
    }
}
