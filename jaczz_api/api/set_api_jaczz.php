<?php

	include 'database/connection_users.php';
	
	class SetApiJaczz extends conect_db
	{

		private $name;
		private $domain;
		private $user;
		private $pass;

		private $nameData;
		private $nameSettings;

		private $list_id;

		private $db;
		private $Req;

		function __construct($list_id)
		{
			$this->set_configs();
			$this->create_table();

			$this->list_id = array_reverse($_SESSION['list_id']);

			try
	        {
	          $this->db = new conect_db($this->domain, $this->user, $this->pass, $this->name);
	        }
	        catch (Exception $e)
	        {
	          die('Error : ' . $e->getMessage());
	        }
		}

		function __destruct()
		{
			$this->db->close();
        	$this->db = null;
		}

		public function creat_table_of_ids()
		{
			$this->Req = "CREATE TABLE IF NOT EXISTS `".$this->nameData."` (".
			"`id` int(11) NOT NULL AUTO_INCREMENT,".
			"`id_channel` varchar(11) NOT NULL,".
			"PRIMARY KEY (`id`)) ENGINE=InnoDB  DEFAULT CHARSET=utf8";

			if (mysqli_query($this->db, $this->Req))
			{
			}
			else
			{
			    echo 'Error : ' . mysql_error() . "\n";
			}
		}

		public function create_table_settings()
		{
			$this->Req = "CREATE TABLE IF NOT EXISTS `".$this->nameSettings."` (".
			"`id` int(11) NOT NULL AUTO_INCREMENT,".
			"`set_check` tinyint(1) NOT NULL,".
			"PRIMARY KEY (`id`)) ENGINE=InnoDB  DEFAULT CHARSET=utf8";

			if (mysqli_query($this->db, $this->Req))
			{
			}
			else
			{
			    echo 'Error : ' . mysql_error() . "\n";
			}
		}

		public function add_list_db()
		{
			$i = 2;

			while (sizeof($this->list_id) != $i)
			{
				$this->Req = "INSERT INTO ".$this->nameData." (id_channel)
      			VALUES ('".$this->list_id[$i]."')";
				mysqli_query($this->db, $this->Req);
				$i++;
			}
		}

		private function set_configs()
		{
			$this->domain = htmlspecialchars($_POST["domain"]);
			$this->user = htmlspecialchars($_POST["user"]);
			$this->pass = htmlspecialchars($_POST["pass"]);
			$this->name = htmlspecialchars($_POST["name"]);

			$this->nameData = $this->name . 'Data';
			$this->nameSettings = $this->name .'Settings';
		}

		private function create_table()
		{
			$link = mysql_connect($this->domain, $this->user, $this->pass);
	
			if (!$link) {
			    die('Conection problem : ' . mysql_error());
			}

			$sql = 'CREATE DATABASE IF NOT EXISTS '. $this->name;

			if (mysql_query($sql, $link)) {
			} else {
			    echo 'Error creation : ' . mysql_error() . "\n";
			}

			mysql_close($link);
		}
	}

?>