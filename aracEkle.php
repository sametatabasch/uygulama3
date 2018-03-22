<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><!-- Sayfa içerisindeki metinler UTF-8 karakter kodlamasına göre gösterilecek-->
    <title>Galeri Otomasyon</title> <!-- Web Tarayıcısı üzerinde gözükecek başlık-->
    <style>/* WEb sayfası içerisindeki öğelerin tasarımını düzenleyen CSS kodları*/
        table {
            width: 300px;
            margin: 10px auto;
        }

        table tr {
            text-align: center;
        }

        input {
            width: 100%;
            margin: -2px;
        }
    </style>
</head>
<body>
<form action="" method="post" name="aracEkleForm">
    <table border="1px">
        <thead>
        <tr>
            <th colspan="3">Yeni Araç Ekle</th>
        </tr>
        </thead>
        <tr>
            <td>Marka</td>
            <td>:</td>
            <td><input type="text" name="marka" placeholder="Araç markasını yazınız"></td>
        </tr>
        <tr>
            <td>Model</td>
            <td>:</td>
            <td><input type="text" name="model" placeholder="Araç modelini yazınız"></td>
        </tr>
        <tr>
            <td>Yakıt Türü</td>
            <td>:</td>
            <td><input type="text" name="yakitTuru" placeholder="Aracın yakıt türünü yazınız"></td>
        </tr>
        <tr>
            <td>Motor Hacmi</td>
            <td>:</td>
            <td><input type="text" name="motorHacmi" placeholder="Aracın motor hacmini yazınız"></td>
        </tr>
        <tr>
            <td>Fiyat</td>
            <td>:</td>
            <td><input type="number" name="fiyat" placeholder="Aracın fiyatını yazınız"></td>
        </tr>
        <tr>
            <td><input type="reset" name="temizle" value="Temizle"></td>
            <td colspan="2"><input type="submit" name="aracEkle" value="Kaydet"></td>
        </tr>
        <tr>
            <td colspan="3">
                <button>
                    <a href="index.php">
                        Geri
                    </a>
                </button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>

<?php

/**
 * Yukarıda bulunan forma girilen bilgilerin boş bırakılıpbırakılmadığını kontrol eden ve
 * bu verileri girilen her bir değer arasında # işereti olacak şekilde araçlar.txt dosyasına kaydeden kodları yazınız.
 *
 * Yazacağınız kodları bu yorum bölümünden sonra yazabilirsiniz.
 */
