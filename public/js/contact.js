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
        var fname = button.data('firstname')
        var lastname = button.data('lastname')
        var phone = button.data('phone')
        var address = button.data('address')
        var email = button.data('email')
        var modal = $(this)

        modal.find('.modal-body #id_contact_person').val(id);
        modal.find('.modal-body #first_name_e').val(fname);
        modal.find('.modal-body #last_name_e').val(lastname);
        modal.find('.modal-body #phone_e').val(phone);
        modal.find('.modal-body #email_e').val(email);
        modal.find('.modal-body #address_e').val(address);

    });

    $("#Guardar").click(function() {
        let first_name = $('#first_name').val();
        let last_name = $('#last_name').val();
        let pho = $('#phone').val();
        let ema = $('#email').val();
        let add = $('#address').val();
        if (first_name.length == 0) {
            $('#first_name').focus();
            $.toast({
                text: 'Campo Nombres es Obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (last_name.length == 0) {
            $('#last_name').focus();
            $.toast({
                text: 'Campo Apellidos  es Obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (pho.length == 0) {
            $('#phone').focus();
            $.toast({
                text: 'Campo Teléfono  es Obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (pho.length > 11) {
            $('#phone').focus();
            $.toast({
                text: 'Formato de télefono NO válido',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (!$.isNumeric(pho)) {
            $('#phone').focus();
            $.toast({
                text: 'Datos No Permitidos en el campo Teléfono',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (ema.length == 0) {
            $('#email').focus();
            $.toast({
                text: 'Campo Correo  es Obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (add.length == 0) {
            $('#addres').focus();
            $.toast({
                text: 'Campo Dirección  es Obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else {
            $("#form_create").submit();
        }
    });

    $("#Actualizar").click(function() {
        let id = $('#id_contact_person').val();
        let first_name = $('#first_name_e').val();
        let last_name = $('#last_name_e').val();
        let pho = $('#phone_e').val();
        let ema = $('#email_e').val();
        let add = $('#address_e').val();
        if (id.length <= 0) {

            $.toast({
                text: 'Debe seleccionar un registro de la tabla',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (first_name.length == 0) {
            $('#first_name').focus();
            $.toast({
                text: 'Campo Nombres es Obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (last_name.length == 0) {
            $('#last_name').focus();
            $.toast({
                text: 'Campo Apellidos  es Obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (pho.length == 0) {
            $('#phone').focus();
            $.toast({
                text: 'Campo Teléfono  es Obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (pho.length > 11) {
            $('#phone').focus();
            $.toast({
                text: 'Formato de télefono NO válido',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (!$.isNumeric(pho)) {
            $('#phone').focus();
            $.toast({
                text: 'Datos No Permitidos en el campo Teléfono',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (ema.length == 0) {
            $('#email').focus();
            $.toast({
                text: 'Campo Correo  es Obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (add.length == 0) {
            $('#addres').focus();
            $.toast({
                text: 'Campo Dirección  es Obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else {
            $("#form_edit").submit();
        }
    });






});