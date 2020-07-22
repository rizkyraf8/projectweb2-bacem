<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Input Data</h3>
            </div>
            <form role="form" action="<?= base_url(getController() . "/save") ?>" method="POST">
                <div class="card-body">
                    <input type="hidden" class="form-control" data-validation="required" data-validation-error-msg="Anda belum mengisi field ini" required="required" name="id_cuti" id="id_cuti" value="<?= @$data['id_cuti'] ? (@$data['id_cuti']) : "" ?>">
                    <div class="form-group">
						<label>Start Date :</label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
							<input type="date" class="form-control pull-right datepicker" name="start_date" id="start_date" value="">
						</div>
                    </div></div>
					<div class="form-group">
						<label>End Date :</label>
						<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
							<input type="date" class="form-control pull-right datepicker" name="end_date" id="end_date" value="">
						</div>
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control" data-validation="required" data-validation-error-msg="Anda belum mengisi field ini" required="required" name="keterangan" id="keterangan" placeholder="Enter Keterangan" value="<?= @$data['keterangan'] ?>">
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