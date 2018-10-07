<?php


	function menuBuilder ( $fatboy ) {
		
		echo ('ul');
		
		foreach ( $fatboy as $key => $value ) {
			
			echo ( '<li><a href="' . $value[ 'MenuLink' ].'">'. $value[ 'MenuName' ] . '</a></li>' );
			
		}
		
		echo('</ul>');
		
	}
?>