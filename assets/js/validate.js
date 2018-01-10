$(document).ready(function() {
  jQuery.validator.addMethod("lettersonly", function(value, element) {
    return this.optional(element) || /^[a-zA-Z'.\\s]+$/i.test(value);
  }, "Only alphabetical characters");
  $('#frm-login').validate({
    rules: {
      username: {
        required: true,
        remote: {
          url: "login/cekuser",
          type: "post",
          data: {
            username: function() {
              return $( "#username" ).val();
            }
          }
        }
      },
      password: {
        required: true,
        remote: {
          url: "login/cekpassword",
          type: "post",
          data: {
            password: function() {
              return $( "#password" ).val();
            }
          }
        }
      }
    },
    messages: {
      username: {
        required: "Username harus diisi",
        remote: jQuery.validator.format("Username tidak terdaftar")
      },
      password: {
        required: "Password Harus diisi",
        remote: jQuery.validator.format("Password Salah")
      }
    }
  });
});
$(document).ready(function() {
  jQuery.validator.addMethod("lettersonly", function(value, element) {
    return this.optional(element) || /^[a-zA-Z'.\\s]+$/i.test(value);
  }, "Only alphabetical characters");
  $('#frm-testimoni').validate({
    rules: {
      nama: {
        required: true
      },
      pekerjaan: {
        required: true
      },
      pesan: {
        required: true,
        minlength:8
      }
    },
    messages: {
      nama: {
        required: "Nama harus diisi"
      },
      pekerjaan: {
        required: "Pekerjaan harus diisi"
      },
      pesan: {
        required: "Pesan Harus diisi",
        minlength : "Pesan Minimal 8 Karakter"
      }
    }
  });
});
$(document).ready(function() {
  jQuery.validator.addMethod("lettersonly", function(value, element) {
    return this.optional(element) || /^[a-zA-Z'.\\s]+$/i.test(value);
  }, "Only alphabetical characters");
  $('#frm-layanan').validate({
    rules: {
      nama: {
        required: true
      },
      token: {
        required: true
      },
      deskripsi: {
        required: true,
        minlength:8
      }
    },
    messages: {
      nama: {
        required: "Nama harus diisi"
      },
      token: {
        required: "Gambar Harus diupload"
      },
      deskripsi: {
        required: "Pesan Harus diisi",
        minlength : "Pesan Minimal 8 Karakter"
      }
    }
  });
});
$(document).ready(function() {
  jQuery.validator.addMethod("lettersonly", function(value, element) {
    return this.optional(element) || /^[a-zA-Z'.\\s]+$/i.test(value);
  }, "Only alphabetical characters");
  $('#frm-sertifikat').validate({
    rules: {
      nama: {
        required: true
      },
      token: {
        required: true
      }
    },
    messages: {
      nama: {
        required: "Nama harus diisi"
      },
      token: {
        required: "Gambar Harus diupload"
      }
    }
  });
});
$(document).ready(function() {
  jQuery.validator.addMethod("lettersonly", function(value, element) {
    return this.optional(element) || /^[a-zA-Z'.\\s]+$/i.test(value);
  }, "Only alphabetical characters");
  $('#frm-user').validate({
    rules: {
      email: {
        email: true,
        required: true
      },
      username: {
         minlength:8,
        required: true
      },
      lastname: {
        required: true
      },
      firstname: {
        required: true
      },
      password: {
        required: true,
        minlength:8
      },
      password2: {
        required: true,
        equalTo: "#password"
      }
    },
    messages: {
      email: {
        email: "Format email tidak benar",
        required: "Nama harus diisi"
      },
      username: {
        minlength : "Username Minimal 8 Karakter",
        required: "Username Harus diisi"
      },
      lastname: {
        required: "Lastname harus diisi"
      },
      firstname: {
        required: "Firstname Harus diupload"
      },
      password: {
        required: "Password Harus diisi",
        minlength : "Password Minimal 8 Karakter"
      },
      password2: {
        required: "password Harus diisi",
        equalTo: "Password tidak sama"
      }
    }
  });
});