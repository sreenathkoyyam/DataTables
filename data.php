<?php

$db_name="sreenath"; 
$tbl_name="piechart"; 
	$conn = mysql_connect("localhost", "root", "") or die (mysql_error ());
	$db = mysql_select_db ("$db_name") or die (mysql_error ());

	$result=mysql_query ("SELECT * FROM piechart") or die (mysql_error ());

	$data = array();

	while ($row=mysql_fetch_object($result))
	{
		$data [] = $row;
	}

	//echo json_encode($data);
        
        
             

    $results = array(
            "sEcho" => 1,
        "iTotalRecords" => count($data),
        "iTotalDisplayRecords" => count($data),
          "aaData"=>$data);
/*while($row = $result->fetch_array(MYSQLI_ASSOC)){
  $results["data"][] = $row ;
}*/

echo json_encode($results);
        
        
        
?> 
