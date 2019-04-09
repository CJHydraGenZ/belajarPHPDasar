<?php

require 'functions.php';
$nim = $_GET["nim"];
$query = "DELETE FROM tb_mahasiswa WHERE nim = $nim";

mysqli_query($conn, $query);

if (mysqli_affected_rows($conn) > 0) {
    echo "<script>
        alert('Berasil dihapus');
        document.location.href = 'index.php';
</script>";
} else {
    echo "<script>
        alert('gagal dihapus');
        document.location.href = 'index.php';
</script>";
}

// header("Location: index.php");
