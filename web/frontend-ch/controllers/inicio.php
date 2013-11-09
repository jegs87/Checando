<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class inicio extends MX_Controller {
    public $data, $vParameters;
    public function __construct(){
        parent::__construct();
        /* Parametros SEO */
        $this->meta_description ='';
        $this->meta_keywords    = '';
        $this->meta_robots  ='index,follow';$this->meta_rating ='GENERAL'; $this->meta_distribution  ='GLOBAL'; $this->meta_copyright ='Demo'; $this->meta_author = 'autor';
        $this->metatags ='<meta name="description" content="'.$this->meta_description.'" /><meta name="keywords" content="'.$this->meta_keywords.'" /> <meta name="robots" content="'.$this->meta_robots.'" /> <meta name="rating" content="'.$this->meta_rating.'" /> <meta name="distribution" content="'.$this->meta_distribution.'" /> <meta name="copyright" content="'.$this->meta_copyright.'" /> <meta name="author" content="'.$this->meta_author.'" /> ';
        $this->data['meta_tags'] = $this->metatags;
        $this->data['titulo'] = '';
        $this->mainView = 'inicio';
        $this->data['fjs'] = '';
        $this->data['js'] = '';
        $this->data['css'] = '';
        // Tools
        $this->load->helper(array('tools','url','date','text'));
        // Modelos
        // $this->load->model(array('mproductos','mslider'));
        // Lbrerias
        // $this->load->library(array('email','session'));
        // Debugging
        // $this->output->enable_profiler(TRUE);
}

    public function index(){
        $data['s'] =  // $this->mslider->getAll(); // obtenemos los sliders
        $data['q'] = ''; // $this->mproductos->getAllProductsSlider(); //obtenemos los productos
        $this->data['contenido'] = $this->load->view($this->mainView.'/index_view',$data,true);
        $this->load->view('templates/main_template',$this->data);
    }
}