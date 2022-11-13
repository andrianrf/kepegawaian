<?php $this->load->view("pegawai/menu"); ?>

<form method="post" action="<?php echo base_url('pegawai/action_simpan') ?>">
    nip : <input type="text" name="nip"><br>
    nama : <input type="text" name="nama"><br>
    hp : <input type="text" name="hp"><br>
    email : <input type="text" name="email"><br>
    <button type="submit" name="simpan">Simpan</button>
</form>