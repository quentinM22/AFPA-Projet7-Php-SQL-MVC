console.log('le script de la barre de recherche est bien chargé');
$(document).ready(function(){
    $("#searchInput").on("keyup", function() {
       var value = $(this).val().toLowerCase();
       $("#travauxList .col-12").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
       });
    });
 });