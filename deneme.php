<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="al.php" method="post">
    <table>
        <tr>
            <td>1.Sayıyı Giriniz</td>
            <td><input name="sayi1" type="number"></td>
        </tr>
        <tr>
            <td>2.Sayıyı Giriniz</td>
            <td><input name="sayi2" type="number"></td>
        </tr>
        <tr>
            <td colspan="2">
                <center>
                <select name="islem" id="">İslem
                <option value="topla">Topla</option>
                <option value="cikar">Çıkar</option>
                <option value="carp">Çarp</option>
                <option value="bol">Böl</option>
                </select>
                </center>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <center>
                    <button type="submit">Gönder</button>
                </center>
            </td>
        </tr>
    </table>

</form>


</body>
</html>