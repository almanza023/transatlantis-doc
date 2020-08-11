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
        var phone = button.data('phone')
        var nit = button.data('nit')
        var email = button.data('email')
        var address = button.data('address')
        var modal = $(this)

        modal.find('.modal-body #id_company').val(id);
        modal.find('.modal-body #name').val(name);
        modal.find('.modal-body #nit').val(nit);
        modal.find('.modal-body #email').val(email);
        modal.find('.modal-body #address').val(address);
        modal.find('.modal-body #phone').val(phone);

    });

    $("#Actualizar").click(function() {
        let id = $('#id_comapny').val();
        let name = $('#name').val();
        let nit = $('#nit').val();
        let pho = $('#phone').val();
        let add = $('#address').val();
        let ema = $('#email').val();
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
        } else if (nit.length == 0 && !isNumeric(nit)) {
            $('#nit').focus();
            $.toast({
                text: 'Campo Nit  es Obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (pho.length == 0 && !isNumeric(pho)) {
            $('#phone').focus();
            $.toast({
                text: 'Campo Teléfono  es Obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (add.length == 0) {
            $('#address').focus();
            $.toast({
                text: 'Campo Dirección  es Obligatorio',
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
        } else {
            $("#form_edit").submit();
        }
    });






});