<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('home');
	}

   
   public function results(){

			   $cons =  $this->input->post('Consignment');

			   $query = $this->db->query("SELECT * FROM tbl_courier WHERE cons_no = '$cons'");

              if ($query->num_rows() > 0)
					{
					   foreach ($query->result() as $row)
					   {
					    $data = array(
		               'consignment' => $row->cons_no,
		               'ship_name' => $row->ship_name,
		               'phone' => $row->phone,
		               'shiper_add'=> $row->s_add,
		               'rev_name' => $row->rev_name,
		               'r_phone' => $row->r_phone,
		               'r_add' => $row->r_add,
		               'package_type' => $row->package_type,
		               'package_description' => $row->package_description,
		               'package_amount' => $row->package_amount,
		               'invice_no' => $row->invice_no,
		               'qty' => $row->qty,
		               'pick_date' => $row->pick_date,
		               'pick_time' => $row->pick_time,
		               'status' => $row->status,
		               'book_date' => $row->book_date
		               );
					      
					   }
					}

       $this->load->view('result', $data);

   }












}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */