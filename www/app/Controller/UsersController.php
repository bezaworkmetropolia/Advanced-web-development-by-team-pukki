<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {
 
   
    
     public $paginate = array(
        'limit' => 25,
        'conditions' => array('status' => '1'),
        'order' => array('User.username' => 'asc' ) 
    );
    
     
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('login','add');
        
        if ($this->Session->read('Auth.User')){
        $id = $this->Auth->user('id'); 
    $user_data = $this->User->findById($id);
    // $user_bio = $user_data['User']['bio'];
    // $this->set('bio', $user_bio);
    $user_email = $user_data['User']['email'];
        $this->set('email', $user_email);

        }
    }
	
	public function getUsernameById($id){
		$data = $this->User->findById($id);
		return $data;
	
	}
    

 
    public function login() {
         
        //if already logged-in, redirect
        if($this->Session->check('Auth.User')){
            $this->redirect(array('action' => 'index'));      
        }
         
        // if we get the post information, try to authenticate
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                // $this->Session->setFlash(__('Welcome, '. $this->Auth->user('username')));
                $id = $this->Auth->user('id');
                $this->redirect('info');
            } else {
                $this->Session->setFlash(__('Invalid username or password'));
            }
        } 
    }
 
    public function logout() {
		$this->Auth->logout();
        $this->redirect('http://www.probableimpossibilities.com/Index.php/users/login');
    }
 
     public function index() {
	if(AuthComponent::user('role')== 1){
			$this->redirect(array('controller' => 'topics', 'action' => 'index'));
		}
        $this->paginate = array(
            'limit' => 6,
            'order' => array('User.username' => 'asc' )
        );
        $users = $this->paginate('User');
        $this->set(compact('users'));
    }
 
 
    public function add() {
        if ($this->request->is('post')) {
                 
            $this->User->create();
			
			$this->request->data['User']['role'] = 1;
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been created'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be created. Please, try again.'));
            }   
        }
    }
 
  public function edit($id = null) {
		if(AuthComponent::user('role')== 1){
			$this->redirect(array('controller' => 'topics', 'action' => 'index'));
		}
            if (!$id) {
                $this->Session->setFlash('Please provide a user id');
                $this->redirect(array('action'=>'index'));
            }
 
            $user = $this->User->findById($id);
            if (!$user) {
                $this->Session->setFlash('Invalid User ID Provided');
                $this->redirect(array('action'=>'index'));
            }
 
            if ($this->request->is('post') || $this->request->is('put')) {
                $this->User->id = $id;
                if ($this->User->save($this->request->data)) {
                    $this->Session->setFlash(__('The user has been updated'));
                    $this->redirect(array('action' => 'edit', $id));
                }else{
                    $this->Session->setFlash(__('Unable to update your user.'));
                }
            }
 
            if (!$this->request->data) {
                $this->request->data = $user;
            }
    }
    

   public function delete($id = null) {
        if(AuthComponent::user('role')== 1){
			$this->redirect(array('controller' => 'topics', 'action' => 'index'));
		}
        if (!$id) {
            $this->Session->setFlash('Please provide a user id');
            $this->redirect(array('action'=>'index'));
        }
         
        $this->User->id = $id;
        if (!$this->User->exists()) {
            $this->Session->setFlash('Invalid user id provided');
            $this->redirect(array('action'=>'index'));
        }
        if ($this->User->saveField('status', 0)) {
            $this->Session->setFlash(__('User deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
    
     public function view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->read(null, $id));
    }



 /** if (!$this->User->exists()) {
            $this->Session->setFlash('Invalid user id provided');
            $this->redirect(array('action'=>'index'));
        }
        if ($this->User->saveField('status', 0)) {
            $this->Session->setFlash(__('User deleted'));
            $this->redirect(array('action' => 'home'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        $this->redirect(array('action' => 'index')); **/

     
    public function activate($id = null) {
         if(AuthComponent::user('role')== 1){
			$this->redirect(array('controller' => 'topics', 'action' => 'index'));
		}
        if (!$id) {
            $this->Session->setFlash('Please provide a user id');
            $this->redirect(array('action'=>'index'));
        }
         
        $this->User->id = $id;
        if (!$this->User->exists()) {
            $this->Session->setFlash('Invalid user id provided');
            $this->redirect(array('action'=>'index'));
        }
        if ($this->User->saveField('status', 1)) {
            $this->Session->setFlash(__('User re-activated'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not re-activated'));
        $this->redirect(array('action' => 'index'));
    }
    

    

    
    
    public function home() {
    /*render home.ctp */
    $this->render('http://www.probableimpossibilities.com/Index.php/pages/home');
	}
	
    public function info() {
    /*render home.ctp */
    $this->render('info');
	}
	


    
    // public function books() {
    // /*render home.ctp */
    // $this->render('http://www.probableimpossibilities.com/Index.php/pages/books');
	// } 
    
    // public function about() {
    // /*render home.ctp */
    // $this->render('http://www.probableimpossibilities.com/Index.php/pages/about');
	// } 
    
    // public function tiles() {
    // /*render home.ctp */
    // $this->render('http://www.probableimpossibilities.com/Index.php/pages/tiles');
	// } 
    
    // public function contact() {
    // /*render home.ctp */
    // $this->render('http://www.probableimpossibilities.com/Index.php/pages/contact');
	// }
    
    // public function blog() {
    // /*render home.ctp */
    // $this->render('http://www.probableimpossibilities.com/Index.php/pages/blog');
	// }
    
    // public function pricing() {
    // /*render home.ctp */
    // $this->render('/Pages/pricing-table');
	// }
    
    // public function pages() {
    // /*render home.ctp */
    // $this->render('http://www.probableimpossibilities.com/Index.php/pages/products-page');
	// }   

    
   
}
