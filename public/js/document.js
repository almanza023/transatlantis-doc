$(function() {

    //Tooltip
    $('[data-toggle="tooltip"]').tooltip({
        container: 'body'
    });

    //Popover
    $('[data-toggle="popover"]').popover();


    $('#modalEditDocument').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var name = button.data('name')
        var version = button.data('version')
        var date = button.data('date')
        var tipo = button.data('tipo')
        var modal = $(this)

        modal.find('.modal-body #id_document').val(id);
        modal.find('.modal-body #name_e').val(name);
        modal.find('.modal-body #version_e').val(version);
        modal.find('.modal-body #date_e').val(date);
        $("#id_type_document_e option[value=" + tipo + "]").attr("selected", true);



    });

    $("#Guardar").click(function() {
        let name = $('#name').val();
        let ver = $('#version').val();
        let dat = $('#date').val();
        let tip = $('#id_type_document').val();
        if (name.length == 0) {
            $('#name').focus();
            $.toast({
                text: 'Campo Nombre es obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (ver.length == 0) {
            $('#version').focus();
            $.toast({
                text: 'Campo Versión  es obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (dat.length == 0) {
            $('#date').focus();
            $.toast({
                text: 'Campo fecha  es obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (tip == 0) {
            $('#id_type_document').focus();
            $.toast({
                text: 'Debe Seleccionar un tipo de documento',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else {
            $("#form_create").submit();
        }
    });

    $("#Actualizar").click(function() {
        let id = $('#id_document').val();
        let name = $('#name_e').val();
        let ver = $('#version_e').val();
        let dat = $('#date_e').val();
        let tip = $('#id_type_document_e').val();
        if (id.length <= 0) {

            $.toast({
                text: 'Debe seleccionar una registro de la tabla',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (name.length == 0) {
            $('#name').focus();
            $.toast({
                text: 'Campo Nombre es obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (ver.length == 0) {
            $('#version').focus();
            $.toast({
                text: 'Campo Versión  es obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (dat.length == 0) {
            $('#date').focus();
            $.toast({
                text: 'Campo fecha  es obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (tip == 0) {
            $('#id_type_document').focus();
            $.toast({
                text: 'Debe Seleccionar un tipo de documento',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else {
            $("#form_edit").submit();
        }
    });






});