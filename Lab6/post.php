<?php
// $posts = [
//     [
//         'title' => 'Still Standing Tall',
//         'subtitle' => 'Life begins at the end of your comfort zone',
//         'img_author' => 'static/images/Wong.png',
//         'img_background' => 'static/images/Still_Standing_Tall.jpg',
//         'author' => 'William Wong',
//         'date' => '9/25/2015'
//     ],
//     [
//         'title' => 'Sunny Side Up',
//         'subtitle' => 'No place is ever as bad as they tell you it is going to be.',
//         'img_author' => 'static/images/Mat_Vogels.png',
//         'img_background' => 'static/images/Sunny_Side_Up.png',
//         'author' => 'Mat Vogels',
//         'date' => '9/25/2015'
//     ],
//     [
//         'title' => 'Water Falls',
//         'subtitle' => 'We travel not to escape life, but for life not to escape us.',
//         'img_author' => 'static/images/Mat_Vogels.png',
//         'img_background' => 'static/images/Water_Falls.png',
//         'author' => 'Mat Vogels',
//         'date' => '9/25/2015'
//     ],
//     [
//         'title' => 'Through the Mist',
//         'subtitle' => 'Travel makes you see what a tiny place you occupy in the world.',
//         'img_author' => 'static/images/Wong.png',
//         'img_background' => 'static/images/Through_the_Mist.png',
//         'author' => 'William Wong',
//         'date' => '9/25/2015'
//     ],
//     [
//         'title' => 'Awaken Early',
//         'subtitle' => 'Not all those who wander are lost.',
//         'img_author' => 'static/images/Mat_Vogels.png',
//         'img_background' => 'static/images/Awaken_Early.png',
//         'author' => 'Mat Vogels',
//         'date' => '9/25/2015'
//     ],
//     [
//         'title' => 'Try it Always',
//         'subtitle' => 'The world is a book, and those who do not travel read only one page.',
//         'img_author' => 'static/images/Mat_Vogels.png',
//         'img_background' => 'static/images/Try_it_always.png',
//         'author' => 'Mat Vogels',
//         'date' => '9/25/2015'
//     ],
//     ];
$post=[
    [
        'id' => 1,
        'title' => 'The Road Ahead',
        'subtitle' => 'The road ahead might be paved - it might not be',
        'img' => 'static/images/The_road_ahead.png',
        'text' => 'Зинаида Николаевна Некрасова (урождённая Фёкла Анисимовна Викторова, вторая половина сентября (?) 1846 (?), Вышний Волочёк (?), Российская империя — 25 января 1915, Саратов) — супруга и сотрудница российского поэта, публициста и общественного деятеля Николая Алексеевича Некрасова. О её детстве и юности практически ничего не известно. Существуют различные версии даты её рождения, происхождения и обстоятельств знакомства с поэтом. Девушка познакомилась с поэтом в 1870 году и сразу стала близким для него человеком. Некрасов много сделал, чтобы дать ей достойное образование, ввёл её в круг своих близких друзей и родственников. Зинаида Николаевна выполняла некоторые поручения поэта при корректировке и публикации его произведений. Зинаиде Некрасовой поэт посвятил поэму «Дедушка», а также минимум три стихотворения в книге «Последние песни», права на публикацию которой были переданы автором супруге. Она участвовала в издании и распространении дешёвых изданий стихотворений супруга.

        После смерти мужа Зинаида Некрасова не поддерживала отношений не только с негативно относившимися к ней родственниками Николая Некрасова, но и с его друзьями. Многие из последних были убеждены, что супруга поэта уже мертва. Зинаида Некрасова некоторое время проживала в Санкт-Петербурге на различных съёмных квартирах, совершала поездки по югу страны, а затем поселилась в Саратове. Там она потеряла остатки своих денежных средств из-за обмана со стороны общины местных баптистов. Последние годы Зинаида Николаевна жила на выделяемые ей ежемесячно средства Литературного фонда и страдала от ревматизма.',
    ],
    [
        'id' => 2,
        'title' => 'From Top Down',
        'subtitle' => 'Once a year, go someplace you’ve never been before.',
        'img' => 'static/images/From_Top_Down.png',
        'text' => 'Tessaratomidae (лат.) — семейство клопов-щитников из отряда полужесткокрылых. Тропическая группа, которая насчитывает около 240 видов, разделённых на три подсемейства и 56 родов. Клопы этого семейства, как правило, крупные, более 15 мм в длину (некоторые виды — около 4 см). Внешне схожи с представителями семейства Pentatomidae (настоящие щитники), ярко окрашены. Большинство видов Tessaratomidae — обитатели тропических регионов Африки, Азии и Океании, и лишь несколько видов обнаружены в Неотропике и Австралии. Некоторые виды семейства характеризуются материнской заботой о яйцах и молоди, самки которых охраняют кладку или переносят молодых нимф с собой. Защитные выделения некоторых видов могут вызвать серьёзные повреждения при контакте с кожей человека и временное ослепление при попадании в глаза.

        Все виды растительноядные, некоторые из них имеют большое экономическое значение как вредители сельского хозяйства. Повреждают цитрусовые, кокосовую пальму, китайскую сливу личи и другие виды. Несколько видов этого семейства после обработки и удаления едкой жидкости используются в пищу в некоторых странах Южной Африки, Южной и Юго-Восточной Азии.',
    ],
];
$postId =  $_GET['id'];
$current_post = $post[$postId- 1];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Road Ahead</title>
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
        <img src=<?= $current_post['img']?> alt="" >
        <div class="maint_content__content content">
            <p class="content__text">
                <?= $current_post['text']?>
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