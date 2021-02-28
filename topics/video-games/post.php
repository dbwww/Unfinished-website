<?php
    $conn = mysqli_connect('127.0.0.1', 'root', '');
    if(!$conn){}
    if(!mysqli_select_db($conn, 'video-games')){}
    $Name = $_POST['username'];
    $Title = $_POST['title'];
    $URL = $_POST['url'];
    $Post = $_POST['post-body'];
    if($Title == !"" && $Post == !"")
    {
        $sql = "INSERT INTO thread (Name,Title,URL,Post) VALUES ('$Name', '$Title', '$URL','$Post');";
    }
    else
    {
        header("refresh:3; url=/topics/video-games/");
    }
    if(!mysqli_query($conn,$sql)){}
    header("refresh:0; url=/topics/video-games/");
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Posted to /video-games/</title>
</head>
<body style="background: #1a1a1a">
    <h1 style="text-align: center; color: #f2f2f2">Posted to /video-games/</h1>
</body>