$(function () {
  $('.user_error, .pass_error').hide();

  // validar los campos de acceso 
  $("#login-usu").validate({
    rules: {
      email_usu: "required",
      pass_usu: {
        required: true,
        minlength: 8
      }
    },
    messages: {
      pass_usu: {
        required: "Debe ingresar una contraseña",
        minlength: "Debe tener un minimo de 8 caracteres",
        equalTo: "Las contraseñas no coinciden"
      }
    }
  });

  // verificar si los datos son correctos.
  $('#entrarBtn').click(function () {
    $('.user_error, .pass_error').hide();
    if ($("#login-usu").valid()) {

      $.ajax({
        type: "POST",
        url: 'ajaxValidaLogin_usu.php',
        data: $("#login-usu").serialize(),
        beforeSend: function () {
          $('.pass_error').show().html('Validando el e-mail <div class="mdl-spinner mdl-js-spinner is-active"></div>');
        }
      }).done(function (data) {
        $('.pass_error').html(data);
        if (data === 'OK') {
          window.open("pag1/index.php", "_self");
        }
      }).fail(function (jqXHR) {
        $('.pass_error').html('Error!! ' + jqXHR.status);
      });

    } else {
      return false;
    }

  });
});