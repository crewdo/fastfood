<?php
namespace App\Controller;
use App\Controller\AppController;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[] paginate($object = null, array $settings = [])
 */
class HomeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->viewBuilder()->layout('public/public');
        // $this->loadModel(['Products', 'Infomations', 'FootBanners', 'HeadBanners']);
        // $products = $this->Products->find()->contain(['ProductImages']);
        // $head_banner = $this->HeadBanners->find();
        // $head_banner = $this->HeadBanners->find();
        // $foot_banner = $this->FootBanners->find();
        // $infomations = $this->Infomations->find();
        // $this->set(['head_banner' => $head_banner,'foot_banner' => $foot_banner, 'products' => $products, 'products' => $products, 'infomations' => $infomations]);
    }
        public function login()
    {
        $this->viewBuilder()->layout('public/public');
    }
        public function register()
    {
        $this->viewBuilder()->layout('public/public');
    }
    public function contact()
    {
        $this->loadModel('Infomations');
        $this->viewBuilder()->layout('public/public');
        $infomations = $this->Infomations->find();
        $this->set(['infomations' => $infomations]);
    }

     public function about()
    {
        $this->loadModel('Infomations');
        $this->viewBuilder()->layout('public/public');
        $infomations = $this->Infomations->find();
        $this->set(['infomations' => $infomations]);
    }
         public function products()
    {
        $this->loadModel('Infomations');
        $this->viewBuilder()->layout('public/public');
        $infomations = $this->Infomations->find();
        $this->set(['infomations' => $infomations]);
    }
     public function product()
    {
        $this->loadModel('Infomations');
        $this->viewBuilder()->layout('public/public');
        $infomations = $this->Infomations->find();
        $this->set(['infomations' => $infomations]);
    }
public function checkOut()
    {
        $this->loadModel('Infomations');
        $this->viewBuilder()->layout('public/public');
        $infomations = $this->Infomations->find();
        $this->set(['infomations' => $infomations]);
    }
    public function cart()
    {
        $this->viewBuilder()->layout('public/public');
    }


}