<div class="container">
<h1>URL Picker</h1>
<h2 class="signinTitle">Inscris toi&nbsp;!</h2>
<div class="signinForm">
	<?php if(isset($error)):?>
	<div class="error"><?php echo $error; ?>
	<?php endif;?>

	<?= form_open_multipart('member/signin', 
	array( 
			'method'=> 'post',		
	)); 
	echo form_label('Pseudo', 'pseudo');
	$data = array(
              'name'=> 'pseudo',
              'id'=> 'pseudo',
              'maxlength'=> '30',
              'size'=> '30',
              'placeholder'=>'JohnDoe04'
            );
	echo form_input($data);


	echo form_label('Adresse mail', 'email');
	$data = array(
              'name'=> 'email',
              'id'=> 'email',
              'maxlength'=> '100',
              'size'=> '30',
              'placeholder'=>'JohnDoe@gmail.com'
            );
	echo form_input($data);

	echo form_label('Mot de passe', 'mdp');
	$data = array(
              'name'=> 'mdp',
              'id'=> 'mdp',
              'maxlength'=> '15',
              'size'=> '30',
              'placeholder'=>'Enter your password'
            );
	echo form_password($data);


	$data = array(
	              'name'=> 'upload',
	              'value'=> 'S\'inscrire',
	              'class'=> 'submitButton'
	              );
	echo form_submit($data); 
	form_close(); ?>
</div>
</div>