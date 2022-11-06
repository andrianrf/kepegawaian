<?php $this->load->view("jabatan/menu"); ?>

Ubah Data Jabatan<br>
<form method="post" action="<?php echo base_url('jabatan/action_ubah/'.$id); ?>">
jabatan : <input type="text" name="jabatan" value="<?php echo $jabatan; ?>"><br>
    <button type="submit" name="ubah">Ubah</button>
</form>