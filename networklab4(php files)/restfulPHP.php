<?php
//process client request (via url)
header("Content-Type:application/json");
include("functions.php");
if(!empty($_GET['wonderName']))
{
//
$wondername = $_GET['wonderName'];
$place = wonderLocatedPlace($wondername);

if(empty($place))
 deliver_response(200,"wonder not found",NULL);
else 
 deliver_response(200,"wonder found",$place);
 
 
}
else {
 deliver_response(400,"Request is not valid",NULL);
}
function deliver_response($status,$status_message,$data)
{
header("HTTP/1.1 $status $status_message") ;

$response['status_code'] = $status;
$response['status_message'] = $status_message;
$response['result']=$data;

$json_response = json_encode($response);
echo $json_response;

}

?>


