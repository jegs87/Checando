<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class footer extends MX_Controller {

	public $data;
	public $user;
	
	public function __construct()
	{
		parent::__construct();				
		$this->load->helper(array('url','captcha'));
        // $this->load->model(array('mtestimonio'));

    }

	public function index()
	{
        $data['seccion'] = $this->uri->segment(1);
        $data[''] = '';

            // obtenemos consulta de un testimonio aleatorio
            $data['q'] =''; // $this->mtestimonio->getRandom()->row();
            $this->load->view('footer/index_view',$data);

	}
}
