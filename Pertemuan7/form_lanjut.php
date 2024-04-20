<!DOCTYPE html>
<html>
    <head>
        <title>Contoh Form dengan PHP</title>
    </head>
    <body>
        <h2>Form Contoh</h2>
        <from method="POST" action="proses_lanjut.php">
            <label for="buah">Pilih Buah : <br></label>
            <select name="buah" id="buah">
                <option value="apel">Apel</option>
                <option value="pisang">Pisang</option>
                <option value="mangga">Mangga</option>
                <option value="jeruk">Jeruk</option>
            </select>
            <br><br>

            <label>Pilih Warna Favorit<br></label>
            <input type="checkbox" name="warna[]" value="merah">Merah <br>
            <input type="checkbox" name="warna[]" value="biru">Biru <br>
            <input type="checkbox" name="warna[]" value="hijau">Hijau <br>
            <br>

            <label>Pilih Jenis Kelamin<br></label>
            <input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki <br>
            <input type="radio" name="jenis_kelamin" value="perempuan">Perempuan <br>
            <br>

            <input type="submit" value="Submit">
        </from>
    </body>
</html>