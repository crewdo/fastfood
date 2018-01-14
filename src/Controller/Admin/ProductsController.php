<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 *
 * @method \App\Model\Entity\Product[] paginate($object = null, array $settings = [])
 */
class ProductsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->viewBuilder()->layout('admin/admin');
               $this->paginate = ['limit' => ROW_LIMIT,
         'order' => array(
            'name' => 'desc'
            ),
         'contain'=> ['ProductCategories', 'ProductUnits']


     ];
        $products = $this->paginate($this->Products);

        $this->set(compact('products'));
        $this->set('_serialize', ['products']);
    }

    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->layout('admin/admin');
        $product = $this->Products->get($id, [
            'contain' => ['ProductCategories', 'OrderDetails', 'ProductImages', 'ProductUnits']
        ]);

        $this->set('product', $product);
        $this->set('_serialize', ['product']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()    
    {
        $this->viewBuilder()->layout('admin/admin');
        $this->loadModel('ProductImages');
        $product = $this->Products->newEntity();
        if ($this->request->is('post')) {
            $product = $this->Products->patchEntity($product, $this->request->getData());
                $id_need = $this->Products->save($product);
                $this->Flash->success(__('The product has been saved.'));

                // return $this->redirect(['action' => 'add']);
                $product_id_create = $id_need->id;
            }
            else
            $this->Flash->error(__('The product could not be saved. Please, try again.'));

          $productCategories = $this->Products->ProductCategories->find('list', ['limit' => ROW_LIMIT]);
        $productUnits = $this->Products->ProductUnits->find('list', ['limit' => ROW_LIMIT]);
        $this->set(compact('product', 'productCategories'));
        $this->set(compact('unit', 'productUnits'));
        
        $this->set('_serialize', ['product', 'unit']);
            // echo 'hahaha';




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
                $image = $this->ProductImages->newEntity();
                // $image = $this->Images->patchEntity($image, $this->request->data);
                $image->link = basename($_FILES["link"]["name"]);
                $image->product_id = $product_id_create;
                $image->feature = 1;
                // var_dump($image);
                if ($this->ProductImages->save($image)) {

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

      
    }

    /**
     * Edit method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->viewBuilder()->layout('admin/admin');
        $product = $this->Products->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $product = $this->Products->patchEntity($product, $this->request->getData());
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));

                // return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));

        }
        $productCategories = $this->Products->ProductCategories->find('list', ['limit' => ROW_LIMIT]);
        $this->set(compact('product', 'productCategories'));
        $productUnits = $this->Products->ProductUnits->find('list', ['limit' => ROW_LIMIT]);
        $this->set(compact('unit', 'productUnits'));
        $this->set('_serialize', ['product']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Product id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Products->get($id);
        if ($this->Products->delete($product)) {
            $this->Flash->success(__('The product has been deleted.'));
        } else {
            $this->Flash->error(__('The product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
