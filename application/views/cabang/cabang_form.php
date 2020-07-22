<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Input Data</h3>
            </div>
            <form role="form" action="<?= base_url(getController() . "/save") ?>" method="POST">
                <div class="card-body">
                    <input type="hidden" class="form-control" data-validation="required" data-validation-error-msg="Anda belum mengisi field ini" required="required" name="id_cabang" id="id_cabang" value="<?= @$data['id_cabang'] ? (@$data['id_cabang']) : "" ?>">
                    <div class="form-group">
                        <label for="nama_cabang">Nama Cabang</label>
                        <input type="text" class="form-control" data-validation="required" data-validation-error-msg="Anda belum mengisi field ini" required="required" name="nama_cabang" id="nama_cabang" placeholder="Enter Nama Cabang" value="<?= @$data['nama_cabang'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" data-validation="required" data-validation-error-msg="Anda belum mengisi field ini" required="required" name="alamat" id="alamat" placeholder="Enter Alamat" value="<?= @$data['alamat'] ?>">
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