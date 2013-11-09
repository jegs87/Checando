<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class mtop extends MX_Controller {

	public $data;
	
	public function __construct()
	{
		parent::__construct();		
		//session_start();		
		$this->load->helper(array('url','tools'));
		//$this->load->model(array('mcurso','mtour','meco','marticulo','mrecorrido'));	
		//$this->output->enable_profiler(TRUE);
	}

    public function index(){

        $this->load->view('menus/index_view',null);
    }
    public function mobil(){
        $this->load->view('menus/mobil/index_view',null);
    }

	public function index2()
	{
		
		$seccion = $this->uri->segment(1);
		 $metodo = $this->uri->segment(2);
		 $url = $this->uri->segment(3);
		$data[''] ='';
		switch($seccion){
			case '':
			
			$vista='inicio_view';
			
			break;
			case 'index.php':
			
			$vista='inicio_view';
			
			break;
			case 'inicio':
			/*
			$data['recorridos'] = $this->mrecorrido->getList();
			$id_c='';
			if(($url!='') ||($url=null)){
				$id_c =$this->getId($url);
			}
			$data['id_c'] = $id_c;
			*/
			$vista='inicio_view';
			
			break;
			
			case 'somos':
			/*
			$data['metodo'] = $metodo;
			$data['cursos'] = $this->mcurso->getList();
			$id_c='';
			if(($url!='') ||($url=null)){
				$id_c =$this->getId($url);
			}
			$data['id_c'] = $id_c;
			*/
			$vista='somos_view';
			break;
			
			case 'programas':
			/*
			$data['metodo'] = $metodo;
			$data['tours'] = $this->mtour->getList();
			$id_c='';
			if(($url!='') ||($url=null)){
				$id_c =$this->getId($url);
			}
			$data['id_c'] = $id_c;
			*/
			$vista='programas_view';
			break;
			
			case 'noticias':
			/*
			$data['metodo'] = $metodo;
			$data['ecos'] = $this->meco->getList();
			$id_c='';
			if(($url!='') ||($url=null)){
				$id_c =$this->getId($url);
			}
			$data['id_c'] = $id_c;
			*/
			$vista='noticias_view';
			break;
			
			case 'servicios':
			/*
			$data['last'] = $this->marticulo->getLast(2);
			*/
			$vista='servicios_view';
			break;
			
			case 'contacto':
			$vista='contacto_view';
			break;
			case 'enlaces':
			$vista='enlaces_view';
			break;
			default:
			$vista='inicio_view';
			break;
		}
		$this->load->view('menus/'.$vista,$data);
	}
	
	function getId($url){
		$params = explode('-',$url);
		return $params[0];
	}
	
	function getIds($url){
		$params1 = explode('txt',$url);
		// id1-id2-id3-
		$params2 = explode('-',$parama1[0]);
		//params2 es un arreglo de los ids
		return $params2;
	}
}
?>