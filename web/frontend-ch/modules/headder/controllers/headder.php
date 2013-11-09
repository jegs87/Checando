<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class headder extends MX_Controller {

	public $data;
	public $user;
	
	public function __construct()
	{
		parent::__construct();				
		$this->load->helper(array('url','tools'));
        // $this->load->model(array('mtipos'));
	}
	
	public function index()
	{
        // total de lotes disponibles
        $data['q'] = ''; // $this->mtipos->getListS();
        $data['seccion'] = $this->uri->segment(1);
        $view = 'index_view';
        // $data[''] = '';
		$this->load->view('headder/'.$view,$data);
	}
	
	
}
?>