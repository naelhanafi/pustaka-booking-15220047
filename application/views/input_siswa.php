
<form action="<?php echo base_url('dlemas/submit_siswa');?>" method="post">
  <label for="nama_siswa">Nama Siswa:</label>
  <input type="text" id="nama_siswa" name="nama_siswa"><br><br>

  <label for="nis">NIS:</label>
  <input type="text" id="nis" name="nis"><br><br>

  <label for="kelas">Kelas:</label>
  <input type="text" id="kelas" name="kelas"><br><br>

  <label for="tanggal_lahir">Tanggal Lahir:</label>
  <input type="date" id="tanggal_lahir" name="tanggal_lahir"><br><br>

  <label for="tempat_lahir">Tempat Lahir:</label>
  <input type="text" id="tempat_lahir" name="tempat_lahir"><br><br>

  <label for="alamat">Alamat:</label>
  <textarea id="alamat" name="alamat"></textarea><br><br>

  <label for="jenis_kelamin">Jenis Kelamin:</label>
  <input type="radio" id="laki_laki" name="jenis_kelamin" value="Laki-Laki">
  <label for="laki_laki">Laki-Laki</label>
  <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
  <label for="perempuan">Perempuan</label><br><br>

  <label for="agama">Agama:</label>
  <select id="agama" name="agama">
    <option value="Islam">Islam</option>
    <option value="Kristen">Kristen</option>
    <option value="Katolik">Katolik</option>
    <option value="Budha">Budha</option>
    <option value="Hindu">Hindu</option>
    <option value="Protestan">Protestan</option>
    <option value="Khonghucu">Khonghucu</option>
  </select><br><br>

  <input type="submit" value="Submit">
</form>