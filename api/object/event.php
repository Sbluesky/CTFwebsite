<?php

	class Event
	{
		
		//get data from api CTFtime
		//object properties Event (thuộc tính đối tượng)
		public $organizers_id;
		public $organizers_name;
		public $onsite;
		public $finish;
		public $description;
		public $weight;
		public $title;
		public $url;
		public $format;
		public $start;
		public $participants;
		public $ctftime_url;
		public $location;
		public $duration; //thời lượng
		public $logo;
		public $id;
		public $ctf_id;


		//read all Event
		public function read_all_event($url)
		{
			$data = file_get_contents($url);
			return $data;
		}



	}
?>
