$(function () {
    $('.tombolTambahDataAkses').on('click', function () {
        $('#formModalLabelAkses').html('Tambah Data Hak Akses');
        $('.modal-footer button[type=submit]').html('Tambah Data');

        // Lainnya sesuai kebutuhan untuk HakAkses...
    });

    $('.tampilModalUbahAkses').on('click', function () {
        $('#formModalLabelAkses').html('Ubah Data Hak Akses');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/toko/public/hakakses/ubah');

        const idakses = $(this).data('idakses');

        $.ajax({
            url: 'http://localhost/toko/public/hakakses/getubah',
            data: { idakses: idakses },
            method: 'POST',
            dataType: 'json',
            success: function (data) {
                $('#NamaAkses').val(data.NamaAkses);
                $('#Keterangan').val(data.Keterangan);
                $('#idakses').val(data.idakses);
            }
        });
    });
});
