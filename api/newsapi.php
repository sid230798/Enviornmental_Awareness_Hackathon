<?php

require_once "../includes/common.php";

if(isset($_GET['id'])){
    $newsid = $_GET['id'];
    $query = "SELECT title, content, url, image_url, time_stamp FROM news WHERE id = '$newsid'";
    $result = $con->query($query);
    if($result && $result->num_rows != 0){
        $json = array();
        $row = $result->fetch_assoc();
        $json = array(
            'title' => $row['title'],
            'content' => $row['content'],
            'url' => $row['url'],
            'image_url' => $row['image_url'],
            'time_stamp' => $row['time_stamp']
        );
        $jsonstring = json_encode($json);
        echo $jsonstring;
    }
}

?>