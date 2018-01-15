<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\Table;
use Cake\Controller\Controller;
use Cake\Core\Configure;
use Cake\Event\Event;
use App\ORM\Query;
use Cake\ORM\TableRegistry;
use App\Controller\DateTime;
use Cake\I18n\Time;
use Cake\View\Helper\SessionHelper;

session_start();
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
        $this->loadModel('Products');
        $this->loadModel('ProductImages');
        $this->loadModel('Informations');
        $this->loadModel('FootBanners');
        $this->loadModel('HeadBanners');
        $this->loadModel('ProductCategories');
         $this->loadModel('OrderDetails');
        // $products = $this->Products->find()->contain(['ProductImages']);
        $categories = $this->ProductCategories->find();
        $categories2 = $this->ProductCategories->find();
        $head_banner = $this->HeadBanners->find();
        $products = $this->Products->find();
        $foot_banner = $this->FootBanners->find();
        $informations = $this->Informations->find();


        //New 4 Products
        $new_products = $this->Products->find()->order(['created' => 'DESC'])->limit(4);
        $products_images = $this->ProductImages->find()->where(['ProductImages.feature =' => 1]);

        //Ban chay Products
       
        // $good_products  = $this->OrderDetails->find('all', array(
        //         'fields'=>'COUNT(*)', 
        //         'group'=>'OrderDetails.product_id'
        //         ));

        $good_products = $this->OrderDetails->find('all');

        $good_products->select([ 
                          'product_id',
                          'Products.name',
                          'Products.price',
                          'count' => $good_products->func()->count('*')
                        ])
                 ->contain(['Products'])
                 ->group('product_id')

                 ->order(['count'=> 'DESC'])
                 ->limit(8);

        //Load Discount Categories
        $id_discounts = $this->Products->find()->select(['category_id'])->where(['discount >' => 0 ]);

        $this->set(['head_banner' => $head_banner,'foot_banner' => $foot_banner, 'products' => $products, 'infomations' => $informations, 'categories' => $categories, 'categories2' => $categories2, 'id_discounts' => $id_discounts, 'new_products' => $new_products, 'products_images' =>  $products_images, 'good_products'=>$good_products ]);
    }
        public function loginGoogle()
    {         
        $this->viewBuilder()->layout('');
        $this->loadModel('Customers');
 
        $googleUserData = $this->request->data;
        $str ='temp';
        if(isset($googleUserData['name']))
        {
            $str = $googleUserData['name'];
            $img = $googleUserData['img'];
            $token = $googleUserData['token'];
            $ggname = $googleUserData['ggname'];
        }
        // $client_id = '1034712506855-lt18obb9emd1fdvu1vh8csh86gc7fka6.apps.googleusercontent.com';
        // $client = new \Google_Client();
        // $client->setClientId($client_id);
        // $payload = $client->verifyIdToken($token);
        // if($payload){

        $account = $this->Customers->find('all', [ 'conditions' => ['Customers.email' => $str]])->first();
        if($account == null){
        // Nếu chưa đăng nhập lần nào, thì tạo record mới
             $customer = $this->Customers->newEntity();
             $customer->email = $str;
             $customer->name = $ggname;
             $this->Customers->save($customer);
             $_SESSION['id'] = $customer->id;
        }

        else{
           $_SESSION['id'] = $account->id;
        }
           $_SESSION['name'] = $ggname;
           $_SESSION['email'] = $str;
           $_SESSION['img'] = $img;

           // $session->write('user.name', $ggname);
           // $session->write('user.email', $str);
           // $session->write('user.img',$img);
           // $session->write('user.token',$token);

       // }

           // var_dump($googleUserData);
// }
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
    public function logout(){
        session_destroy();
          return $this->redirect(['action' => 'index']);
    }

    public function beforeFilter(Event $event){
        $this->Auth->Allow(['loginGoogle', 'register', 'contact', 'about', 'products', 'product', 'checkOut', 'cart','index', 'logout' ]);
        $session = $this->request->session();
        // $a = $session->read('Auth.user.email');
        // if($a != null)
        // {
        // $this->Auth->Allow(['logout']);
        // }
        return parent::beforeFilter($event);


}
}