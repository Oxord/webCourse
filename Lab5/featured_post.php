<div class="posts__post <?= $featured_post['img_modifer'] ?>">
    <h1 class="post__title"><?= $featured_post['title'] ?></h1>
    <p class="post__paragraph"><?= $featured_post['subtitle']?></p>
    <div class="post__author_post author_post">
        <div class="author_post__icon icon">
            <img src=<?= $featured_post['img_author']?> alt="" >
        </div>
        <div class="author_post__author author">
            <span><?= $featured_post['author']?></span>
        </div>
        <div class="author_post__date">
            <span><?= $featured_post['date']?></span>
        </div>
    </div>    
</div>