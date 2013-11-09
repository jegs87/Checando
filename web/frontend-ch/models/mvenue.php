<?php
    class mvenue extends MY_Model{

        public function __construct()
        {
            parent :: __construct();
            $this->table_principal = "venues";

        }

        function getList()
        {
            return $this->db->query("
							SELECT g.id
							,g.datetime
							,g.venueId
							,g.venueName
							,g.venueTwitter
							,g.venueLat
							FROM ".$this->table_principal." AS g
							ORDER BY g.id ASC"
            );
        }




        function getById($id)
        {

            return $this->db->query("
			SELECT g.id
							,g.datetime
							,g.venueId
							,g.venueName
							,g.venueTwitter
							,g.venueLat
			FROM ".$this->table_principal." g
			WHERE g.id = $id
		");
        }



    }
?>