
$(function(){

    // Définitions globales
    var $images = $(".choice");

    //Attr checked sur la première img
 	 $images.first().children(".selectionner").attr("checked","checked");

    //Cache tout sauf la première img
    $images.not(':first').hide();

    //cache les boutons radio
    $(".selectionner").hide();

    //Au clique sur button next, lance function switchNext
    $("#next").on("click", switchNext);

    //Au clique sur button previous, lance function switchPrevious
    $("#previous").on("click", switchPrevious);

    //Img suivante
    function switchNext(e)
    {
        e.preventDefault();
        var $nextImage = $images.filter(':visible').next(".choice");

        if( $nextImage.size() == 0 )
            $nextImage = $images.first();
        $images.filter(':visible').fadeOut('fast', function(){
            $nextImage.fadeIn('fast');
        });

        //ajoute attribut checked avec valeur checked au bouton radio
        $nextImage.children(".selectionner").attr("checked", "checked");
    }

    //Img précédente
    function switchPrevious(e){
            e.preventDefault();
            var $nextImage = $images.filter(':visible').prev(".choice");

            if( $nextImage.size() == 0 )
                $nextImage = $images.last();
            $images.filter(':visible').fadeOut('fast', function(){
                $nextImage.fadeIn('fast');
            });

            //ajoute attribut checked avec valeur checked au bouton radio
 $nextImage.children(".selectionner").attr("checked", "checked");
    }
}); 