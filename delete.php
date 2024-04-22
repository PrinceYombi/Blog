<?php
require_once('lib/functions.php');

$articleId = $_POST['id'];

deleteArticle($articleId);

header('Location: /');



