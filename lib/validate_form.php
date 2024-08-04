<?php
if (!($article['title'])) {
        
        $isValid = false;
        $errors['title'] = "Le titre de votre article est réquis";
    }
if (!($article['description'])) {
        
        $isValid = false;
        $errors['description'] = "La description est requis.";
    }
if (!$_FILES['file']['name']) {
        
        $isValid = false;
        $errors['image'] = "Veuillez choisir une image";
    }
