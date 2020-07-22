<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Input Data</h3>
            </div>
            <form role="form" action="<?= base_url(getController() . "/save") ?>" method="POST">
                <div class="card-body">
                    <input type="hidden" class="form-control" data-validation="required" data-validation-error-msg="Anda belum mengisi field ini" required="required" name="id_pgw" id="id_pgw" value="<?= @$data['id_pgw'] ? (@$data['id_pgw']) : "" ?>">
                    <div class="form-group">
                        <label for="nama_dpt">Nama Pegawai</label>
                        <input type="text" class="form-control" data-validation="required" data-validation-error-msg="Anda belum mengisi field ini" required="required" name="nama_pgw" id="nama_pgw" placeholder="Enter Nama Pegawai" value="<?= @$data['nama_pgw'] ?>">
                    </div>
                    </div>
					<div class="form-group">
						<label>Tanggal Lahir :</label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
							<input type="date" class="form-control pull-right datepicker" name="bdate" id="bdate" value="">
						</div>
                    </div>
                    <!-- <div class="form-group">
                        <label for="bdate">Tanggal Lahir</label>
                        <input type="text" class="form-control pull-right datepicker" data-validation="required" data-validation-error-msg="Anda belum mengisi field ini" required="required" name="bdate" id="bdate" placeholder="Enter Tanggal Lahir" value="<?= @$data['bdate'] ?>">
                    </div> -->
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" class="form-control" data-validation="required" data-validation-error-msg="Anda belum mengisi field ini" required="required" name="jabatan" id="jabatan" placeholder="Enter Jabatan" value="<?= @$data['jabatan'] ?>">
                    </div>
                    <div class="form-group">
						<label>Jenis Kelamin :</label>
							<select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
							<option value="" selected="selected">--- Select ---</option>
                            <option value="Pria">PRIA</option>
							<option value="Wanita">WANITA</option>
							</select>
					</div>
                    <!-- <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <input type="text" class="form-control" data-validation="required" data-validation-error-msg="Anda belum mengisi field ini" required="required" name="jenis_kelamin" id="jenis_kelamin" placeholder="Enter Jenis Kelamin" value="<?= @$data['jenis_kelamin'] ?>">
                    </div> -->
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