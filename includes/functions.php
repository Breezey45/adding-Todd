<?php
		function makeStars($iNum){
			$sStars = '';

			for($i=0; $i<$iNum ; $i++){
				$sStars .= '*';
			}
			return $sStars;
		}

		function makeTree($iHeight){
			$sTree = "";
			//build the tree
			for($i=1; $i<=$iHeight;$i++){
				$sTree .= makeStars($i) . '<br/>';
			}

			$sTree .= makeStars(1);

			return $sTree;

		}
	
	?>