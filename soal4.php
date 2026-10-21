<form method="POST">
    <input type="text" name="tugas" required><button name="tambah">Tambah</button>
</form>
<?php
$f = "todo.txt";
if(isset($_POST['tambah'])){
    $h = fopen($f, "a"); fwrite($h, $_POST['tugas']."\n"); fclose($h);
}
if(isset($_GET['h'])){
    $d = file($f); unset($d[$_GET['h']]);
    $h = fopen($f, "w"); foreach($d as $t) fwrite($h, $t); fclose($h);
}
if(file_exists($f) && filesize($f) > 0){
    $h = fopen($f, "r"); $isi = fread($h, filesize($f)); fclose($h);
    foreach(explode("\n", trim($isi)) as $i => $t){
        if($t) echo "$t <a href='?h=$i'>[Hapus]</a><br>";
    }
}
?>