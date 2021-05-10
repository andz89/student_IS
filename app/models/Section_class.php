<?php
  class Section_class {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

       // Regsiter user
       public function addGrade($data){
        $this->db->query('INSERT INTO class (grade, teacher, grade_id) VALUES(:grade, :teacher, :grade_id)');
        // Bind values
        $this->db->bind(':grade', $data['grade_level']);
        $this->db->bind(':teacher', $data['teacher']);
        $this->db->bind(':grade_id', $data['grade_id']);
  
        // Execute
        if($this->db->execute()){
          return true;
        } else {
          return false;
        }
      }
         // add student
         public function addStudent($data){
          $this->db->query('INSERT INTO student (name, lastName, class_id) VALUES(:name, :lastName, :class_id)');
          // Bind values
          $this->db->bind(':name', $data['name']);
          $this->db->bind(':lastName', $data['lastName']);
          $this->db->bind(':class_id', $data['class_id']);

          // Execute
          if($this->db->execute()){
            return true;
          } else {
            return false;
          }
        }
      //get classes 
      public function getClasses(){
        $this->db->query('SELECT * FROM class ORDER BY id DESC');
   
  
        $rows = $this->db->resultSet();
        return $rows;
      }
        //get student
        public function getStudent($id){
          $this->db->query('SELECT * FROM student WHERE class_id = :class_id');
          $this->db->bind(':class_id', $id);
    
          $rows = $this->db->resultSet();
          return $rows;
        }

      public function getClassesById($id){
        $this->db->query('SELECT * FROM class WHERE id = :id');
      $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
      }

      // public function getClassByid($id){
      //   $this->db->query('SELECT * FROM class WHERE id = :id');
      // $this->db->bind(':id', $id);

      // $row = $this->db->single();

      // return $row;
      // }

      public function deleteClass($id){
        $this->db->query('DELETE FROM class WHERE id = :id');
        // Bind values
        $this->db->bind(':id', $id);
  
        // Execute
        if($this->db->execute()){
          return true;
        } else {
          return false;
        }
      }

  }