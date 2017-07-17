$(document).ready(function() {
  /* Validasi Form */
  /* Validasi Form Login */
  $("#kreaFormLogin").validate({
    rules: {
      nip: {
        required: true,
        number: true,
        minlength: 18,
        maxlength: 18,
      },
      password: {
        required: true,
        minlength: 6
      },
    },
    messages: {
      nip: {
        number: "NIP harus berupa angka.",
        minlength: "NIP harus 18 karakter.",
        maxlength: "NIP harus 18 karakter."
      },
    },
    errorElement: "p",
    errorPlacement: function(error, element) {
      // Add the `help-block` class to the error element
      error.addClass("help-block");
      error.insertAfter(element);

    },
    highlight: function(element, errorClass, validClass) {
      $(element).parents(".control-group").addClass("error").removeClass("success");
    },
    unhighlight: function(element, errorClass, validClass) {
      $(element).parents(".control-group").addClass("success").removeClass("error");
    }
  });
});
