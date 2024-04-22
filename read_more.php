<?php
require_once('lib/header.php');
require_once('lib/functions.php');

/**
 * UN ARTICLE
 */
$articleId = $_GET['id'];
$article = getArticleById($articleId);

?>

<div class="container">
    <div class="read-item">
        <div class="read-img">
            <?php if($article['extension']):?>
                <img src="<?php echo "lib/article_images/${article['id']}.${article['extension']}" ?>" alt="">
            <?php endif ?>
        </div>
        <div class="read-content">
            <div class="article-item-title">
                <h4><?php echo $article['title'] ?></h4>
            </div>
            <textarea name="" id="" cols="30" rows="10"><?php echo $article['description'] ?></textarea>
            <div class="article-btn">
                <form action="delete.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $article['id'] ?>">
                    <button class="btn-delete">Supprimer</button>
                </form>
                <a href="update.php?id=<?php echo $article['id'] ?>"><button class="btn-update">Modifier</button></a>
            </div>
        </div>
    </div>
</div>

<?php require_once('lib/footer.php') ?>


