<?php
	$firstDirM = "img/gallery-meb/";
	$firstDirThmM = "img/gallery-meb/thm/";
	$filesM = new DirectoryIterator($firstDirM);		
	$files_worksM = new RegexIterator($filesM, '/\.(?:jpg|jpeg|png|gif)$/i');
	foreach ($files_worksM as $files_workM) {
		$file_path_iM = $files_workM->getFileName();		
		echo "<div class=\"cell\">
		<a href=\"{$firstDirM}{$file_path_iM}\" data-lightbox=\"my\" data-title=\"http://s-mebel32.ru\">
		<div class=\"thumbnail resize180\" style=\"background:url('".$firstDirThmM.$file_path_iM."') no-repeat; background-size: cover;\">
		</div></a></div>";
	}
?>