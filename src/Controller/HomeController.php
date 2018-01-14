<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;
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
        public function loginGoogle()
    {
        $this->viewBuilder()->layout('');
        //Nhận các giá trị từ method POST của Ajax bên login page.
        $a = $this->request->data;
        $str ="example";
        if(isset($a['name']))
        {
            $str = $a['name'];
            $img = $a['img'];
            $token = $a['token'];
        }
        // // $client_id = '1034712506855-lt18obb9emd1fdvu1vh8csh86gc7fka6.apps.googleusercontent.com';
        // $client = new \Google_Client();
        // $client->setClientId($client_id);
        // $payload = $client->verifyIdToken($token);
        // if ($payload) {

        //So sánh với bảng Staff để lấy dữ liệu ra và trả về cho Ajax xử lý
        // $dt = TableRegistry::get('Staffs'); 
        // $record = $dt->find('all', [ 'conditions' => ['Staffs.email' => $str]])->first();
        // $rowcount = $dt->find()->where(['email' => $str])->count();
        // if($rowcount>0){
        // Nếu đúng là nhân viên thì ghi Session
       $session = $this->request->session();
       $session->write('Auth.user.name', $str);
       $session->write('Auth.user.img',$img);
       $session->write('Auth.user.token',$token);
       echo "1";
    
        // }
        // else{
        //     echo "0";
        // }

    // }
    //     else{
    //         echo "0";
    //     }
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

    public function beforeFilter(Event $event){
        $this->Auth->Allow(['loginGoogle', 'register', 'contact', 'about', 'products', 'product', 'checkOut', 'cart','index' ]);
        $session = $this->request->session();
        // $a = $session->read('Auth.user.email');
        // if($a != null)
        // {
        // $this->Auth->Allow(['logout']);
        // }
        return parent::beforeFilter($event);


}
}