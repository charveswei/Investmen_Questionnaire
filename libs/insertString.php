<?php

function insertString($tableName,$data){
	$sql = "Insert into $tableName ( " ;
	foreach ($data as $key => $val ){
		$sql .= "`".$key."`,";
	}
	// remove last ','
	$sql = substr($sql,0,strlen($sql)-1);
	$sql .= " ) ";
	$sql .= " Values ( ";
	foreach ($data as $key => $val ){
		$sql .= "'".$val."',";
	}
	// remove last ','
	$sql = substr($sql,0,strlen($sql)-1);
	$sql .= " ) ";
	return $sql;
}

?>