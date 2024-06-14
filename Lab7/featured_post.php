<div class="posts__post"> 
    <!-- <img src="<?= $featured_post['img_modifer'] ?>" alt="featured" class="post_img_featured"> -->
    <a href='/post.php?id=<?= $featured_post['id'] ?>'><h1 class="post__title"><?= $featured_post['title']?></h1></a>
    <p class="post__paragraph"><?= $featured_post['subtitle']?></p>
    <div class="post__author_post author_post">
        <div class="author_post__icon icon">
            <img src=<?= $featured_post['img_author']?> alt="" >
        </div>
        <div class="author_post__author author">
            <?= $featured_post['author']?>
        </div>
        <div class="author_post__date">
            <?= $featured_post['date']?>
        </div>
    </div>     
</div>