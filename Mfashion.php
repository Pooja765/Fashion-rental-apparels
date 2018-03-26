<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mfashion extends CI_Model
 {
    public function saveEmployee($data)
  	 {
  		  $this->db->insert('users',$data);   // Inserting data in ciproject_employee table

                         //Insert id in $emp_id variable
  	 }

     public function get_data()
    {
    $query=$this->db->get('users');    //its a string

    $result = $query->result_array();
    return $result;

    }

    public function verify()
    {
                    $flag=0;
                    $name=$this->input->post('name');
                    $pwd=$this->input->post('password');
                    // echo $name;
                    // echo $pwd;
                    $this->db->select('user_name,user_pwd');
                       $this->db->where('user_name',$name);
                       $this->db->where('user_pwd',$pwd);

                      $result = $this->db->get('users');
                      // return $result->result_array();
                      if (!empty($result->result_array())) {
                        return true;
                      }else {
                        return false;
                      }
    }

  public function  insertData()
  {

    $data=array(
                    'user_name'=>$this->input->post('name'),
                    'user_phone'=>$this->input->post('contact'),
                    'user_email'=>$this->input->post('email'),
                    'user_address'=>$this->input->post('address'),
                    'user_pwd'=>$this->input->post('password')
              );
              $this->db->insert('users',$data);
  }

  public function  getdata()
  {
    $res=$this->db->get('items');
    return $res->result_array();

}


public function insert_customer($data)
{
$this->db->insert('customers', $data);

}
public function save()
{
  $customer = array(
  'name' => $this->input->post('name'),
  'email' => $this->input->post('email'),
  'address' => $this->input->post('address'),
  'phone' => $this->input->post('phone')
);

$this->db->insert('customers',$customer);
}
    // public function update_data()
    // {
    //   $data = array(
    //                   'emp_address' => 'London',
    //                   'emp_name'  => 'Afnan',
    //
    //               );
    //
    //   $this->db->where('emp_id', '10');
    //   $this->db->update('ciproject_employee',$data);
    // }

    // public function delete_data()
    // {
    //   $this->db->where('emp_id', '25');
    //   $this->db->delete('ciproject_employee');
    // }

  }

?>
