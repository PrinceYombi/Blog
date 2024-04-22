<?php
require_once('lib/header.php');
require_once('lib/functions.php');

$articleId = $_GET['id'];
$article = getArticleById($articleId);

$errors = [
    "title"=>"",
    "description"=>""
];

$isValid = true;

if ($_SERVER['REQUEST_METHOD']==="POST") {

    $article = updateArticle($_POST, $articleId);//METTRE A JOUR UN ARTICLE

    require_once('lib/validate_form.php');//TRAITEMENT DU FORMULAIRE

    if ($isValid) {
        
        header("Location: index.php");//REDIRECTION
        
    }

    require_once('lib/_image.php');//INSERTION D'IMAGE
}

?>


<div class="container">
    <div class="article-title">
        <h1>Modifier l'article</h1>
    </div>

    <?php require_once('lib/_form.php') ?>

</div>


