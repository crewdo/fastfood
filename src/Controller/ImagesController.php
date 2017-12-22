<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Filesystem\File;
use Cake\Filesystem\Folder;
/**
 * Images Controller
 *
 * @property \App\Model\Table\ImagesTable $Images
 *
 * @method \App\Model\Entity\Image[] paginate($object = null, array $settings = [])
 */
class ImagesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = ['limit' => ROW_LIMIT,
         'order' => array(
            'id' => 'desc'
            )];

        $images = $this->paginate($this->ProductImages);
        // $this->Paginator->sort('id');
        $this->viewBuilder()->layout('admin/admin');
        $this->set(compact('images'));
        $this->set('_serialize', ['images']);
    }

    /**
     * View method
     *
     * @param string|null $id Image id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $image = $this->Images->get($id, [
            'contain' => ['FootBanners']
        ]);
        $this->set('image', $image);
        $this->set('_serialize', ['image']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
         $this->viewBuilder()->layout('admin/admin');
        // $this->viewBuilder()->layout('');
if (!empty($_FILES["link"]["name"])) {
$target_dir = WWW_ROOT . 'img/';
$target_file = $target_dir . basename($_FILES["link"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["link"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
// if (file_exists($target_file)) {
//     $this->Flash->error('Sorry, file already exists.');
//     $uploadOk = 0;
// }
// Check file size
// if ($_FILES["link"]["size"] > 500000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
// }
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $this->Flash->error('Sorry, your file was not uploaded.');
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["link"]["tmp_name"], $target_file)) {
        $image = $this->Images->newEntity();
        // $image = $this->Images->patchEntity($image, $this->request->data);
        $image->link = basename($_FILES["link"]["name"]);
        // var_dump($image);
        if ($this->Images->save($image)) {

            $this->Flash->success('The image has been saved.');
            return $this->redirect(['action' => 'index']);
        } else {
            $this->Flash->error('The image could not be saved. Please, try again.');
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

    }
    $this->set(compact('image'));
    $this->set('_serialize', ['image']);
}
    /**
     * Edit method
     *
     * @param string|null $id Image id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $image = $this->Images->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $image = $this->Images->patchEntity($image, $this->request->getData());
            if ($this->Images->save($image)) {
                $this->Flash->success(__('The image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The image could not be saved. Please, try again.'));
        }
        $this->set(compact('image'));
        $this->set('_serialize', ['image']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Image id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $image = $this->Images->get($id);
        if ($this->Images->delete($image)) {
            $this->Flash->success(__('The image has been deleted.'));
        } else {
            $this->Flash->error(__('The image could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
