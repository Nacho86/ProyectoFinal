$(function() {

  $("#contactForm input,#contactForm textarea").jqBootstrapValidation({
    preventSubmit: true,
    submitError: function($form, event, errors) {
      // mensajes de error adicionales o eventos
    },
    submitSuccess: function($form, event) {
      event.preventDefault(); // evitar el comportamiento de envío predeterminado
      // obtener valores del formulario
      var nombre = $("input#nombre").val();
      var email = $("input#email").val();
      var telefono = $("input#telefono").val();
      var mensaje = $("textarea#mensaje").val();
      var Apellido = nombre; // Mensaje de éxito / fracaso.
      // Verifique el espacio en blanco en el nombre del mensaje de éxito / fallo.
      if (Apellido.indexOf(' ') >= 0) {
        Apellido = nombre.split(' ').slice(0, -1).join(' ');
      }
      $this = $("#sendMessageButton");
      $this.prop("disabled", true); // Deshabilita el botón de envío hasta que la llamada AJAX se complete para evitar mensajes duplicados.
      $.ajax({
        url: "./contacto.php",
        type: "POST",
        data: {
          nombre: nombre,
          telefono: telefono,
          email: email,
          mensaje: mensaje
        },
        cache: false,
        success: function() {
          // Mensaje enviado con exito.
          $('#success').html("<div class='alert alert-success'>");
          $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            .append("</button>");
          $('#success > .alert-success')
            .append("<strong>Tu mensaje ha sido enviado. </strong>");
          $('#success > .alert-success')
            .append('</div>');
          //limpia todas las celdas
          $('#contactForm').trigger("reset");
        },
        error: function() {
          // Mensaje de fallo
          $('#success').html("<div class='alert alert-danger'>");
          $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            .append("</button>");
          $('#success > .alert-danger').append($("<strong>").text("Lo siento " + Apellido + ", en estos momentos estoy teniendo problemas con el servidor. Intentalo de nuevo más tarde!"));
          $('#success > .alert-danger').append('</div>');
          //Borrar todos los campos
          $('#contactForm').trigger("reset");
        },
        complete: function() {
          setTimeout(function() {
            $this.prop("disabled", false); // Vuelva a habilitar el botón de envío cuando se complete la llamada AJAX
          }, 1000);
        }
      });
    },
    filter: function() {
      return $(this).is(":visible");
    },
  });

  $("a[data-toggle=\"tab\"]").click(function(e) {
    e.preventDefault();
    $(this).tab("show");
  });
});

/* Al hacer clic en los cuadros de Ocultar fallo/exito, cierra la ventana */
$('#nombre').focus(function() {
  $('#success').html('');
});
