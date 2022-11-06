<?php $this->load->view("jabatan/menu"); ?>

<form method="post" action="<?php echo base_url('jabatan/action_simpan') ?>">
jabatan : <input type="text" name="jabatan"><br>
    <button type="submit" name="simpan">Simpan</button>
</form>