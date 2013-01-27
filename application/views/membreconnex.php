<div id="containerConnex">
	<h2>Connectez-vous &nbsp;!</h2>
	<div class="form-wrapper">
	<?php
	$attributes = array('class' => 'form-wrapper');
		echo form_open('member/login', array('method' => 'post'));
		
		echo form_label('adresse email', 'email');
		$emailInput = array(
			'name' => 'email',
			'id' => 'email'
		);
		
		echo form_input($emailInput);
		
		echo form_label('Mot de passe', 'mdp');
		$passwordInput = array(
			'name' => 'mdp',
			'id' => 'mdp'
		);
		
		echo form_password($passwordInput);
		
		echo '<br>';
		
		echo form_submit('check', 'vérifier');
		echo form_close();
	?>
	
	</div>
</div>