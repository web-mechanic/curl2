$(function(){function t(t){t.preventDefault();var n=e.filter(":visible").next(".choice");if(n.size()==0)n=e.first();e.filter(":visible").fadeOut("fast",function(){n.fadeIn("fast")});n.children(".selectionner").attr("checked","checked")}function n(t){t.preventDefault();var n=e.filter(":visible").prev(".choice");if(n.size()==0)n=e.last();e.filter(":visible").fadeOut("fast",function(){n.fadeIn("fast")});n.children(".selectionner").attr("checked","checked")}var e=$(".choice");e.first().children(".selectionner").attr("checked","checked");e.not(":first").hide();$(".selectionner").hide();$("#next").on("click",t);$("#previous").on("click",n)})

$(".delete").click(function() {
  confirm("Vous allez supprimer ce lien... C'est vraiment ce que vous voulez?");
  });