<?php
class Pages extends Controller{
    public function __construct(){
        if(isLoggedIn()){
            redirect('dashboard/index');
        }
    }

    public function index(){
        $data =  ['title' => 'Welcome to Student Information System',];
        $this->view('pages/index', $data);
    }




}
