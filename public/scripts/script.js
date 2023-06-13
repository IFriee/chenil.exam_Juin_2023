$(document).ready(function() {
    // Les différents boutons qui font une requête XHR ont tous la classe "xhr" ainsi qu'une classe correspondant à l'action (edit/create/show/delete)
    $('body').on('click', 'button.xhr', function () {
        let id = $(this).attr('_id');
        if ($(this).hasClass('edit')) {
            return edit(id);
        } else if ($(this).hasClass('create')) {
            return create();
        } else if ($(this).hasClass('show')) {
            return show(id);
        } else if ($(this).hasClass('delete')) {
            return destroy(id);
        }
    });

    function show(id) {
        $.get("/animaux/" + id).done(function(result) {
            $('.content').html(result);
        }).fail(function(err) {
            console.warn('error in show', err);
        });
    }

    function edit(id) {
        $.get("/animaux/" + id + "/edit").done(function(result) {
            $('.content').html(result);
        }).fail(function(err) {
            console.warn('error in edit', err);
        });
    }

    function create() {
        $.get("/animaux/create").done(function(result) {
            $('.content').html(result);
        }).fail(function(err) {
            console.warn('error in create', err);
        });
    }

    function destroy(id) {
        $.post("/animaux/" + id + "/destroy").done(function(result) {
            $('.content').html(result);
        }).fail(function(err) {
            console.warn('error in destroy', err);
        });
    }
});
