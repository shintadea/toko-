$(function () {
    $('.tombolTambahDataPenjualan').on('click', function () {
        $('#formModalLabelPenjualan').html('Tambah Data Penjualan');
        $('.modal-footer button[type=submit').html('Tambah Data');

        // Lainnya sesuai kebutuhan untuk penjualan...
    });

    $('.tampilModalUbahPenjualan').on('click', function () {
        $('#formModalLabelPenjualan').html('Ubah Data Penjualan');
        $('.modal-footer button[type=submit').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/toko/public/penjualan/ubah');

        const idpenjualan = $(this).data('idpenjualan');

        $.ajax({
            url: 'http://localhost/toko/public/penjualan/getubah',
            data: { idpenjualan: idpenjualan },
            method: 'POST',
            dataType: 'json',
            success: function (data) {
            $('#JumlahPenjualan').val(data.JumlahPenjualan);
            $('#HargaJual').val(data.HargaJual);
            $('#idpenjualan').val(data.idpenjualan);
        }
        
        

    });
});


  });

