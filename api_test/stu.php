<?php 
$id = $_GET['id']; 
$url="http://localhost:8081/api/index.php?id=$id";
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$result=curl_exec($ch);
curl_close($ch);
$result=json_decode($result, TRUE);
// echo '<pre>';
// print_r($result);
if(isset($result['status'])){
    if($result['status']==true){
        if(isset($result['result'])){
        if($result['result']=='found'){

            ?>
            <table>
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Grade</td>
                    <td>Personality</td>
                </tr>
                <tr>
                    <?php
                    foreach($result['data'] as $list){
                        echo '<td>'.$list['id'].'</td>';
                        echo '<td>'.$list['name'].'</td>';
                        echo '<td>'.$list['grade'].'</td>';
                        echo '<td>'.$list['per'].'</td>';
                    }
                    ?>
                </tr>
            </table>
            <?php 
            // echo '<pre>';
            // print_r($result['data']);
        }
        else{
            echo $result['data'];
        }
    }
    }
}
else{
    echo "API not working";
}
?>