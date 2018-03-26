<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cfashion extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('cart');
    $this->load->model('Mfashion');
  }


	public function index()
	{

		$this->load->view('home');

	}
  public function signup()
  {

    $this->load->view('signup');

  }
  public function login()
  {

    $this->load->view('login');

  }

  public function getuser()
  {
              $t=$this->Mfashion->verify();
              if($t)
              {
                $getData['arrData'] = $this->Mfashion->getdata();
                $this->load->view('userpage',$getData);
                $this->load->view('userpage');
              }
              else {
                  redirect('Cfashion/login');
              }

  }
  public function insertuser()
  {
    $this->Mfashion->insertData();
  redirect('Cfashion/login');
  }

  public function getitem()
  {
         //$arrData = array();
         $getData['arrData'] = $this->Mfashion->get_data();
         $this->load->view('userpage',$getData);

  }

  public function getuserpage()
  {
     $this->load->view('userpage');
}

function billing_view(){
// Load "billing_view".
$this->load->view('billing_view');
}
public function save_order()
{
  // This will store all values which inserted from user.
  $this->Mfashion->save();
  redirect('Cfashion/getuser');
}

}

?>
