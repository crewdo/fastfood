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
         $this->loadModel('ProductUnits');
         $this->loadModel('ProductCategories');

        $productCategories = $this->Products->ProductCategories->find();
        $productUnits = $this->ProductUnits->find();
        $this->set(compact('product'));
        $this->set(['unit'=> $productUnits, 'productCategories'=> $productCategories ]);
        // save
         $product = $this->Products->newEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
             // var_dump($this->request->getData());
             $product = $this->Products->newEntity([
                'category_id' =>$data['category_id'],
                'status' =>$data['status'],
                'name' =>$data['name'],
                'unit_id' =>$data['unit_id'],
                'price' =>$data['price'],
                'content' =>$data['content'],
                'discount' =>$data['discount'],
                'hot' => $data['hot'],
                'special' =>$data['special'],
                'review_number' =>$data['review_number'],
                'review' =>$data['review'],
                'hot' =>$data['hot'],
             ]);
                $id_need = $this->Products->save($product);
              if ($id_need) {
                $this->Flash->success( 'The product has been saved.', ['key' => 'addProduct']);
                 if (!empty($_FILES)) {
                foreach ($_FILES as $key => $value) {
                        if($key == "main_image")
                        {
                            $upload = $this->uploadProductImage($value,$id_need->id, 1);

                        }
                        else
                             $upload = $this->uploadProductImage($value,$id_need->id, 0);
                       if($upload != 'success')
                        $this->Flash->error($upload);
                    }


                } 
                return $this->redirect(['action' => 'add']);
            }
           else $this->Flash->error(__('The product could not be saved. Please, try again.'));
            // echo 'hahaha';
     

       
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
        $this->loadModel('ProductImages');
          $this->loadModel('ProductUnits');
         $this->loadModel('ProductCategories');
        $productCategories = $this->Products->ProductCategories->find();
        $productUnits = $this->ProductUnits->find();
        $productImages = $this->ProductImages->find()->where(['product_id' => $id])->all();
        $product = $this->Products->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {

            $product = $this->Products->patchEntity($product, $this->request->getData());
            if ($this->Products->save($product)) {
                $this->Flash->success( 'The product has been saved.', ['key' => 'editProduct']);
                 if (!empty($_FILES)) {
                foreach ($_FILES as $key => $value) {
                        if($key == "main_image")
                        {
                            $res = $this->Functions->uploadImage($file, 'img/products/');
                            if($res['status'] == 'success'){
                                
                             }
                            $upload = $this->uploadProductImage($value,$id_need->id, 1);
                            // remove old image get file from 
                            // unlink('path/to/file.jpg');
                        }
                        else{
                              $upload = $this->uploadProductImage($value,$id_need->id, 0);
                        }
                           
                       if($upload != 'success')
                        $this->Flash->error($upload);
                    }
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));

        }
        
    }
    $this->set(['productImages' => $productImages, 'unit'=>$productUnits, 'productCategories' => $productCategories]);
        $this->set(compact('product'));
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
    public function editImage($file, $product_id, $feature){

    }
    public function  uploadProductImage($file, $product_id, $feature){
       $res = $this->Functions->uploadImage($file, 'img/products/');
       if($res['status'] == 'success'){
                $image = $this->ProductImages->newEntity();
                $image->link = $res['data'];
                $image->product_id = $product_id;
                $image->feature = $feature;
                // var_dump($image);
                if ($this->ProductImages->save($image)) {
                     return "success";
                } else {
                    return 'fail';
                }
       }
    }
}
