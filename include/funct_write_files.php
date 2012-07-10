<?php
///////////////////////////////////////////////
//                @lex Guestbook             //
//      by Soulard Alexis (c) 2002 - 2006    //
//         Gieling Pierre (c) 2002 - 2012    //
//         Hercelin Maxime (c) 2005 - 2012   //
//         http://www.alexguestbook.net/     //
//             all right reserved            //
///////////////////////////////////////////////

class write_files{
	var $donnees_write = "";

	function save_donnees($donnees, $aj_saut = true){
		$this->donnees_write .= $donnees;
		if ($aj_saut)
			$this->donnees_write .= "\n";
	}

	function init_donnes(){
		$this->donnees_write = "";
	}

	function write($file){
		@chmod($file, 0777);

		$fd = @fopen($file, "w+");

		if (!@fwrite($fd, $this->donnees_write))
			return false;

		@fclose($fd);
		@chmod($file, 0755);
		return true;
	}
}
?>