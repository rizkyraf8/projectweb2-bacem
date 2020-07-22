<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Input Data</h3>
            </div>
            <form role="form" action="<?= base_url(getController() . "/save") ?>" method="POST">
                <div class="card-body">
                    <input type="hidden" class="form-control" data-validation="required" data-validation-error-msg="Anda belum mengisi field ini" required="required" name="id_dpt" id="id_dpt" value="<?= @$data['id_dpt'] ?(@$data['id_dpt']) : "" ?>">
                    <div class="form-group">
                        <label for="nama_dpt">Nama Department</label>
                        <input type="text" class="form-control" data-validation="required" data-validation-error-msg="Anda belum mengisi field ini" required="required" name="nama_dpt" id="nama_dpt" placeholder="Enter Nama Department" value="<?= @$data['nama_dpt'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="lokasi">Lokasi</label>
                        <input type="text" class="form-control" data-validation="required" data-validation-error-msg="Anda belum mengisi field ini" required="required" name="lokasi" id="lokasi" placeholder="Enter lokasi" value="<?= @$data['lokasi'] ?>">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>