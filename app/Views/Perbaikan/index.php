<div class="container-fluid py-3 my-5">
    <div class="row justify-content-between d-flex px-3">
        <script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js" type="text/javascript"></script>

        <table id='keluhantable' class="table table-striped|sm|bordered|hover|inverse table-inverse table-responsive">
            <thead class="thead-inverse|thead-default">
                <tr>
                    <th>No</th>
                    <th>Nama Pelanggan</th>
                    <th>Keluhan</th>
                    <th>Nama Teknisi</th>
                    <th>Perbaikan</th>
                    <th>Tgl Perbaikan</th>
                    <th>Action</th>
                </tr>
            <tbody>
                <?php $i = 1;
                $query = db_connect()->query("SELECT keluhan.idkeluhan,idperbaikan,perbaikan,nama_pelanggan,keluhan,penyebab,tindakan,tgl_keluhan,keluhan.tgl_perbaikan,nama_teknisi FROM keluhan
                JOIN `pelanggan` ON keluhan.idpelanggan=`pelanggan`.idpelanggan 
                JOIN teknisi ON keluhan.idteknisi=teknisi.idteknisi
                JOIN perbaikan ON keluhan.idkeluhan=perbaikan.idkeluhan")->getResult();
                foreach ($query as $row) {
                ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $row->nama_pelanggan; ?></td>
                        <td><?= $row->keluhan; ?></td>
                        <td><?= $row->nama_teknisi; ?></td>
                        <td><?= $row->perbaikan; ?></td>
                        <td><?= $row->tgl_perbaikan; ?></td>
                        <td>
                            <a href="#edit_keluhan<?php echo $row->idkeluhan; ?>" data-toggle="modal" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                            <a href="#delete_keluhan<?php echo $row->idkeluhan; ?>" data-toggle="modal" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                        </td>
                    </tr>
                <?php
                }

                ?>
            </tbody>
        </table>
    </div>
</div>

<script type="text/javascript">
    $(function() {
        $('#keluhantable').dataTable();
    });
</script>
</div>
<!-- <script>
    // $('#table').DataTable({
    processing: true,
        serverSide: true,
        paging: true,

    });
</script> -->