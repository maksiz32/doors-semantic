<?php
//Единообразный footer для всех страниц альбомов. Год с 2018 по текущий год
		$start_Year = "2018";
		$this_Year = date('Y');
		if ($start_Year == $this_Year) {
			$years = $start_Year;
		} else {
			$years = "{$start_Year} - {$this_Year}";
		}
  echo '
		
		<div class="cell img-footer">
		
		</div>
		
		<div class="cell" id="footer">
		<div id="copyr"><h4>http://дверь32.рф&emsp;&copy; &emsp;Брянск: '.$years.'</h4></div>
		
		</div>';
?>