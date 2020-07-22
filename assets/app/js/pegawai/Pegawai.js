var ref = $('#tableList').DataTable({
	"processing": true,
	"autoWidth": false,
	"ajax": {
		"dataType": 'json',
		"contentType": "application/json; charset=utf-8",
		"type": "GET",
		"url": getUrl()
	},
	"columns": [
		{
			"data": "id",
			"className": "text-center",
			render: function (data, type, row, meta) {
				return meta.row + meta.settings._iDisplayStart + 1;
			}
		},
		{
			"data": 'nama_pgw',
			"className": "text-center"
		},
		{
			"data": 'bdate',
			"className": "text-center"
        },
        {
			"data": 'jabatan',
			"className": "text-center"
        },
        {
			"data": 'jenis_kelamin',
			"className": "text-center"
        },
        {
			"data": 'alamat',
			"className": "text-center"
        },
		{
			"data": 'action',
			"className": "text-center"
        },
	]
});

function delete_data(id) {
	swal({
		title: "Are you sure want to delete?",
		text: "Once deleted, you will not be able to recover this data!",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
		.then((willDelete) => {
			if (willDelete) {
				$.ajax({
					url: base_url + "Pegawai/delete/" + id,
					cache: false,
					type: "GET",
					success: function (response) {
						swal("Success delete data", {
							icon: "success",
						});
						reloadTable();
					},
					error: function (xhr) {
						swal("Failed delete data", {
							icon: "failed",
						});
					}
				});
			}
		});
}

function reloadTable() {
	ref.ajax.url(getUrl()).load();
}

function getUrl() {
	return base_url + 'Pegawai/json/';
}