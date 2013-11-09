<?php
class Mgaleria extends MY_Model{

	public function __construct()
	{
		parent :: __construct();
		$this->table_fotos = "fotos_galerias_avances";
		$this->table_principal = "galerias";

	}
	
	function getList($num,$offset)
	{
		return $this->db->query("
							SELECT g.id
							,g.titulo
							,g.descripcion
							,g.foto_1
							,g.thumbnail_1
							,g.url
							FROM ".$this->table_principal." AS g
							WHERE g.status = 1
							ORDER BY g.titulo ASC
							LIMIT ".$offset.",".$num
		);
	}
	function getGalleries(){
		return $this->db->query("
			SELECT ga.titulo,
			ga.id,
			ga.seo_tit,			
			ga.foto,
			ga.thumbnail 
			FROM ". $this->table_principal ." AS ga
			-- LEFT JOIN ".$this->table_fotos." AS fga
			-- ON ga.id = fga.`id_galeria`
			ORDER BY ga.id DESC"
			);
	}
	
	function getNum()
	{
		$query = $this->db->query("
							SELECT COUNT(g.id) num
							FROM ".$this->table_principal." AS g
							WHERE status=1
		");
		$result = $query->row();
		return $result->num; 
	}

	function getByGal($num=1){
		$bottom= $num-1;
		//$LIMIT = ($num == 0) ? "0 , 2"  : $bottom .", 3" ;
		$LIMIT = $num-1 ;
		return $this->db->query("
			SELECT g.id
			,g.titulo
			,g.descripcion
			,g.foto_1
			,g.thumbnail_1 
			FROM ".$this->table_principal." g 
			WHERE g.status=1
			ORDER BY g.id ASC
			LIMIT ". $LIMIT. ",1
		");	 
	}
	
	
	function getById($id)
	{
		$id=1;
		return $this->db->query("
			SELECT g.id
			,g.titulo
			,g.descripcion
			,g.foto_1
			,g.thumbnail_1 
			FROM ".$this->table_principal." g 
			WHERE g.status=1
			AND g.id = $id
		");
	}
	function getAllfromID($id= 1){
		
		return $this->db->query("
			SELECT ga.titulo
			, g.foto_1
			, g.thumbnail_1
			,ga.descripcion 
			FROM ".$this->table_fotos." AS g 
			LEFT JOIN ".$this->table_principal." ga ON ga.id=g.id_galeria 
			WHERE g.id_galeria = $id 
			AND g.status= 1 
			");
	}
	function getAllRandom(){
		
		return $this->db->query("
			SELECT gf.`foto_1`
			, gf.`thumbnail_1` 
			FROM ".$this->table_fotos." AS gf
			LEFT JOIN ".$this->table_principal." ga 
			ON ga.id = gf.`id_galeria` 
			WHERE gf.`status`=1 
			AND ga.status=1
			ORDER BY RAND()
			LIMIT 15");
	}
	
	
}
?>