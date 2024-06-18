<?php
    $MenuLinks = [ 'HOME', 'CATEGORIES', 'ABOUT', 'CONTACT'];
    $Links = ['Nature', 'Photography', 'Relaxation', 'Vacation', 'Travel', 'Adventure'];
    $posts = [];
    $featured_posts = [];
    const HOST = 'localhost';
    const USERNAME = 'root';
    const PASSWORD = '';
    const DATABASE = 'blog';
    const put = "../images/FormBackground.png";
    function createDBConnection(): mysqli {
        $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }

    function closeDBConnection(mysqli $conn): void {
    $conn->close();
    }

    function getPostsFromDB(mysqli $conn, &$feature, &$post): void {
    $sql = "SELECT * FROM post";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if ($row['featured'] == 1) {
                $feature[] = 
                [
                    'id' => $row['post_id'], 
                    'title' => $row['title'],
                    'subtitle' => $row['subtitle'],
                    'content' => $row['content'],
                    'img_author' => $row['author_url'],
                    'author' => $row['author'],
                    'date' => $row['publish_date'],
                    'img_modifer' => $row['image_url']
                ];
                
            }else{
                $post[] = 
                [
                    'id' => $row['post_id'],
                    'title' => $row['title'],
                    'subtitle' => $row['subtitle'],
                    'content' => $row['content'],
                    'img_author' => $row['author_url'],
                    'author' => $row['author'],
                    'date' => $row['publish_date'],
                    'img_background' => $row['image_url']
                ];
            }
        }
    } else {
        echo "0 results";
    }
    }

    

    $conn = createDBConnection();
    getPostsFromDB($conn, $featured_posts, $posts);
    closeDBConnection($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <link rel="stylesheet" href="static/styles/style.css">
    <title>Escape</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lora&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Inter&family=Poppins:ital@1&family=Righteous&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap');
        .posts__post{
            background-image: url(<?= $featured_post['img_modifer'] ?>); 
            /*background-image: url("static/images/FormBackground.png"); */
            margin-top: 7px;
            margin-bottom: 7px;
            margin-left: 10px;
            display: block;
            height: 280px;
            width: 460px;
        }
    </style>
</head>
<body class="container">
    <header class="container__site-logo site-logo">
        <div class="site-logo__top-menu top-menu">
            <div class="top-menu__menu menu">
                <span class="menu__title title">Escape.</span> 
                <nav class="menu__navigation navigation">
                    <?php 
                        foreach ($MenuLinks as $MenuLink) {
                        include 'LinkInMenu.php';
                    }
                    ?> 
                </nav>                     
            </div>
        </div>
        <div class="site-logo__maintext maintext">
            <h1 class="maintext__title">Let's do it together</h1>
            <p class="maintext__paragraph">We travel the world in search of stories.Come along for the ride</p>
            <button class="maintext__button">View Latest Posts</button>
        </div>
    </header>
    <main class="main_context">
        <div class="main_context__navigation navigation">
            <nav class="navigation__list list">
                <?php
                    foreach($Links as $link){
                        include 'Link.php';
                    }
                ?>
            </nav>
        </div>
        <div class="main_context__featured_posts featured_posts">
            <h2 class="featured_posts__title_main title_main">Featured Posts</h2>
            <div class="featured_posts__line line"></div>
            <div class="featured_posts__posts posts">  
                <?php 
                    foreach ($featured_posts as $featured_post) {
                    include 'featured_post.php';
                }
                ?> 
            </div>
        </div>    
        <div class="main_context__most_recent most_recent">
            <div class="most_recent__title-and-line title-and-line"> 
                <h2 class="title-and-line__title_main title_main">Most Recent</h2>
                <div class="title-and-line__line line"></div>
            </div>
            <?php 
                foreach ($posts as $post) {
                include 'post_preview.php';
            }
            ?>
        </div>
    </main> 
    <div class="footer_and_form">
        <div class="footer_and_form__form form">
            <div class="form__title_context title_context">
                <span class="title_context__title">Stay in Touch</span>
                <div class="title_context__line"></div>
            </div>
            <div class="form__buttons buttons">
                <input class="buttons__input_email input_email" placeholder=" Enter your email address">
                <button class="buttons__submit submit" onclick="alert()">Submit</button>
            </div>
        </div>   
        <footer class="footer_and_form__footer footer">
                <div class="footer__site-logo__top-menu top-menu">
                <div class="footer__top-menu__menu menu">
                    <span class="menu__title title">Escape.</span> 
                    <nav class="menu__navigation navigation">
                        <?php 
                            foreach ($MenuLinks as $MenuLink) {
                            include 'LinkInMenu.php';
                        }
                        ?>
                    </nav>                     
                </div>
            </footer>   
    </div> 
</html>
   