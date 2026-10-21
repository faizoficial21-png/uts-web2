<form method="POST">
    usia: <input type="number" name="usia" required>
    <button type="submit">Cek</button>
</form>

<?php
if (isset($_POST['usia'])) {
    $u = $_POST['usia'];

    if ($u <= 12) {
        $k = "Anak-anak";
    }
    elseif ($u <= 18) {
        $k = "Remaja";
    }
    elseif ($u <= 59) {
        $k = "Dewasa";
    }
    else {
        $k = "Lansia";
    }

    echo "<br>Kategori: $k";
}
?>