<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trangchu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('trangchu');	
	}
	function lienheTrangChu(){
		$arrSDT["sodienthoai"] = array("321321321","43243221","324213","324545","6565");
		$this->load->view('lienhe',$arrSDT);
	}
}

/* End of file Trangchu.php */
/* Location: ./application/controllers/Trangchu.php */