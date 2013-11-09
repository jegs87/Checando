<?php
class minicio extends MY_Model{

	public function __construct()
	{
		parent :: __construct();
		$this->table = "sliders";
	}
	
	function getListInicio()
	{
		return $this->db->query("
							SELECT s.id
							,s.titulo
							,s.foto_1
							,s.tit_1
							,s.desc_1
							,s.foto_2
							,s.tit_2
							,s.desc_2
							,s.foto_3
							,s.tit_3
							,s.desc_3
							,s.foto_4
							,s.tit_4
							,s.desc_4
							,s.foto_5
							,s.tit_5
							,s.desc_5
							,s.foto_6
							,s.tit_6
							,s.desc_6
							,s.foto_7
							,s.tit_7
							,s.desc_7
							FROM ".$this->table." AS s
							WHERE s.id=1
		");
	}

	function getListLanding()
	{
		return $this->db->query("
							SELECT s.id
							,s.titulo
							,s.foto_1
							,s.tit_1
							,s.desc_1
							,s.foto_2
							,s.tit_2
							,s.desc_2
							,s.foto_3
							,s.tit_3
							,s.desc_3
							,s.foto_4
							,s.tit_4
							,s.desc_4
							,s.foto_5
							,s.tit_5
							,s.desc_5
							,s.foto_6
							,s.tit_6
							,s.desc_6
							,s.foto_7
							,s.tit_7
							,s.desc_7
							FROM ".$this->table." AS s
							WHERE s.id=2
		");
	}
	
	function getById($id)
	{
		return $this->db->query("
							SELECT s.id
							,s.titulo
							,s.foto_1
							,s.thumbnail_1
							,s.foto_2
							,s.thumbnail_2
							,s.foto_3
							,s.thumbnail_3
							,s.foto_4
							,s.thumbnail_4
							,s.foto_5
							,s.thumbnail_5
							,s.foto_6
							,s.thumbnail_6
							,s.foto_7
							,s.thumbnail_7
							,s.keywords
							FROM ".$this->table." s
							WHERE s.id = $id
		");
	}
	
}
?>