<?php 

class Dashboard extends Controller {

    public function __construct(){
        if(!isLoggedIn()){
            redirect('users/login');
        }
    }
    public function index(){
        $data =  ['title' => 'Dashboard Student Information System'];
        $this->view('dashboard/index',$data);
    }

 
}