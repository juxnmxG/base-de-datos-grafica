<?php
$query = 'MATCH (m: estudiante {est_name: "juan manuel"}) return m';
	$result = $connection->sendCypherQuery($query)->getResult();
	$est = $result->get('m');

	echo '<h1>nombre</h1>';
	foreach ($est as $estudiante) {
		echo $estudiante->getProperty('est_name') . '<br/>';
    
		foreach ($estudiante->getInboundRelationships() as $rel) {
			echo $rel->getStartNode()->getProperty('name') . ", " ;
		}
		echo '<br/>';
	}
?>
