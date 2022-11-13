<?php $this->load->view("jabatan/menu"); ?>

<a href="<?php echo base_url('jabatan/tambah'); ?>">tambah data</a>
<table border="1" style="border-collapse: collapse;" width="100%">
    <tr>
        <th>no</th>
        <th>id</th>
        <th>jabatan</th>
        <th>aksi</th>
    </tr>

    <?php
    $no = 1;
    foreach($this->M_jabatan->get_data_jabatan()->result() as $row){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row->id; ?></td>
            <td><?php echo $row->jabatan; ?></td>
            <td><a href="<?php echo base_url('jabatan/ubah/'.$row->id); ?>">ubah</a> | <a href="<?php echo base_url('jabatan/hapus/'.$row->id); ?>">hapus</a></td>
        </tr>
        <?php
    }
    ?>

</table>