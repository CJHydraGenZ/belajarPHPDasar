// ambil elemen"
var keyword = document.querySelector('#keyword');
var tombolCari = document.querySelector('#tombolcari');
var container = document.querySelector('#container');


// tambahkan event ketika keyword di tulis

keyword.addEventListener('keyup', function () {

    // buat object ajax
    var xhr = new XMLHttpRequest();


    // cek kesiapan ajax;
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            container.innerHTML = xhr.responseText;
        }
    }

    // exekusi ajax
    xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value, true);
    xhr.send();


});