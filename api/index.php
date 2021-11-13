<?php 
// $id= $_GET['id'];
include("db.php");
$id=@mysqli_real_escape_string($con,$_GET['id']);
$sql1="select * from personality where id = $id";
$res1=mysqli_query($con,$sql1);
$count=mysqli_num_rows($res1);
header('Content-Type:application/json');
if($count>0){
    while($row=mysqli_fetch_assoc($res1)){
        $arr1[]=$row;
    }
    echo json_encode(['status'=>'true','data'=>$arr1,'result'=>'found']);
}
else{
    echo json_encode(['status'=>'true','data'=>'No Data Found','result'=>'not']);
    }

?>