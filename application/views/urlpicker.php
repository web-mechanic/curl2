<div id="welcomeMessage">
    	<p>Bienvenue <?php echo $this->session->userdata('email'); ?> !</p> <p id='logOut'><a href="<?php echo site_url(); ?>member/deconnexion">Se déconnecter</a></p>
</div>


<a href="<?php echo site_url("urlfinder/lister");?>"><h1> URL PICKER </h1></a>




<h2 class=stitre>Entrez une url ci-dessous &nbsp;!</h2>
<?php	
$attributes = array('class' => 'form-wrapper');
 echo form_open('urlfinder/analyser',$attributes); ?>
    <label for="url"></label>
    <input type="text" id="search" name="url" />
    <input type="submit" id="submit" value="vérifier" />
</form> 