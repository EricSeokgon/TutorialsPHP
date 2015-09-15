<?php 
function get_members(){

	return ['sklee','hadeslee','k8805'];

}

$members = get_members();

for ($i=0; $i < count($members); $i++) { 
	 echo ucfirst($members[$i]).'<br>';
}

 ?>