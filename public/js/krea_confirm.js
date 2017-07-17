/* jQuery Confirm */
  /* Konfirmasi Hapus */
  $('.hapus').submit(function(e) {
    var currentForm = this;
    e.preventDefault();
    $.confirm({
      boxWidth: '25%',
      useBootstrap: false,
      icon: 'icon-remove',
      closeIcon: true,
      animation: 'scale',
      type: 'blue',
      title: 'Hapus',
      content: 'Apakah anda yang ingin menghapus data ini ?',
      buttons: {
        ya: function(result) {
          currentForm.submit();
        },
        batal: function() {

        }
      }
    });
  });
