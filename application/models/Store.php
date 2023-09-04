<?php
 
 
class Store extends CI_Model{
 
    public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
    }

    public function store()

    {    
        $data = [
            'name'        => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'msg'        => $this->input->post('msg')
            
        ];
 
        $result = $this->db->insert('res', $data);
        return $result;
    
        
    }
}
?>