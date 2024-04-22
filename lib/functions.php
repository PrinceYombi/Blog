<?php

/**
 * RECUPERATIONS DE ARTICLES
 */
function getArticles(){

    $json = file_get_contents("data_base/article_data.json");
    $articles = json_decode($json, true);

    return $articles;
}


/**
 * RECUPERATION D'UN ARTICLE PAR SON ID
 */
function getArticleById($id){

    $articles = getArticles();

    foreach ($articles as $article) {
        
        if ($article["id"] == $id) {
            
            return $article;
        }
    }
}

/**
 * SUPPRESSION D'UN ARTICLE DE LA LISTE
 */
function deleteArticle($id){

    $articles = getArticles();

    foreach ($articles as $key => $article) {
        
        if ($article["id"] == $id) {
            
            array_splice($articles, $key, 1);
        }
    }

    file_put_contents("data_base/article_data.json", json_encode($articles, JSON_PRETTY_PRINT));
}

/**
 * MODIFIER UN ARTICLE
 */
function updateArticle($data, $id){
    $updateArticles = [];
    $articles = getArticles();

    foreach ($articles as $key => $article) {
        
        if ($article['id'] == $id) {
            
            $articles[$key] = $updateArticles = array_merge($article, $data);
        }
    }

    file_put_contents("data_base/article_data.json", json_encode($articles, JSON_PRETTY_PRINT));

    return $updateArticles;
}


/**
 * CREER UN ARTICLE
 */
function createArticle($data){
    $articles = getArticles();
    $data['id'] = rand(1,1000);

    $articles[] = $data;

    file_put_contents("data_base/article_data.json", json_encode($articles, JSON_PRETTY_PRINT));

    return $data;
}
