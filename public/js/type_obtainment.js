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
        var name = button.data('name')
        var modal = $(this)
        modal.find('.modal-body #id_type_obtainment').val(id);
        modal.find('.modal-body #description_e').val(description);
        modal.find('.modal-body #name_e').val(name);

    });

    $("#Guardar").click(function() {
        let des = $('#description').val();
        let name = $('#name').val();
        if (name.length == 0) {
            $('#name').focus();
            $.toast({
                text: 'Campo Nombre es Obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (des.length == 0) {
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
        let id = $('#id_type_obtainment').val();
        let des = $('#description_e').val();
        let name = $('#name_e').val();
        if (id <= 0) {

            $.toast({
                text: 'Debe seleccionar un registro de la tabla',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (name.length == 0) {
            $('#name').focus();
            $.toast({
                text: 'Campo Nombre es Obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (des.length == 0) {
            $('#descripcion').focus();
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