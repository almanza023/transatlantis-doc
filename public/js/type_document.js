$(function() {

    //Tooltip
    $('[data-toggle="tooltip"]').tooltip({
        container: 'body'
    });

    //Popover
    $('[data-toggle="popover"]').popover();


    $('#modalEditTypeDocument').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var description = button.data('description')
        var modal = $(this)
        modal.find('.modal-body #id_type_document').val(id);
        modal.find('.modal-body #description_e').val(description);

    });

    $("#Guardar").click(function() {
        let des = $('#description').val();
        if (des.length == 0) {
            $('#descripcion').focus();
            $.toast({
                text: 'Campo Descripción es Obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else {
            $("#form_create").submit();
        }
    });

    $("#Actualizar").click(function() {
        let des = $('#description_e').val();
        if (des.length == 0) {
            $('#description_e').focus();
            $.toast({
                text: 'Campo Descripción es Obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else {
            $("#form_edit").submit();
        }
    });






});