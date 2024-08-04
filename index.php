<?php
require_once('lib/header.php');
require_once('lib/functions.php');

$articles = getArticles();

$errors = [
    "title"=>"",
    "description"=>""
];

$isValid = true;

if ($_SERVER['REQUEST_METHOD']==="POST") {

    $article = createArticle($_POST);

    $articleId = $article['id'];
    
    require_once('lib/validate_form.php');//TRAITEMENT DU FORMULAIRE

    if ($isValid) {
        
        header("Location: index.php");//REDIRECTION
        
    }
    
    require_once('lib/_image.php');//INSERTION D'IMAGE
}


?>

<div class="container">
    <div class="article-title">
        <a href="ajoutArticle"><h1>Ajouter un article</h1></a>
    </div>
    <?php require_once('lib/_form.php') ?>
    <div class="article-title">
        <h1>MES ARTICLES</h1>
    </div>
    <div class="article-items">
        <?php foreach($articles as $article): ?>
            <?php if($article['title'] !== "" && $article['description'] !== ""): ?>

                <div class="article-item">
                    <div class="article-img">
                        <?php if($article['extension']):?>
                            <img src="<?php echo "lib/article_images/${article['id']}.${article['extension']}" ?>" alt="">
                        <?php endif ?>
                    </div>
                    <div class="article-item-title">
                        <h4><?php echo $article['title'] ?></h4>
                    </div>
                    <div class="article-description">
                        <div class="description">
                            <?php echo $article['description']."..." ?>
                        </div>
                        <div class="description-btn">
                            <a href="read_more.php?id=<?php echo $article['id'] ?>"><button class="btn-description">Read More...</button></a>
                        </div>
                    </div>
                </div>
            <?php endif ?>
        <?php endforeach ?>
    </div>
</div>

<?php require_once('lib/footer.php')?>
