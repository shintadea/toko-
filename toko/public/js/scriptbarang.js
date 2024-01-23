$(function(){

    $('.tombolTambahData').on('click', function(){
        $('#formModalLabel').html('Tambah Data');
        $('.modal-footer button[type=submit').html('Tambah Data');

    });

    $('.tampilModalUbah').on('click', function(){
        $('#formModalLabel').html('Ubah Data Barang');
        $('.modal-footer button[type=submit').html('Ubah Data');
        $('.modal-body form').attr('action','http://localhost/toko/public/barang/ubah');

        const id = $(this).data('id');

      $.ajax({
       url:'http://localhost/toko/public/barang/getubah',
         data: {id : id},
         method: 'POST',
        dataType:'json',
        success: function(data){
            $('#NamaBarang').val(data.NamaBarang);
            $('#Keterangan').val(data.Keterangan);
            $('#Satuan').val(data.Satuan);
            $('#IdPengguna').val(data.IdPengguna);
            $('#id').val(data.id);
        }
        
        

    });
});


  });

