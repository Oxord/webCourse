<?php
    $postId = $_GET['id'];
    $current_post = [];
    const HOST = 'localhost';
    const USERNAME = 'root';
    const PASSWORD = '';
    const DATABASE = 'blog';
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

    function getPostById(mysqli $conn, &$post, $id): void {
        if ($id == null)
        {
            exit(include 'error_page.html');
        }
        $sql = "SELECT * FROM post WHERE post_id = $id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $post = 
                [
                    'id' => $row['post_id'], 
                    'title' => $row['title'],
                    'subtitle' => $row['subtitle'],
                    'content' => $row['content'],
                    'img_author' => $row['author_url'],
                    'author' => $row['author'],
                    'date' => $row['publish_date'],
                    'image_url' => $row['image_url']
                ];
        } else {
            exit(include 'error_page.html');
        }
    };
    $conn = createDBConnection();
    getPostById($conn, $current_post, $postId);
    closeDBConnection($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $current_post['id']?></title>
    <link rel="stylesheet" href="static/styles/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lora&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap');
    </style>
</head>

<body class="container">
    <header class="site-logo__top-menu_ahead">
        <div class="site-logo__top-menu top-menu">
            <div class="top-menu__menu menu">
                <span class="menu__title title paragraph-ahead">Escape.</span> 
                <nav class="menu__navigation navigation">
                    <a href="#" class="navigation__item item-ahead">HOME</a>
                    <a href="#" class="navigation__item item-ahead">CATEGORIES</a>
                    <a href="#" class="navigation__item item-ahead">ABOUT</a>
                    <a href="#" class="navigation__item item-ahead">CONTACT</a>
                </nav>                     
            </div>
        </div>
        <div class="site-logo__maintext maintext-ahead">
            <h1 class="maintext__title title-ahead"><?= $current_post['title']?></h1>
            <p class="maintext__paragraph paragraph-ahead"><?= $current_post['subtitle']?></p> 
        </div>
    </header>
    <main class="main_content">
        <img src="<?= $current_post['image_url']?>" class="main_content__image post__img">
        <div class="maint_content__content content">
            <p class="content__text">
                <?= $current_post['content']?>
            </p>
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
                        <a href="#" class="navigation__item">HOME</a>
                        <a href="#" class="navigation__item">CATEGORIES</a>
                        <a href="#" class="navigation__item">ABOUT</a>
                        <a href="#" class="navigation__item">CONTACT</a>
                    </nav>                     
                </div>
            </footer>   
    </div> 
</body>

</html>