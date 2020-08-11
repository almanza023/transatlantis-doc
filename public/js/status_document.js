$(function() {

    //Tooltip
    $('[data-toggle="tooltip"]').tooltip({
        container: 'body'
    });

    //Popover
    $('[data-toggle="popover"]').popover();


    $('#modalEdit').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var description = button.data('description')
        var modal = $(this)

        modal.find('.modal-body #id_status_document').val(id);
        modal.find('.modal-body #description_e').val(description);

    });

    $("#Guardar").click(function() {
        let des = $('#description').val();
        if (des.length == 0) {
            $('#description').focus();
            $.toast({
                text: 'Campo Descripción  es Obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else {
            $("#form_create").submit();
        }
    });

    $("#Actualizar").click(function() {
        let id = $('#id_status_document').val();
        let des = $('#description_e').val();
        if (id < 0) {
            $.toast({
                text: 'Debe seleccionar un registro de la tabla',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (des.length == 0) {
            $('#description_e').focus();
            $.toast({
                text: 'Campo Descripción  es Obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else {
            $("#form_edit").submit();
        }
    });






});