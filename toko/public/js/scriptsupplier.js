$(function () {
    $('.tombolTambahDataSupplier').on('click', function () {
        $('#formModalLabelSupplier').html('Tambah Data Supplier');
        $('.modal-footer button[type=submit]').html('Tambah Data');

        // Lainnya sesuai kebutuhan untuk Supplier...
    });

    $('.tampilModalUbahSupplier').on('click', function () {
        $('#formModalLabelSupplier').html('Ubah Data Supplier');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/toko/public/supplier/ubah');

        const idsupplier = $(this).data('idsupplier');

        $.ajax({
            url: 'http://localhost/toko/public/supplier/getubah',
            data: { idsupplier: idsupplier },
            method: 'POST',
            dataType: 'json',
            success: function (data) {
                $('#NamaSupplier').val(data.NamaSupplier);
                $('#Alamat').val(data.Alamat);
                $('#NoSupplier').val(data.NoSupplier);
                $('#IdPengguna').val(data.IdPengguna);
                $('#IdBarang').val(data.IdBarang);
                $('#idsupplier').val(data.idsupplier);
            }
        });
    });
});
