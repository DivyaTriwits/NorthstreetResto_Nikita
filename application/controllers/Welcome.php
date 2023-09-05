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

        $this->load->database();  
         //load the model  
         $this->load->model('Select'); 
		 $data['result']=$this->Select->food(); 
		$this->load->view('main',$data);
	



		
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
         $this->load->model('Select');  
         //load the method of model  
         $data['result']=$this->Select->select();  
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

	//Fetching Datafrom Database
	public function registeredusers()
	{
      
        $this->load->database();  
         //load the model  
         $this->load->model('Select');  
         //load the method of model  
         $data['result']=$this->Select->select();  
         //return the data in view
         $this->load->view('dashboard');  
         $this->load->view('registeredusers', $data);
         

		
	}
    //delete functions
    public function deletedata($id)
{
	 $this->load->model('Select'); 
  $id1=$id;
  $response=$this->Select->deleterecords($id1);
  if($response==true){
    echo "Data deleted successfully !";
}
  else{
    echo "Error !";
  }
  $this->load->database();  
         //load the model  
         $this->load->model('Select');  
         //load the method of model  
         $data['result']=$this->Select->select();  
         //return the data in view
         $this->load->view('dashboard');  
         $this->load->view('registeredusers', $data);
}

//update
public function dispdata()
	{
	$result['data']=$this->Hello_model->registeredusers1();
	$this->load->view('registeredusers',$result);
	}
	public function updatedata($id)
	{
		$this->load->model('Select'); 
	$id2=$id;
	$result['data']=$this->Select->registeredusers1ById($id2);
	$this->load->view('update_records',$result);
	
		if($this->input->post('update'))
		{
		$firstname=$this->input->post('firstname');
		$lastname=$this->input->post('lastname');
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$confirmpassword=$this->input->post('confirmpassword');
		$this->Select->update_records($firstname,$lastname,$email,$password,$confirmpassword,$id);
		echo "Date updated successfully !";
		}

		$this->load->database();  
        
         $this->load->model('Select');  
   
         $data['result']=$this->Select->select();  
         //return the data in view
         $this->load->view('dashboard');  
         $this->load->view('registeredusers', $data);
}

	

	
	
	public function addfoods()
	{
		
		 $this->load->database(); 
		
         
       
         if(!empty($_FILES['picture']['name'])){
                $config['upload_path'] = 'uploads/images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['picture']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                }else{
                    $picture = '';
                }
            }else{
                $picture = '';
            }
            
            //Prepare array of user data
            $userData = array(
                'name' => $this->input->post('name'),
                'item' => $this->input->post('item'),
                'price' => $this->input->post('price'),
                'picture' => $picture
            );
            
            //Pass user data to model
            $insertUserData = $this->db->insert('addfood',$userData);
            
            //Storing insertion status message.
            if($insertUserData){
                $this->session->set_flashdata('success_msg', 'User data have been added successfully.');
            }else{
                $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
            }
        $this->load->model('Select');  
   
         $data['result']=$this->Select->select();  
         //return the data in view
         $this->load->view('dashboard'); 
        //Form for adding user data
        $this->load->view('addfood');
    }

         
         
         

		
	
	public function addfoodview()
	{
		
		  $this->load->database();  
         //load the model  
         $this->load->model('Select');  
         //load the method of model  
         $data['result']=$this->Select->food();   
         //return the data in view
         $this->load->view('dashboard');  
         $this->load->view('addfood', $data);
		
		
	}


	//Food Menu Fetching data from database

	public function foodmenu()
	{
      
        $this->load->database();  
         //load the model  
         $this->load->model('Select');  
         //load the method of model  
         $data['result']=$this->Select->getfood();  
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
         $this->load->model('Select');  
         //load the method of model  
         $data['result']=$this->Select->select();  
         //return the data in view
         $this->load->view('dashboard');  
         
         

		
	}
	public function addreviewview()
	{
		
		  $this->load->database();  
         //load the model  
         $this->load->model('Select');  
         //load the method of model  
         $data['result']=$this->Select->select();  
         //return the data in view
         $this->load->view('dashboard');  
         $this->load->view('addreview', $data);
		
		
	}
	//fetching data of Customer review

	public function customerreview()
	{
      
        $this->load->database();  
         //load the model  
         $this->load->model('Select');  
         //load the method of model  
         $data['result']=$this->Select->getreview();  
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
         $this->load->model('Select');  
         //load the method of model  
         $data['result']=$this->Select->getreview();  
         //return the data in view
         $this->load->view('dashboard');  
         
         

		
	}
	public function addorderview()
	{
		
		  $this->load->database();  
         //load the model  
         $this->load->model('Select');  
         //load the method of model  
         $data['result']=$this->Select->getreview();  
         //return the data in view
         $this->load->view('dashboard');  
         $this->load->view('addorder', $data);
		
		
	}

	//fetching data of add order

	public function vieworder()
	{
      
        $this->load->database();  
         //load the model  
         $this->load->model('Select');  
         //load the method of model  
         $data['result']=$this->Select->getorder();  
         //return the data in view
         $this->load->view('dashboard');  
         $this->load->view('vieworder', $data);
         

		
	}
	

	


		
	
	


	
}
