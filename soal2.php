<form method="POST">
    <?php
    $barang = ["Buku" => 5000, "Pensil" => 3000, "Penghapus" => 2000];
    foreach ($barang as $nama => $harga) {
        echo "$nama (Rp $harga) - Jumlah: <input type='number' name='$nama' value='0' min='0'><br><br>";
    }
    ?>
    <button type="submit" name="hitung">Hitung Total</button>
</form>

<?php
if (isset($_POST['hitung'])) {
    $barang = ["Buku" => 5000, "Pensil" => 3000, "Penghapus" => 2000];
    $total_seluruh = 0;

    echo "<h3>Rincian:</h3>";
    foreach ($barang as $nama => $harga) {
        $jumlah = $_POST[$nama];
        if ($jumlah > 0) {
            $subtotal = $jumlah * $harga;
            $total_seluruh += $subtotal;
            echo "$nama ($jumlah x Rp $harga) = Rp $subtotal<br>";
        }
    }
    echo "<h3>Total Keseluruhan: Rp $total_seluruh</h3>";
}
?>