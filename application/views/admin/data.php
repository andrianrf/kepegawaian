<?php $this->load->view("admin/menu"); ?>

<a href="<?php echo base_url('admin/tambah'); ?>">tambah data</a>
<table border="1" style="border-collapse: collapse;" width="100%">
    <tr>
        <th>no</th>
        <th>id</th>
        <th>nip</th>
        <th>nama</th>
        <th>hp</th>
        <th>email</th>
        <th>aksi</th>
    </tr>

    <?php
    $no = 1;
    foreach($this->M_pegawai->get_data_pegawai()->result() as $row){
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row->id; ?></td>
            <td><?php echo $row->nip; ?></td>
            <td><?php echo $row->nama; ?></td>
            <td><?php echo $row->hp; ?></td>
            <td><?php echo $row->email; ?></td>
            <td>Edit | Hapus</td>
        </tr>
        <?php
    }
    ?>

</table>