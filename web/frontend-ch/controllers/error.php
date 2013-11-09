<?php
class Error extends MX_Controller {
	public $data;
	public function __construct(){
		parent::__construct();
		/* Parametros SEO */
		$this->meta_description 	='';
		$this->meta_keywords 		='';
		$this->meta_robots 			='index,follow';$this->meta_rating ='GENERAL';$this->meta_distribution 	='GLOBAL';$this->meta_copyright ='HUSSE';$this->meta_author ='NAVEGANTE';
		$this->metatags='<meta name="description" content="'.$this->meta_description.'" /><meta name="keywords" content="'.$this->meta_keywords.'" /> <meta name="robots" content="'.$this->meta_robots.'" /> <meta name="rating" content="'.$this->meta_rating.'" /> <meta name="distribution" content="'.$this->meta_distribution.'" /> <meta name="copyright" content="'.$this->meta_copyright.'" /> <meta name="author" content="'.$this->meta_author.'" /> ';
		$this->data['controlador'] = '';
		$this->data['js']		='';
		$this->data['fjs']		='';
		$this->data['css']				='

		';
		$this->data['meta_tags']		=$this->metatags;
		$this->data['titulo'] 			='Husse';
		/* Helpers */
        $this->load->helper(array('url','text'));
		/* Modelos */	
		//$this->load->model('galeria');	
	}
 
	function error_404()
	{
        // $this->output->set_status_header('404');
        $this->data['contenido']= $this->load->view('errores/404_view',null,true);
        $this->load->view('templates/main_template',$this->data);
	}
}
?>