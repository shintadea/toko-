$(function () {
    $('.tombolTambahDataPembelian').on('click', function () {
        $('#formModalLabelPembelian').html('Tambah Data Pembelian');
        $('.modal-footer button[type=submit').html('Tambah Data');

        // Lainnya sesuai kebutuhan untuk Pembelian...
    });

    $('.tampilModalUbahPembelian').on('click', function () {
        $('#formModalLabelPembelian').html('Ubah Data Pembelian');
        $('.modal-footer button[type=submit').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/toko/public/pembelian/ubah');

        const idpembelian = $(this).data('idpembelian');

        $.ajax({
            url: 'http://localhost/toko/public/pembelian/getubah',
            data: { idpembelian: idpembelian },
            method: 'POST',
            dataType: 'json',
            success: function (data) {
            $('#JumlahPembelian').val(data.JumlahPembelian);
            $('#HargaJual').val(data.HargaJual);
            $('#idpembelian').val(data.idpembelian);
        }
        
        

    });
});


  });

