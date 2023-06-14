$(document).ready(function() {
    //les différents boutons qui font une requete XHR ont tous la classe "xhr" ainsi qu'une classe correspondant à l'action (edit/create/show/destroy);
   $('body').on('click', 'button.xhr', function () {
       let id = $(this).attr('_id');
       if ($(this).hasClass('edit')) {
           return edit(id);
       } else if ($(this).hasClass('create')) {
           return create(); 
       }
       return destroy(id); 
   }); 
    
    
    function edit (id) {
       $.get("/animaux/"+id+"/edit").done(function(result) {
            $('.content').html(result);
       })
       .fail(function(err) {
           console.warn('error in edit', err);
       });
    }
    
    function create () {
        $.get("/animaux/create").done(function(result) {
            $('.content').html(result);
        })
        .fail(function(err) {
           console.warn('error in create', err);
        });
    }
    
    function destroy (id) {
        $.post("/animaux/"+id+"/destroy").done(function(result) {
                $('.content').html(result);
       })
       .fail(function(err) {
           console.warn('error in destroy', err);
       });
    }



    
    
});

