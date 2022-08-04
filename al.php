<?php

            $baglanti= mysqli_connect('localhost',"root","",'calismalar')
            or die(mysqli_error($baglanti));

if ($_POST["sayi1"] !== null && $_POST['sayi2'] !== null) {
    $sayi1 = $_POST['sayi1'];
    $sayi2 = $_POST['sayi2'];
    $islem = $_POST['islem'];
}
if ($islem=='topla'){
    $sonuc=$sayi1+$sayi2;
}elseif ($islem=='cikar'){
    if($sayi1>$sayi2){
        $sonuc=$sayi1-$sayi2;
    }
    else{
        $sonuc=$sayi2-$sayi1;
    }
}elseif ($islem=='carp') {
    $sonuc=$sayi1 * $sayi2;
}elseif ($islem=='bol'){
    $sonuc=$sayi1/$sayi2;
}else{
    echo "Lütfen geçerli bir işlem seçiniz";
}

$ekle="insert into calismalarim(birincisayi,ikincisayi,sonuc,islem) VALUE ('$sayi1','$sayi2','$sonuc','$islem')";

        $baglanti->query($ekle) or die(mysqli_error($baglanti));

        // ilk sql baglantısı :::::