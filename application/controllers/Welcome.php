<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{

		
		$this->load->view('main');
	



		
	}
	public function store()
	{
		$data = [
            'name'        => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'msg'        => $this->input->post('msg')
            
            
        ];
        
 
        $result = $this->db->insert('res', $data);
       $this->load->view('main');

		
	}
	
	public function loginview()
	{
		
		$this->load->view('login');
		
		
	}
	public function registration_viewview()
	{
		
		$this->load->view('registration_view');
		
		
	}
	
	public function adminloginview()
	{
		
		$this->load->view('adminlogin');
		
		
	}
	public function add()
	{
		$data = [
            'name' => $this->input->post('name'),
            'pass'        => $this->input->post('pass')
            
        ];
 
        $result = $this->db->insert('admin', $data);
      
        $this->load->database();  
         //load the model  
         $this->load->model('select');  
         //load the method of model  
         $data['result']=$this->select->select();  
         //return the data in view
         $this->load->view('dashboard');
}
    //login function
    public function login()
	{
		
		if($this->input->post('Login'))
		{
			$e=$this->input->post('name');
			$p=$this->input->post('pass');
	
			$que=$this->db->query("select * from admin where name='".$e."' and pass='".$p."'");
			$row = $que->num_rows();
			if($row)
			{
			$this->load->view('dashboard');
			}
			else
			{
		$data['error']="<h3 style='color:red'>Invalid login details</h3>";
			$this->load->view('adminlogin');	
			}	
		}
		
	}
	
	function dashboard()
	{
	$this->load->view('dashboard');
	}     
         

		
	

	//Fetching Datafrom Database
	public function registeredusers()
	{
      
        $this->load->database();  
         //load the model  
         $this->load->model('select');  
         //load the method of model  
         $data['result']=$this->select->select();  
         //return the data in view
         $this->load->view('dashboard');  
         $this->load->view('registeredusers', $data);
         

		
	}
    //delete functions
    public function deletedata($id)
{
	 $this->load->model('select'); 
  $id1=$id;
  $response=$this->select->deleterecords($id1);
  if($response==true){
    echo "Data deleted successfully !";
}
  else{
    echo "Error !";
  }
  $this->load->database();  
         //load the model  
         $this->load->model('select');  
         //load the method of model  
         $data['result']=$this->select->select();  
         //return the data in view
         $this->load->view('dashboard');  
         $this->load->view('registeredusers', $data);
}
// update

public function edit()
    {
        $this->form_validation->set_rules('firstname','FristName','trim|required');
        $this->form_validation->set_rules('lastname','lastName','trim|required');
        $this->form_validation->set_rules('email','Email','trim|required');
        $this->form_validation->set_rules('password','Password','trim|required');
        $this->form_validation->set_rules('confirmpassword','Confirmpassword','trim|required');

        if ($this->form_validation->run() == FALSE) {
            echo "error";
        }
        else{
            $id = $this->input->post('id');
            $this->select->editCrud($id);
            echo "success";
        }
        $this->load->database();  
         //load the model  
         $this->load->model('select');  
         //load the method of model  
         $data['result']=$this->select->select();  
         //return the data in view
         $this->load->view('dashboard');  
         $this->load->view('registeredusers', $data);
    }

	

	
	
	public function addfoods()
	{
		
		 $this->load->database(); 
		$data = [
            'name' => $this->input->post('name'),
            'item'  => $this->input->post('item'),
            'price' => $this->input->post('price')
            
        ];
 
        $result = $this->db->insert('addfood', $data);
       
      
       
         
         //load the model  
         $this->load->model('select');  
         //load the method of model  
         $data['result']=$this->select->select();  
         //return the data in view
         $this->load->view('dashboard');  
         
         

		
	}
	public function addfoodview()
	{
		
		  $this->load->database();  
         //load the model  
         $this->load->model('select');  
         //load the method of model  
         $data['result']=$this->select->select();  
         //return the data in view
         $this->load->view('dashboard');  
         $this->load->view('addfood', $data);
		
		
	}


	//Food Menu Fetching data from database

	public function foodmenu()
	{
      
        $this->load->database();  
         //load the model  
         $this->load->model('select');  
         //load the method of model  
         $data['result']=$this->select->getfood();  
         //return the data in view
         $this->load->view('dashboard');  
         $this->load->view('foodmenu', $data);
         

		
	}
	

	

	public function write()
	{
		 $this->load->database(); 
		$data = [
            'firstname' => $this->input->post('firstname'),
            'lastname'        => $this->input->post('lastname'),
            'reviewinp'        => $this->input->post('reviewinp')
            
        ];
 
        $result = $this->db->insert('review', $data);
       
      
       
         
         //load the model  
         $this->load->model('select');  
         //load the method of model  
         $data['result']=$this->select->select();  
         //return the data in view
         $this->load->view('dashboard');  
         
         

		
	}
	public function addreviewview()
	{
		
		  $this->load->database();  
         //load the model  
         $this->load->model('select');  
         //load the method of model  
         $data['result']=$this->select->select();  
         //return the data in view
         $this->load->view('dashboard');  
         $this->load->view('addreview', $data);
		
		
	}
	//fetching data of Customer review

	public function customerreview()
	{
      
        $this->load->database();  
         //load the model  
         $this->load->model('select');  
         //load the method of model  
         $data['result']=$this->select->getreview();  
         //return the data in view
         $this->load->view('dashboard');  
         $this->load->view('customerreview', $data);
         

		
	}

	public function addorders()
	{
		
		 $this->load->database(); 
		$data = [
            'fname' => $this->input->post('fname'),
            'lname'  => $this->input->post('lname'),
            'selection'  => $this->input->post('selection'),
            
            
        ];
 
        $result = $this->db->insert('addorder', $data);
       
      
       
         
         //load the model  
         $this->load->model('select');  
         //load the method of model  
         $data['result']=$this->select->select();  
         //return the data in view
         $this->load->view('dashboard');  
         
         

		
	}
	public function addorderview()
	{
		
		  $this->load->database();  
         //load the model  
         $this->load->model('select');  
         //load the method of model  
         $data['result']=$this->select->select();  
         //return the data in view
         $this->load->view('dashboard');  
         $this->load->view('addorder', $data);
		
		
	}

	//fetching data of add order

	public function vieworder()
	{
      
        $this->load->database();  
         //load the model  
         $this->load->model('select');  
         //load the method of model  
         $data['result']=$this->select->getorder();  
         //return the data in view
         $this->load->view('dashboard');  
         $this->load->view('vieworder', $data);
         

		
	}
	

	


		
	
	


	
}
