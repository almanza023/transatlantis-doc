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
        var name = button.data('name')
        var description = button.data('description')
        var modal = $(this)

        modal.find('.modal-body #id_dependence').val(id);
        modal.find('.modal-body #name_e').val(name);
        modal.find('.modal-body #description_e').val(description);

    });

    $("#Guardar").click(function() {
        let name = $('#name').val();
        let des = $('#description').val();
        if (name.length == 0) {
            $('#name').focus();
            $.toast({
                text: 'Campo Nombre es Obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (des.length == 0) {
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
        let name = $('#name_e').val();
        let des = $('#description_e').val();
        if (name.length == 0) {
            $('#name').focus();
            $.toast({
                text: 'Campo Nombre es Obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (des.length == 0) {
            $('#description').focus();
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