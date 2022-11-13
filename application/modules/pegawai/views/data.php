<?php $this->load->view("pegawai/menu"); ?>

<a href="<?php echo base_url('pegawai/tambah'); ?>">tambah data</a>
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
            <td><a href="<?php echo base_url('pegawai/ubah/'.$row->id); ?>">ubah</a> | <a href="<?php echo base_url('pegawai/hapus/'.$row->id); ?>">hapus</a></td>
        </tr>
        <?php
    }
    ?>

</table>