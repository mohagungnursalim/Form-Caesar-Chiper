<?php 

if (isset($_POST['submit'])) {
    
    $plaintext = $_POST['plaintext'];
    $key = $_POST['key'];
    
    $panjang = strlen($plaintext);
    $arr2[0] = null;

    for ($i=0; $i < $panjang; $i++) { 
       $arr[$i] = substr($plaintext,$i,1);
       $kode[$i] = ord($arr[$i]);
       $kode[$i] += $key;
       $arr2[$i] = chr($kode[$i]);
    }
    if ($arr2[0]!=null) {
        echo(implode($arr2));

    }else{
        ?>
        Silahkan isi terlebih dahulu!
        <?php
    }
}

?>


