<?php
class home_model extends CI_Model
	{
		public function getNames()
		{
			$names=array(
				array("en"=>'Liisa',"sn"=>'Joki'),
				array("en"=>'Lisa',"sn"=>'Jaki'),
				array("en"=>'Lasi',"sn"=>'Jiki')
				);
			return $names;
		}
	}