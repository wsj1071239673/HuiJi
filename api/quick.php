<?php
header("content-type:text/html;charset=utf-8");
$mysqli = new mysqli('localhost','root','root','webapp');
if($mysqli->connect_errno){
    die();
}
$page = $_GET['page'];
$startIndex = ($page - 1) * 1;
$sql = "select * from quick order by id limit $startIndex,1";
$result = $mysqli->query($sql);
if($result->num_rows){
    while( $res = $result->fetch_assoc() ) {
        $data[] = $res;
    }
}
echo json_encode($data);
?>