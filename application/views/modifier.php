<div id="container">

<?php echo form_open('urlfinder/modif'); ?>

    <h2>Que désirez-vous modifier&nbsp;?</h2>
    <label class="modif" for="title">titre
    <input type="text" name="titre" value="<?php echo $titre ?>"/></label>
    <label class="modif" for="description">Description
    <input type="text" name="description" value="<?php echo $description ?>"/></label>
    <label class="modif" for="img">src
    <input type="text" name="img" value="<?php echo $img ?>"/></label>
    
    <input type="hidden" value="<?php echo $id ?>" name="id" />
    

    <input type="submit" value="Modifier" />
</form> 

</div>