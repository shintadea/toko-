$(function () {
    $('.tombolTambahDataPengguna').on('click', function () {
        $('#formModalLabelPengguna').html('Tambah Data Pengguna');
        $('.modal-footer button[type=submit]').html('Tambah Data');

        // Lainnya sesuai kebutuhan untuk penjualan...
    });

    $('.tampilModalUbahPengguna').on('click', function () {
        $('#formModalLabelPengguna').html('Ubah Data Pengguna');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/toko/public/pengguna/ubah');

        const idpengguna = $(this).data('idpengguna');

        $.ajax({
            url: 'http://localhost/toko/public/pengguna/getubah',
            data: { idpengguna: idpengguna },
            method: 'POST',
            dataType: 'json',
            success: function (data) {
            $('#NamaPengguna').val(data.NamaPengguna);
            $('#Password').val(data.Password);
            $('#NamaDepan').val(data.NamaDepan);
            $('#NamaBelakang').val(data.NamaBelakang);
            $('#NoHp').val(data.NoHp);
            $('#Alamat').val(data.Alamat);
            $('#IdAkses').val(data.IdAkses);
            $('#idpengguna').val(data.idpengguna);
        }

   
        

    });
});

});

