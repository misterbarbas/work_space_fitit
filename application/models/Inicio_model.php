<?php 

	class Inicio_model extends CI_Model 
	{
		public function __construct()
		{
			$this->load->database();
		}

		public function coatchs()
		{

			$sql="SELECT id_coatch, nombre, apellidos, frase, imagen, fecha_union, instagram, provincia from coatch INNER join redes on coatch.redes = redes.id_redes";

			$query = $this->db->query($sql);
			if(count($query->result()) == 0)
			{
				return 0;
			}
			else
			{
				return $query->result();
			}
		}

		public function nuevos()
		{
			$date = date( "Y-m-d" );
			$ayer = date( "Y-m-d", strtotime( "-7 day", strtotime( $date ) ) );  
			$sql="SELECT count(*) as total from coatch where fecha_union >= ".$ayer;

			$query = $this->db->query($sql);

				return $query->result();
		}

		public function coatch($id)
		{

			$sql="SELECT id_coatch, nombre, apellidos, formacion, logros, productos, frase, imagen, facebook, instagram, youtube, spotify  
					from coatch INNER join redes on coatch.redes = redes.id_redes 
					where id_coatch = '".$id."'";

			$query = $this->db->query($sql);
			if(count($query->result()) == 0)
			{
				return 0;
			}
			else
			{
				return $query->result();
			}
		}


	}
