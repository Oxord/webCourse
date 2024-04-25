<div class="main_context__recent recent">
    <img src = <?= $post['img_background']?> alt="">
    <div class="recent__description description">
        <a href='/post.php?id=<?= $post['id'] ?>'><p class="description__title"><?= $post['title'] ?></p></a>
        <p class="description__usual_text"><?= $post['subtitle'] ?></p>
    </div>
    <div class="recent__line"></div>
    <div class="recent__author_recent author_recent">
        <div class="author_recent__img">
            <img src=<?= $post['img_author']?> alt="" >
        </div>
        <div class="author_recent__author">
            <?= $post['author'] ?>
        </div> 
        <div class="author_recent__date_recent">
            <?= $post['date'] ?>
        </div>
    </div>
</div>