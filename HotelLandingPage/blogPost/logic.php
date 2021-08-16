<?php

session_start();
$conn = mysqli_connect("localhost", "root", "", "intern_login"); 

if(!$conn) {
    echo "Connection failed!";
}

$sql = "SELECT * FROM data";
$query = mysqli_query($conn, $sql);



 
if (isset($_REQUEST["new_post"])) {
    $user_name = $_SESSION['user_name'];
    $title = $_REQUEST["title"];
    $content = $_REQUEST["content"];


    $sql = " INSERT INTO data(user_name,title, content) VALUES ('$user_name', '$title', '$content') ";
    mysqli_query ($conn, $sql);

    header ("Location: ./homeBlog.php?info=added"); 
    exit;
}

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];

    $sql = "SELECT * FROM data WHERE id = $id";
    $query = mysqli_query($conn, $sql);
};  

// todo if the title or content are the same it should be wrong 
if (isset($_REQUEST['update'])) {
    $id = $_REQUEST['id'];
    $user_name = $_SESSION['user_name'];
    $title = $_REQUEST["title"];
    $content = $_REQUEST["content"];


        $sql = "UPDATE data SET user_name = '$user_name', title = '$title', content = '$content' WHERE id = $id ";
        $query = mysqli_query($conn, $sql);

        header ("Location: ./homeBlog.php?info=updated"); 
        exit;
}

if (isset($_REQUEST['delete'])) {
    $id = $_REQUEST['id'];

    $sql = "DELETE FROM data WHERE id = $id";
    $query = mysqli_query($conn, $sql);

    header ("Location: ./homeBlog.php?info=deleted"); 
    exit;
}

