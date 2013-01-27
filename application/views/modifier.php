<?php echo form_open('urlfinder/modif'); ?>
    <h1>Ce sont bien les informations que vous souhaiter ajouter&nbsp;?</h1>
    <label for="title">titre</label>
    <input type="text" name="titre" value="<?php echo $titre ?>"/><br/>
    <label for="lien">lien</label>
    <input type="text" name="lien" value="<?php echo $lien ?>"/><br/>
    <label for="description">Description</label>
    <input type="text" name="description" value="<?php echo $description ?>"/><br/>
    <label for="img">src</label>
    <input type="text" name="img" value="<?php echo $img ?>"/><br/>
    
    <input type="hidden" value="<?php echo $id ?>" name="id" />
    

    <input type="submit" value="Modifier" />
</form> 