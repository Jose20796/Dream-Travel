$(document).ready(function () {
  $("#form_edit_cli").validate({
    rules: {
      nombre: {
        required: true,
        minlength: 3,
      },
      apellido: {
        required: true,
        minlength: 3,
      },
      correo: {
        required: true,
        email: true,
      },
      telefono: {
        required: true,
        minlength: 10,
      },
    },
    messages: {
      nombre: {
        required: "Campo nombre requerido",
        minlength: "Campo nombre debe tener al menos 3 caracteres",
      },
      apellido: {
        required: "Campo apellido requerido",
        minlength: "Campo apellido debe tener al menos 3 caracteres",
      },
      correo: {
        required: "Campo correo requerido",
        email: "Campo email inválido",
      },
      telefono: {
        required: "Campo teléfono requerido",
        minlength: "Campo teléfono debe tener al menos 10 dígitos",
      },
    },
  });
  $("#form_edit_emp").validate({
    rules: {
      nombre: {
        required: true,
        minlength: 3,
      },
      apellido: {
        required: true,
        minlength: 3,
      },
      correo: {
        required: true,
        email: true,
      },
      telefono: {
        required: true,
        minlength: 10,
      },
    },
    messages: {
      nombre: {
        required: "Campo nombre requerido",
        minlength: "Campo nombre debe tener al menos 3 caracteres",
      },
      apellido: {
        required: "Campo apellido requerido",
        minlength: "Campo apellido debe tener al menos 3 caracteres",
      },
      correo: {
        required: "Campo correo requerido",
        email: "Campo email inválido",
      },
      telefono: {
        required: "Campo teléfono requerido",
        minlength: "Campo teléfono debe tener al menos 10 dígitos",
      },
    },
  });


  $("#form_edit_via").validate({
    rules: {
      destino: {
        required: true,
        minlength: 3,
      },
      fecha_salida: {
        required: true,
      },
      fecha_regreso: {
        required: true,
      },
      precio: {
        required: true,
      },
      idcliente: {
        required: true,
      },
      idempleado: {
        required: true,
      },
    },
    messages: {
      destino: {
        required: "Campo destino requerido",
      },
      fecha_salida: {
        required: "Campo fecha de salida requerido",
      },
      fecha_regreso: {
        required: "Campo fecha de regreso requerido",
      },
      precio: {
        required: "Campo precio requerido",
      },
      idcliente: {
        required: "Campo id de cliente requerido",
      },
      idempleado: {
        required: "Campo id de empleado requerido",
      },
    },
  });


});
