<?php
if (!($article['title'])) {
        
        $isValid = false;
        $errors['title'] = "Le titre de votre article est réquis";
    }
    if (!($article['description'])) {
        
        $isValid = false;
        $errors['description'] = "La description est requis et de votre titre doit comporter au moins 12 caractères.";
    }
    if (!$_FILES['file']['name']) {
        
        $isValid = false;
        $errors['image'] = "Veuillez choisir une image";
    }