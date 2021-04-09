<?php
	$firstDir = "img/gallery/";
	$firstDirThm = "img/gallery/thm/";
	$files = new DirectoryIterator($firstDir);		
	$files_works = new RegexIterator($files, '/\.(?:jpg|jpeg|png|gif)$/i');
	foreach ($files_works as $files_work) {
		$file_path_i = $files_work->getFileName();		
		echo "<div class=\"cell\">
		<a href=\"{$firstDir}{$file_path_i}\" data-lightbox=\"my\" data-title=\"Наши работы\">
		<div class=\"thumbnail resize180\" style=\"background:url('".$firstDirThm.$file_path_i."') no-repeat; background-size: cover;\">
		</div></a></div>";
	}
?>