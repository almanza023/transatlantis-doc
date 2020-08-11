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
        var nid = button.data('nid')
        var des = button.data('des')
        var title = button.data('title')
        var type = button.data('type')
        var dep = button.data('dep')
        var mun = button.data('mun')
        var des = button.data('des')
        var modal = $(this)

        modal.find('.modal-body #id_destination').val(id);
        modal.find('.modal-body #first_name_e').val(fname);
        modal.find('.modal-body #last_name_e').val(lastname);
        modal.find('.modal-body #phone_e').val(phone);
        modal.find('.modal-body #email_e').val(email);
        modal.find('.modal-body #address_e').val(address);
        modal.find('.modal-body #nid_e').val(nid);
        modal.find('.modal-body #description_e').val(des);

        $("#id_title_e option[value='" + title + "']").attr("selected", true);
        $("#id_type_customer_e option[value='" + type + "']").attr("selected", true);
        $("#id_departament_e option[value='" + dep + "']").attr("selected", true);
        $("#id_municipality_e option[value='" + mun + "']").attr("selected", true);

    });

    $("#id_departament").change(function(event) {
        $("#id_municipality").empty();
        $.get("municipios/" + event.target.value + "", function(response, grado_id) {
            for (i = 0; i < response.length; i++) {
                $("#id_municipality").append("<option value='" + response[i].id_municipality + "'>" + response[i].name + "</option>");
            }
        })
    })

    $("#id_departament_e").change(function(event) {
        $("#id_municipality_e").empty();
        $.get("municipios/" + event.target.value + "", function(response, grado_id) {
            for (i = 0; i < response.length; i++) {
                $("#id_municipality_e").append("<option value='" + response[i].id_municipality + "'>" + response[i].name + "</option>");
            }
        })
    })

    $("#Guardar").click(function() {
        let first_name = $('#first_name').val();
        let last_name = $('#last_name').val();
        let nid = $('#nid').val();
        let pho = $('#phone').val();
        let ema = $('#email').val();
        let add = $('#address').val();
        let type_customer = $('#id_type_customer').val();
        let title = $('#id_title').val();
        let id_dep = $('#id_departament').val();
        let id_mun = $('#id_municipality').val();
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
        } else if (nid.length == 0) {
            $('#nid').focus();
            $.toast({
                text: 'Campo Documento  es Obligatorio',
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
        } else if (type_customer == 0) {
            $('#id_type_customer').focus();
            $.toast({
                text: 'Campo Tipo Cliente  es Obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (title == 0) {
            $('#id_title').focus();
            $.toast({
                text: 'Campo Titúlo  es Obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (id_dep == 0) {
            $('#id_departament').focus();
            $.toast({
                text: 'Campo Departamento  es Obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (id_mun == 0) {
            $('#id_municipiality').focus();
            $.toast({
                text: 'Campo Municipio  es Obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else {
            $("#form_create").submit();
        }
    });

    $("#Actualizar").click(function() {
        let id = $('#id_destination').val();
        let first_name = $('#first_name_e').val();
        let last_name = $('#last_name_e').val();
        let nid = $('#nid_e').val();
        let pho = $('#phone_e').val();
        let ema = $('#email_e').val();
        let add = $('#address_e').val();
        let type_customer = $('#id_type_customer_e').val();
        let title = $('#id_title_e').val();
        let id_dep = $('#id_departament_e').val();
        let id_mun = $('#id_municipality_e').val();
        if (id.length <= 0) {

            $.toast({
                text: 'Debe seleccionar un registro de la tabla',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        }
        if (first_name.length == 0) {
            $('#first_name_e').focus();
            $.toast({
                text: 'Campo Nombres es Obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (last_name.length == 0) {
            $('#last_name_e').focus();
            $.toast({
                text: 'Campo Apellidos  es Obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (nid.length == 0) {
            $('#nid_e').focus();
            $.toast({
                text: 'Campo Documento  es Obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (pho.length == 0) {
            $('#phone_e').focus();
            $.toast({
                text: 'Campo Teléfono  es Obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (pho.length > 11) {
            $('#phone_e').focus();
            $.toast({
                text: 'Formato de télefono NO válido',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (!$.isNumeric(pho)) {
            $('#phone_e').focus();
            $.toast({
                text: 'Datos No Permitidos en el campo Teléfono',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (ema.length == 0) {
            $('#email_e').focus();
            $.toast({
                text: 'Campo Correo  es Obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (add.length == 0) {
            $('#addres_e').focus();
            $.toast({
                text: 'Campo Dirección  es Obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (type_customer == 0) {
            $('#id_type_customer_e').focus();
            $.toast({
                text: 'Campo Tipo Cliente  es Obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (title == 0) {
            $('#id_title_e').focus();
            $.toast({
                text: 'Campo Titúlo  es Obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (id_dep == 0) {
            $('#id_departament_e').focus();
            $.toast({
                text: 'Campo Departamento  es Obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else if (id_mun == 0) {
            $('#id_municipiality_e').focus();
            $.toast({
                text: 'Campo Municipio  es Obligatorio',
                showHideTransition: 'slide',
                position: 'top-left',
                icon: 'warning'
            })
        } else {
            $("#form_edit").submit();
        }
    });






});