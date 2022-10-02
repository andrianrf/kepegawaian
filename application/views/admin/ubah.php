<?php $this->load->view("admin/menu"); ?>

Ubah Data Pegawai<br>
<form method="post" action="<?php echo base_url('admin/action_ubah/'.$id); ?>">
    nip : <input type="text" name="nip" value="<?php echo $nip; ?>"><br>
    nama : <input type="text" name="nama" value="<?php echo $nama; ?>"><br>
    hp : <input type="text" name="hp" value="<?php echo $hp; ?>"><br>
    email : <input type="text" name="email" value="<?php echo $email; ?>"><br>
    <button type="submit" name="ubah">Ubah</button>
</form>