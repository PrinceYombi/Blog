<?php

if (isset($_FILES['file']) && $_FILES['file']['name']) {
        
    $name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $array = explode('.', $name);
    $extension = $array[1];

    $src = "lib/article_images/".$article['id'].".".$extension;

    if ($_FILES['file']['error'] ==0) {
        
        copy($tmp_name, $src);

        $article['extension'] = $extension;

        updateArticle($article, $articleId);
    }
}