<?php
class Register_model extends CI_Model
{
	function insert_data($firstname,$lastname,$email,$password,$confirmpassword)
	{
	$query=$this->db->query("select * from log where (email='".$email."')");
		$row = $query->num_rows();
		if($row)
		{
		$data['message']="<h3 style='color:red'>This user already registered</h3>";
		 echo '<script>alert("This user already registered")</script>';
		}
		else
		{
		$query=$this->db->query("insert into log set firstname='$firstname',lastname='$lastname',email='$email',password='$password',confirmpassword='$confirmpassword'");

		$data['message']="<h3 style='color:blue'>You are registered successfully</h3>";
		 echo '<script>alert("You are registered successfully")</script>';
		}

		$this->load->view('registration_view',@$data);
		}

	}