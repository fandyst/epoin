$(document).ready(function() {
  /* Validasi Form */
  /* Validasi Form Siswa */
  $("#kreaFormSiswa").validate({
    rules: {
      nis: {
        required: true,
        number: true,
        minlength: 6,
        maxlength: 6,
        remote: {
          url: "/siswa/nis",
          type: "get",
          data: {
            "_token": $('meta[name="csrf-token"]').attr('content'),
            nis: function() {
              return $("#nis").val();
            }
          }
        }
      },
      nama: {
        required: true,
        minlength: 3,
        maxlength: 50
      },
    },
    messages: {
      nis: {
        number: "NIS harus berupa angka.",
        minlength: "NIS harus 6 karakter.",
        maxlength: "NIS harus 6 karakter.",
        remote: jQuery.validator.format("NIS {0} sudah ada.")
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
      $(".alert").removeClass("hidden");
    },
    unhighlight: function(element, errorClass, validClass) {
      $(element).parents(".control-group").addClass("success").removeClass("error");
      $(".alert").addClass("hidden");
    }
  });

  /* Validasi Form Peraturan */
  $("#kreaFormPeraturan").validate({
    rules: {
      kode: {
        required: true,
        minlength: 4,
        maxlength: 4,
        remote: {
          url: "/peraturan/kode",
          type: "get",
          data: {
            "_token": $('meta[name="csrf-token"]').attr('content'),
            kode: function() {
              return $("#kode").val();
            }
          }
        }
      },
      nama_peraturan: {
        required: true,
        minlength: 10
      },
      poin: {
        required: true,
        number: true
      },
    },
    messages: {
      kode: {
        minlength: "Kode peraturan harus 4 karakter.",
        maxlength: "Kode peraturan harus 4 karakter.",
        remote: jQuery.validator.format("Kode peraturan {0} sudah digunakan.")
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
      $(".alert").removeClass("hidden");
    },
    unhighlight: function(element, errorClass, validClass) {
      $(element).parents(".control-group").addClass("success").removeClass("error");
      $(".alert").addClass("hidden");
    }
  });


  /* Validasi Form Ubah Profil */
  $("#kreaFormProfil").validate({
    rules: {
      nip: {
        required: true,
        number: true,
        minlength: 18,
        maxlength: 18
      },
      nama: {
        required: true,
        minlength: 6
      },
      password: {
        required: true,
        minlength: 6
      }
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


  /* Validasi Form Ubah Password */
  $("#kreaFormUbahPassword").validate({
    rules: {
      oldpassword: {
        required: true,
        minlength: 6
      },
      newpassword: {
        required: true,
        minlength: 6
      },
      confirmpassword: {
        equalTo: "#newpassword"
      }
    },
    messages: {
      confirmpassword: {
        equalTo: "Isian ini harus sama dengan kolom password baru."
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


  /* Validasi Form User */
  $("#kreaFormUser").validate({
    rules: {
      nip: {
        required: true,
        number: true,
        minlength: 18,
        maxlength: 18
      },
      nama: {
        required: true,
        minlength: 6
      },
      email: {
          required: true,
          email: true
      },
      password: {
          required: true,
          minlength: 6
      }
    },
    messages: {
      nip: {
        number: "NIP harus berupa angka.",
        minlength: "NIP harus 18 karakter.",
        maxlength: "NIP harus 18 karakter."
      }
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
