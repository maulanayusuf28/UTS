<!DOCTYPE HTML>
<html>
  <head>
    <title>UJIAN TENGAH SEMESTER WEB 2</title>
  </head>
  <body>

    <form name="form1" method="post" action="proses.php">
    <table width="780" border="0" align="center">
      <tr>
        <td colspan="2"><h3>FORM DATA PEMANTAUAN COVID-19</h3></td>
      </tr>
      <tr>
      <td width="250"><label for="wilayah" style="padding-right: 35px;">Nama Wilayah</label>
        <select width="530" name="nmWilayah" id="nmWilayah">
            <option value="DKI JAKARTA">DKI Jakarta</option>
            <option value="JAWA BARAT">Jawa Barat</option>
            <option value="BANTEN">Banten</option>
            <option value="JAWA TENGAH">Jawa Tengah</option>
            </select>
            </td>
      </tr>
      <tr>
        <td width="250">Jumlah Positif</td>
        <td width="530"><input size="40" name="jmlpositif" type="text" id="jmlpositif"></td>
      </tr>
      <tr>
        <td>Jumlah Dirawat</td>
        <td><input size="40" name="jmlrawat" type="text" id="jmlrawat" value=""></td>
      </tr>
      <tr>
        <td>Jumlah Sembuh</td>
        <td><input size="40" name="jmlsembuh" type="text" id="jmlsembuh"></td>
      </tr>
      <tr>
        <td>Jumlah Meninggal</td>
        <td><input size="40" name="jmlmeninggal" type="text" id="jmlmeninggal"></td>
      </tr>

      <tr>
        <td>Nama Operator</td>
        <td><input size="40" name="operator" type="text" id="operator"></td>
      </tr>
      <tr>
        <td>Nim Mahasiswa</td>
        <td><input size="40" name="nim" type="text" id="nim"></td>
      </tr>
      <tr>
        <td></td>
        <td><input name="Submit" type="submit" value="Simpan" ></td>
      </tr>
    </table><p><p>
   
    </form>

  </body>

</html>