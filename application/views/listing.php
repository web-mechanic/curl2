<div class="container">

	<a href="<?php echo site_url();?>"><h1> URL PICKER </h1></a>
	
    <?php echo form_open('urlfinder/ajouter'); ?>

 <h2>Choisissez les informations</h2>
	<label for="titre">Titre :</label>
	<input name="titre" type="text" value="<?php echo $title; ?>"><br/>
    
	<input type="hidden" name="lien" value="<?php echo $lien; ?>"/>
	<p class="lien"><?php echo $lien; ?></p><br/>
	
	<label for="description">Description :</label>
	<input type="hidden" name="description" value="<?php echo $description; ?>"/>
	<p><?php echo $description; ?></p>
	
	<p class="imgChoice">Choisissez une image :</p>
	<button id="previous">Précédent</button>
	<ul >
	    <?php foreach($srcImg as $src): ?>
		<li class="choice">
		    <label for="img"><?php  echo('<img height="75px" width="75px" src="' . $src . '" />'); ?></label>
		    <input class="selectionner" type="radio" name="img" value="<?php  echo $src ?>"/>
		</li>    
	    <?php endforeach; ?>

	    <button id="next">Suivant</button></br>
	    <input class="okChoice" type="submit" value="J'ai choisi !" name="choix"/>
	</ul>

</div>
