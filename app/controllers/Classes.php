<?php 

class Classes extends Controller {

    public function __construct(){
        $this->classModel = $this->model('Section_class');

        if(!isLoggedIn()){
            redirect('users/login');
        }
    }
    public function index(){
           // Get posts
      $class = $this->classModel->getClasses();

      $data = [
        'class' => $class
      ];


        $this->view('classes/index', $data);
    }
    
    public function grade($id){
      $class= $this->classModel->getClassesById($id);
      $student = $this->classModel->getStudent($id);
      $data = [
        'class' => $class,
        'student' => $student
      ];
      $this->view('classes/grade', $data);
    }

 


    public function add(){
        //check post request
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

        // Process form
          // Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
     
        // Init data
        $data =[
         'grade_level' => trim($_POST['grade_level']),
         'grade_id' => strtolower(str_replace(' ', '', $_POST['grade_level'])),
         'teacher' => trim($_POST['teacher']),
         'grade_level_err' => '',
         'teacher_err' => '',      
       ];

       // Validate grade
       if(empty($data['grade_level'])){
        $data['grade_level_err'] = 'Pleae enter grade level';
      }

      // Validate teacher
      if(empty($data['teacher'])){
        $data['teacher_err'] = 'Please enter class adviser';
      }

      if(empty($data['grade_level_err']) && empty($data['teacher_err'])){
         $this->classModel->addGrade($data);
         redirect('classes/index');
       }else {
        // Load view with errors
   
        $this->view('classes/add', $data);
      }

        }else{
    
               // Init data
          $data =[    
            'grade_level' => '',
            'teacher' => '',
              
          ];

            $this->view('classes/add', $data);
        }
       
    }
    
    public function delete($id){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // Get existing post from model
        // $post = $this->classModel->getClassById($id);
        
        // Check for owner
        // if($post->user_id != $_SESSION['user_id']){
        //   redirect('posts');
        // }

        if($this->classModel->deleteClass($id)){
          flash('class_message', 'Class Removed');
          redirect('classes');
        } else {
          die('Something went wrong');
        }
      } else {
        redirect('posts');
      }
    }

    public function addStudent($id){

 //check post request
 if($_SERVER['REQUEST_METHOD'] == 'POST'){

  // Process form
    // Sanitize POST data
  $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

  // Init data
  $data =[
   'name' => trim($_POST['name']),
   'lastName' => trim($_POST['lastName']),
   'class_id' => $id,
   'name_err' => '',
   'lastName_err' => '',      
 ];

 // Validate grade
 if(empty($data['name'])){
  $data['name_err'] = 'Pleae enter grade level';
}

// Validate lastName
if(empty($data['lastName'])){
  $data['lastName_err'] = 'Please enter class adviser';
}

if(empty($data['name_err']) && empty($data['lastName_err'])){
   $this->classModel->addStudent($data);

   redirect('classes/grade/'.$id);

 }else {
  // Load view with errors

  $this->view('classes/addStudent', $data);
}

  }else{
    $class = $this->classModel->getClassesById($id);
         // Init data
    $data =[    
      'name' => '',
      'lastName' => '',
      'class_id' => $class
    ];

      $this->view('classes/addStudent', $data);
  }

    }


 
}