<form action="" method="post" enctype="multipart/form-data" class="form">
        <div class="form-line">
            <div class="form-label">Titre</div>
            <input type="text" name="title" placeholder="Entrez le titre de votre article" value="<?php echo $article["title"]?>">
        </div>
        <div class="errors">
            <?php echo ($errors['title']) ? $errors["title"] : ""?>
        </div>
        <div class="form-line">
            <div class="form-label">Description</div>
            <textarea name="description" id="" cols="30" rows="10"><?php echo $article["description"]?></textarea>
        </div>
        <div class="errors">
           <?php echo ($errors['description']) ? $errors['description'] : ""?> 
        </div>
        <div class="form-line">
            <div class="form-label">Image</div>
            <input type="file" name="file">
        </div>
        <div class="errors">
           <?php echo ($errors['image']) ? $errors['image'] : ""?> 
        </div>
        <button type="btn" class="btn-submit">Soumettre</button>
</form>