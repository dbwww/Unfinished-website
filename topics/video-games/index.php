<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Video Games</title>
    <meta name="description" content="Video Games">
    <meta name="author" content="video-games">

    <link id="themeStyle" rel="stylesheet" href="/css/dark.css">
    <script src="/js/showPost.js"></script>
</head>
<body>
    <div></div>
    <a id=top></a>
    <div class="header">
        <div class="nav-menu align-left">
            <div class="nav-btns">
                <button><a href="#">Home</a></button>
                <button><a href="#">Topics</a></button>
                <button><a href="#">About</a></button>
            </div>
        </div>
        <div>
            <img id="header-logo" src="" alt="site">
        </div>
    </div>
    <div class="content">
        <div id="show-post-form">
            <button onclick="showPostFrom()" id="create-post-btn"><h2>Create New Post</h2></button>
        </div>
        <div id="center-form-post-div">
            <form id='create-post' action="post.php" method="post">
                <ul style="list-style-type: none;">
                    <li><p>Name:</p><input type="text" class="post-input-field" name="username"></li>
                    <li><p>Title:</p><input type="text" class="post-input-field" name="title"></li>
                    <li><p>URL:</p><input type="url" class="post-input-field" name="url"></li>
                    <li><p>Text:</p><textarea type="text" class="post-input-field" name="post-body" id="post-body"></textarea></li>
                    <li><input type="submit" class="post-input-field" value="Post"></li>
                </ul>
            </form>
        </div>
        <div id="public-posts">
            <?php
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            $conn = mysqli_connect('127.0.0.1', 'root', '', 'video-games');
            if($conn-> connect_error)
            {
                die("Couldn't connect:".$conn-> connect_error);
            }

            $sql = "SELECT * FROM thread ORDER BY ID DESC LIMIT 0, 10;";
            $result = $conn-> query($sql);

            if($result-> num_rows > 0)
            {
                while ($row = $result-> fetch_assoc())
                {
                    echo "<div id='tid" .$row["ID"] ."'><div id='post-name'>" .$row["Name"] ." </div><div style='color: #99ff99'>" .$row["Title"] ."</div><br><span style='color: #66ffff;'>" .$row["URL"] ."</span><p> " .$row["Post"] ." </p></div><hr>";
                }
            }
            else
            {
                echo "<h2 style='text-align: center;'>There are no active posts.</h2>";
            }
            $conn-> close();
            ?>
        </div>
    </div>
    <div class="footer">
            <form action="./" style="float: right; padding-right: 10px;">
                <p><label>Theme:</label>
                <select name="themeSwitcher" id="themeSwitcher">
                    <option value="dark">Dark</option>
                    <option value="light">Modern</option>
                    <option value="proton">Proton</option> 
                    <option value="neutron">Neutron</option>
                </select></p>
            </form>
    </div>
    <script src="/js/cust-opt.js"></script>
</body>
</html>