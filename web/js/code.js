$(function(){
	//$('a[rel*=external]').attr('target', '_new');
	
	var $images = $(".choice"); 
	
	$images.first().children('.choice').children('label').attr("checked", "checked");
	
	$images.not(':first').hide();
	//$(".selectionner").hide();

	
	$("#next").on("click", switchNext);
	$("#previous").on("click", switchPrevious);


	function switchPrevious(e){
		e.preventDefault();
		var $nextImage = $images.filter(':visible').prev(".choice");
		
		if( $nextImage.size() == 0 )
			$nextImage = $images.last();
		
		$images.filter(':visible').fadeOut('fast', function(){
			$nextImage.fadeIn('fast');
		});
		
		$nextImage.children('.choice').children('.selectionner').attr("checked", true);
		
	}
	
	function switchNext(e)
	{
		e.preventDefault();
		var $nextImage = $images.filter(':visible').next(".choice");
		
		if( $nextImage.size() == 0 )
			$nextImage = $images.first();
		
		$images.filter(':visible').fadeOut('fast', function(){
			$nextImage.fadeIn('fast');
		});
		
		$nextImage.children('.choice').children('.selectionner').attr("checked", true);
	}
	
});


$(".delete").on("click", function(event){
	var lien = $(this).attr("href");
	var lienId = $(this).attr("rel");
	event.preventDefault();
	$.ajax({
		url: lien,
		success : function(){ 
				$('#lien_'+lienId).fadeOut('fast');
		}
	});
	
	return false;
});


/*
$("label[type=submit]").on("click", function(event){
	event.preventDefault();
	alert($("label[name=titre]").val());

	var form_data = {
	titre : $("label[name=titre]").val(),
	description : $("label[name=description]").val(),
	image : 'test'
	};
	
	$.ajax({
			type: "POST",
			url: $(this).parent().attr("action"),
			async : false,
			data: form_data,
			success : function(){ 
					alert("ok");
			}
		});

	
	return false;

});
*/


/*
$("#connexionForm").submit( function() {	// à la soumission du formulaire						 
	$.ajax({ // fonction permettant de faire de l'ajax
	   type: "POST", // methode de transmission des données au fichier php
	   url: "login.php", // url du fichier php
	   data: "login="+$("#login").val()+"&pass="+$("#pass").val(), // données à transmettre
	   success: function(msg){ // si l'appel a bien fonctionné
			if(msg==1) // si la connexion en php a fonctionnée
			{
				$("div#connexion").html("<span id=\"confirmMsg\">Vous &ecirc;tes maintenant connect&eacute;.</span>");
				// on désactive l'affichage du formulaire et on affiche un message de bienvenue à la place
			}
			else // si la connexion en php n'a pas fonctionnée
			{
				$("span#erreur").html("<img src=\"bomb.png\" style=\"float:left;\" />&nbsp;Erreur lors de la connexion, veuillez v&eacute;rifier votre login et votre mot de passe.");
				// on affiche un message d'erreur dans le span prévu à cet effet
			}
	   }
	});
	return false; // permet de rester sur la même page à la soumission du formulaire
});
*/