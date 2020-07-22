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
			"data": 'start_date',
			"className": "text-center"
		},
		{
			"data": 'end_date',
			"className": "text-center"
        },
        {
			"data": 'surat_sakit',
			"className": "text-center"
        },
        {
			"data": 'keterangan',
			"className": "text-center"
        },
		{
			"data": 'action',
			"className": "text-center"
        },
	]
});



function reloadTable() {
	ref.ajax.url(getUrl()).load();
}

function getUrl() {
	return base_url + 'Lap_sakit/json/';
}