<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <a href="<?= base_url(getController() . "/form") ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Input Sakit</a>
            </div>
            <div class="card-body">
            <table id="tableList" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="8%">No</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Surat Sakit</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    <tfoot>
                    <tr>
                            <th width="8%">No</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Surat Sakit</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url() ?>assets/app/js/pengajuan_sakit/Pengajuan_sakit.js"></script>