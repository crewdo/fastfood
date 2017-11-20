<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductsCategories Controller
 *
 * @property \App\Model\Table\ProductsCategoriesTable $ProductsCategories
 *
 * @method \App\Model\Entity\ProductsCategory[] paginate($object = null, array $settings = [])
 */
class ProductsCategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ParentProductsCategories']
        ];
        $productsCategories = $this->paginate($this->ProductsCategories);

        $this->set(compact('productsCategories'));
        $this->set('_serialize', ['productsCategories']);
    }

    /**
     * View method
     *
     * @param string|null $id Products Category id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productsCategory = $this->ProductsCategories->get($id, [
            'contain' => ['ParentProductsCategories', 'ChildProductsCategories']
        ]);

        $this->set('productsCategory', $productsCategory);
        $this->set('_serialize', ['productsCategory']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productsCategory = $this->ProductsCategories->newEntity();
        if ($this->request->is('post')) {
            $productsCategory = $this->ProductsCategories->patchEntity($productsCategory, $this->request->getData());
            if ($this->ProductsCategories->save($productsCategory)) {
                $this->Flash->success(__('The products category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The products category could not be saved. Please, try again.'));
        }
        $parentProductsCategories = $this->ProductsCategories->ParentProductsCategories->find('list', ['limit' => 200]);
        $this->set(compact('productsCategory', 'parentProductsCategories'));
        $this->set('_serialize', ['productsCategory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Products Category id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productsCategory = $this->ProductsCategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productsCategory = $this->ProductsCategories->patchEntity($productsCategory, $this->request->getData());
            if ($this->ProductsCategories->save($productsCategory)) {
                $this->Flash->success(__('The products category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The products category could not be saved. Please, try again.'));
        }
        $parentProductsCategories = $this->ProductsCategories->ParentProductsCategories->find('list', ['limit' => 200]);
        $this->set(compact('productsCategory', 'parentProductsCategories'));
        $this->set('_serialize', ['productsCategory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Products Category id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productsCategory = $this->ProductsCategories->get($id);
        if ($this->ProductsCategories->delete($productsCategory)) {
            $this->Flash->success(__('The products category has been deleted.'));
        } else {
            $this->Flash->error(__('The products category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
