<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix</title>
    <style>
        body {
            background-color: #ddd;
        }

        nav,
        section {
            display: block;
            float: left;
            min-height: 100vh;
            box-sizing: border-box;
        }

        nav a {
            display: block;
            padding: 10px;
            border-bottom: 1px solid #eee;
        }

        nav {
            border-right: 1px solid #ddd;
            width: 20%;
            background-color: #fff;
        }

        section {
            width: calc(80% - 10px);
            background-color: #eee;
            padding: 15px;
        }

        section h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <main>
        <header style="background-color:#ddd; display:block;">
            <h1 style="text-align: center">Netflix Movies</h1>
        </header>
        <nav>
            <a href="./?page=home.php">HOME</a>
            <a href="./?page=about.php">ABOUT</a>
            <a href="./?page=movies.php">MOVIES</a>
        </nav>
        <section>
            <pre>
            <?php
            $allowedPages = array('about.php', 'home.php', 'index.php', 'movies.php', 'process_file_upload.php');
            $filename = $_GET['page'];
            
            if (in_array($filename, $allowedPages) && file_exists($filename)) {
                include($filename);
                if (!empty($_GET['page'])) {
                    include_once $_GET['page'];
                } else { ?>
                    <h1>You are in INDEX page</h1>
                <?php
                } // end of else..
                ?>
           <?php } else {
                echo "<script>alert('you're not authorize to enter this page.')</script>";
            }
            ?>
        </pre>
        </section>
    </main>
</body>

</html>