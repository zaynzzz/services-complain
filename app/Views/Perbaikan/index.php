<div class="container-fluid py-3 my-5">
    <div class="row justify-content-between d-flex px-3">
        <script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js" type="text/javascript"></script>
        <h1>Pending</h1>
        <table id='keluhantable' class="table table-striped|sm|bordered|hover|inverse table-inverse table-responsive">
            <thead class="thead-inverse|thead-default">
                <tr>
                    <th></th>
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
                foreach ($perbaikan as $row) {
                ?>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="" id="" value="<?= $row->finished; ?>" <?= ($row->finished === "") ? "" : "checked"; ?>>
                                <label class="form-check-label" for="">
                                </label>
                            </div>
                        </td>
                        <td><?= $i++; ?></td>
                        <td><?= $row->nama_pelanggan; ?></td>
                        <td><?= $row->keluhan; ?></td>
                        <td><?= $row->nama_teknisi; ?></td>
                        <td><?= $row->perbaikan; ?></td>
                        <td><?= $row->tgl_perbaikan; ?></td>
                        <td>
                            <a href="<?= base_url(); ?>/Perbaikan/edit/<?= $row->idkeluhan; ?>">Edit</a>
                        </td>
                    </tr>
                <?php
                }

                ?>
            </tbody>
        </table>
        <h1>Success Progress</h1>
        <table id='successtable' class="table table-striped|sm|bordered|hover|inverse table-inverse table-responsive">
            <thead class="thead-inverse|thead-default">
                <tr>
                    <th></th>
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
                foreach ($perbaikan as $row) {
                ?>
                    <tr>
                        <td>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="" id="" value="<?= $row->finished; ?>" <?= ($row->finished === "") ? "" : "checked"; ?>>
                                <label class="form-check-label" for="">
                                </label>
                            </div>
                        </td>
                        <td><?= $i++; ?></td>
                        <td><?= $row->nama_pelanggan; ?></td>
                        <td><?= $row->keluhan; ?></td>
                        <td><?= $row->nama_teknisi; ?></td>
                        <td><?= $row->perbaikan; ?></td>
                        <td><?= $row->tgl_perbaikan; ?></td>
                        <td>
                            <a href="<?= base_url(); ?>/Perbaikan/edit/<?= $row->idkeluhan; ?>">Edit</a>
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
<script type="text/javascript">
    $(function() {
        $('#successtable').dataTable();
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