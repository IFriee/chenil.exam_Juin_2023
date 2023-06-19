$(document).ready(function() {

    // redirection animaux--------------------
    $('button.animal').on('click', function() {
        let id = $(this).attr('_id');
        
        if ($(this).hasClass('edit')) {
            return editAnimal(id);
        } else if ($(this).hasClass('create')) {
            return createAnimal(); 
        } else if ($(this).hasClass('delete')) {
            return destroyAnimal(id);
        }
    });
    
    // redirection propriétaires---------------------
    $('button.proprietaire').on('click', function() {
        let id = $(this).attr('_id');
        
        if ($(this).hasClass('edit')) {
            return editProprietaire(id);
        } else if ($(this).hasClass('create')) {
            return createProprietaire(); 
        } else if ($(this).hasClass('delete')) {
            return destroyProprietaire(id);
        }
    });


     // redirection sejours---------------------
     $('button.sejour').on('click', function() {
        let id = $(this).attr('_id');
        
        if ($(this).hasClass('edit')) {
            return editSejour(id);
        } else if ($(this).hasClass('create')) {
            return createSejour(); 
        } else if ($(this).hasClass('delete')) {
            return destroySejour(id);
        }
    });

    // -------------------animaux
    function editAnimal(id) {
        $.get("/animaux/" + id + "/edit").done(function(result) {
            $('.content').html(result);
        }).fail(function(err) {
            console.warn('error in edit', err);
        });
    }
    
    function createAnimal() {
        $.get("/animaux/create").done(function(result) {
            $('.content').html(result);
        }).fail(function(err) {
            console.warn('error in create', err);
        });
    }
    
    function destroyAnimal(id) {
        $.post("/animaux/" + id + "/destroy").done(function(result) {
            $('.content').html(result);
        }).fail(function(err) {
            console.warn('error in destroy', err);
        });
    }

    // ------------------propriétaires
    function editProprietaire(id) {
        $.get("/proprietaires/" + id + "/edit").done(function(result) {
            $('.content').html(result);
        }).fail(function(err) {
            console.warn('error in edit', err);
        });
    }
    
    function createProprietaire() {
        $.get("/proprietaires/create").done(function(result) {
            $('.content').html(result);
        }).fail(function(err) {
            console.warn('error in create', err);
        });
    }
    
    function destroyProprietaire(id) {
        $.post("/proprietaires/" + id + "/destroy").done(function(result) {
            $('.content').html(result);
        }).fail(function(err) {
            console.warn('error in destroy', err);
        });
    }



    // ------------------sejours
    function editSejour(id) {
        $.get("/sejours/" + id + "/edit").done(function(result) {
            $('.content').html(result);
        }).fail(function(err) {
            console.warn('error in edit', err);
        });
    }
    
    function createSejour() {
        $.get("/sejours/create").done(function(result) {
            $('.content').html(result);
        }).fail(function(err) {
            console.warn('error in create', err);
        });
    }
    
    function destroySejour(id) {
        $.post("/sejours/" + id + "/destroy").done(function(result) {
            $('.content').html(result);
        }).fail(function(err) {
            console.warn('error in destroy', err);
        });
    }
});
