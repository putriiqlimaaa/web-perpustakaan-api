document.addEventListener("DOMContentLoaded", function() {
    // Mendapatkan elemen input tanggal pinjam dan tanggal kembali
    var inputTglPinjam = document.getElementById('tgl_pinjam');
    var inputTglKembali = document.getElementById('tgl_kembali');

    // Mendapatkan tanggal hari ini
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0'); // January is 0!
    var yyyy = today.getFullYear();

    // Format tanggal sesuai dengan input type="date" (YYYY-MM-DD)
    var formattedDate = yyyy + '-' + mm + '-' + dd;

    // Set nilai default pada input tanggal pinjam
    inputTglPinjam.value = formattedDate;

    // Hitung tanggal kembali 10 hari setelah tanggal pinjam
    var datePlusTenDays = new Date(today.getTime() + (10 * 24 * 60 * 60 * 1000));
    var ddKembali = String(datePlusTenDays.getDate()).padStart(2, '0');
    var mmKembali = String(datePlusTenDays.getMonth() + 1).padStart(2, '0'); // January is 0!
    var yyyyKembali = datePlusTenDays.getFullYear();

    // Format tanggal kembali sesuai dengan input type="date" (YYYY-MM-DD)
    var formattedDateKembali = yyyyKembali + '-' + mmKembali + '-' + ddKembali;

    // Set nilai default pada input tanggal kembali
    inputTglKembali.value = formattedDateKembali;
});
