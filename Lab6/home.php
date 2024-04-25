<?php
$posts = [
    [
        'id' => 1,
        'title' => 'Still Standing Tall',
        'subtitle' => 'Life begins at the end of your comfort zone',
        'img_author' => 'static/images/Wong.png',
        'img_background' => 'static/images/Still_Standing_Tall.jpg',
        'author' => 'William Wong',
        'date' => '9/25/2015'
    ],
    [
        'id' => 2,
        'title' => 'Sunny Side Up',
        'subtitle' => 'No place is ever as bad as they tell you it is going to be.',
        'img_author' => 'static/images/Mat_Vogels.png',
        'img_background' => 'static/images/Sunny_Side_Up.png',
        'author' => 'Mat Vogels',
        'date' => '9/25/2015'
    ],
    [
        'id' => 1,
        'title' => 'Water Falls',
        'subtitle' => 'We travel not to escape life, but for life not to escape us.',
        'img_author' => 'static/images/Mat_Vogels.png',
        'img_background' => 'static/images/Water_Falls.png',
        'author' => 'Mat Vogels',
        'date' => '9/25/2015'
    ],
    [
        'id' => 1,
        'title' => 'Through the Mist',
        'subtitle' => 'Travel makes you see what a tiny place you occupy in the world.',
        'img_author' => 'static/images/Wong.png',
        'img_background' => 'static/images/Through_the_Mist.png',
        'author' => 'William Wong',
        'date' => '9/25/2015'
    ],
    [
        'id' => 1,
        'title' => 'Awaken Early',
        'subtitle' => 'Not all those who wander are lost.',
        'img_author' => 'static/images/Mat_Vogels.png',
        'img_background' => 'static/images/Awaken_Early.png',
        'author' => 'Mat Vogels',
        'date' => '9/25/2015'
    ],
    [
        'id' => 1,
        'title' => 'Try it Always',
        'subtitle' => 'The world is a book, and those who do not travel read only one page.',
        'img_author' => 'static/images/Mat_Vogels.png',
        'img_background' => 'static/images/Try_it_always.png',
        'author' => 'Mat Vogels',
        'date' => '9/25/2015'
    ],
    ];
$featured_posts=[
    [
        'id' => 1,
        'title' => 'The Road Ahead',
        'subtitle' => 'The road ahead might be paved - it might not be',
        'img_author' => 'static/images/Mat_Vogels.png',
        'author' => 'Mat Vogels',
        'date' => 'September 25, 2015',
        'img_modifer' => 'post__road_ahead'
    ],
    [
        'id' => 2,
        'title' => 'From Top Down',
        'subtitle' => 'Once a year, go someplace you’ve never been before.',
        'img_author' => 'static/images/Wong.png',
        'author' => 'William Wong',
        'date' => 'September 25, 2015',
        'img_modifer' => 'post__from_top_down'
    ],
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Escape</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lora&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Inter&family=Poppins:ital@1&family=Righteous&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap');
    </style>
</head>
<body class="container">
    <header class="container__site-logo site-logo">
        <div class="site-logo__top-menu top-menu">
            <div class="top-menu__menu menu">
                <span class="menu__title title">Escape.</span> 
                <nav class="menu__navigation navigation">
                    <a href='/post.php?id=<?= $post['id'] ?>' class="navigation__item">HOME</a>
                    <a href='/post.php?id=<?= $post['id'] ?>' class="navigation__item">CATEGORIES</a>
                    <a href='/post.php?id=<?= $post['id'] ?>' class="navigation__item">ABOUT</a>
                    <a href='/post.php?id=<?= $post['id'] ?>' class="navigation__item">CONTACT</a>
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
                <a href="" class="list__link">Nature</a>
                <a href="" class="list__link">Photography</a>
                <a href="" class="list__link">Relaxation</a>
                <a href="" class="list__link">Vacation</a>
                <a href="" class="list__link">Travel</a>
                <a href="" class="list__link">Adventure</a>
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
                        <a href="#" class="navigation__item">HOME</a>
                        <a href="#" class="navigation__item">CATEGORIES</a>
                        <a href="#" class="navigation__item">ABOUT</a>
                        <a href="#" class="navigation__item">CONTACT</a>
                    </nav>                     
                </div>
            </footer>   
    </div> 
</html>
   