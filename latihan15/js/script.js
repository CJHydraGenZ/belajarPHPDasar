$(document).ready(function () {

    // hilangkan tombil cari
    $('#tombolcari').hide();
    //event ketika keyword ditulis

    $('#keyword').on('keyup', function () {
        // munculkan icon loading
        $('.loader').show();



        // ajax menggunakan load
        // $('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val());

        $.get('ajax/mahasiswa.php?keyword=' + $('#keyword').val(), function (data) {
            $('#container').html(data);
            $('.loader').hide();
        });
    });
});