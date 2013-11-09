<?php
class Configuracion extends MY_Model{

	public function __construct()
	{
		parent :: __construct();
		$this->table = "configuracion_pagina";
	}
	
	function getList()
	{
		return $this->db->query("
							SELECT c.id
							,c.foto_1
							,c.thumbnail_1
							,c.foto_2
							,c.thumbnail_2
							,c.foto_3
							,c.thumbnail_3
							,c.foto_4
							,c.thumbnail_4
							,c.foto_5
							,c.thumbnail_5
							,c.foto_6
							,c.thumbnail_6
							,c.foto_7
							,c.thumbnail_7
							FROM ".$this->table." AS c
		");
	}
	
	function getById($id)
	{
		return $this->db->query("
							SELECT c.id
							,c.foto_1
							,c.thumbnail_1
							,c.foto_2
							,c.thumbnail_2
							,c.foto_3
							,c.thumbnail_3
							,c.foto_4
							,c.thumbnail_4
							,c.foto_5
							,c.thumbnail_5
							,c.foto_6
							,c.thumbnail_6
							,c.foto_7
							,c.thumbnail_7
							FROM ".$this->table." c
							WHERE c.id = $id
		");
	}
	
}