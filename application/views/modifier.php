<div class="container">

<?php echo form_open('urlfinder/modif'); ?>

    <h2>Que desirez-vous modifier&nbsp;?</h2>
    <label class="modif" for="title">titre</label>
    <input type="text" name="titre" value="<?php echo $titre ?>"/>
    <label class="modif" for="description">Description</label>
    <input type="text" name="description" value="<?php echo $description ?>"/>
     <label for="lien">lien</label>
    <input type="text" name="lien" value="<?php echo $lien ?>"/>
     <label for="img">src</label>
    <input type="text" name="img" value="<?php echo $img ?>"/><br/>


    
    <input type="hidden" value="<?php echo $id ?>" name="id" />
    

    <input type="submit" value="Modifier" />
</form> 

</div>