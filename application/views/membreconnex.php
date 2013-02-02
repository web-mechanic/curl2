<div class="containerConnex">
	<h1>Url Picker</h1>
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
		
		echo form_submit('check', 'Connexion');
		echo form_close();
	?>
	<?php

		echo anchor('member/registration',
				'Ou inscris-toi...',
				array(
					'title'=>'Inscris-toi',
					'class'=>"signin")
				)
	?>	
	</div>

	