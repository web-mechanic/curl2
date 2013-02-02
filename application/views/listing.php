<div class="container">
	<h1>Url Picker</h1>
	
    <?php echo form_open('urlfinder/ajouter'); ?>

    <h2>Choisissez les informations pour <?php echo $lien; ?></h2>

	<label class="labelDescr" for="titre">Titre :
	<input name="titre" type="text" value="<?php echo $title; ?>"></label>

	<label class="labelDescr" for="description">Description :
	<input type="text" class="textarea" name="description" value="<?php echo $description; ?>"/></label>
		
	<p class="imgChoice">Choisissez une image :</p>
	<button id="previous">Précédent</button>
	<ul >
	    <?php foreach($srcImg as $src): ?>
		<li class="choice">
		    <label for="img"><?php  echo('<img height="auto" width="300" src="' . $src . '" />'); ?></label>
		    <input class="selectionner" type="radio" name="img" value="<?php  echo $src ?>"/>
		</li>    
	    <?php endforeach; ?>

	    <button id="next">Suivant</button></br>
	    <input class="okChoice" type="submit" value="J'ai choisi !" name="choix"/>
	</ul>
</div>
