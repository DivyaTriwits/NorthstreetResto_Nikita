<?php  
   class Select extends CI_Model  
   {  
      function __construct()  
      {  
         // Call the Model constructor  
         parent::__construct();  
      }  
      //we will use the Select function  
      public function select()  
      {  
         //data is retrive from this query  
         $query = $this->db->Select('*')->get('log');  
         return $query->result();  
      } 
      public function getfood()  
      {  
         //data is retrive from this query  
         $query = $this->db->Select('*')->get('addfood');  
         return $query->result();  
      }  

      public function getreview()  
      {  
         //data is retrive from this query  
         $query = $this->db->Select('*')->get('review');  
         return $query->result();  
      } 

      public function getorder()  
      {  
         //data is retrive from this query  
         $query = $this->db->Select('*')->get('addorder');  
         return $query->result();  
      } 

      //delete
      /*Display*/
    function registeredusers()
  {
    $query=$this->db->get("log");
    return $query->result();
  }

  function deleterecords($id)
  {
    $this->db->where("id", $id);
    $this->db->delete("log");
    return true;
  }

  //update
  function registeredusers1()
   {
   $query=$this->db->query("select * from log");
   return $query->result();
   }
   function registeredusers1ById($id)
   {
   $query=$this->db->query("select * from form where id='".$id."'");
   return $query->result();
   }
   /*Update*/
   function update_records($firstname,$lastname,$email,$password,$confirmpassword,$id)
   {
   $query=$this->db->query("update form  SET firstname='$firstname',lastname='$lastname',email='$email',password='$password',confirmpassword='$confirmpassword' where id='$id'");
   }
   }  
?> 