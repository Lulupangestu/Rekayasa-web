<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="icon">
	<title>LuLu</title>
	<!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Datatable -->
    <link rel="stylesheet" type="text/css" href="css/datatables.min.css">
</head>
<body>
	<nav class="navbar navbar-dark bg-primary">
	  <a class="navbar-brand text-white" href="index.php">
	    Rekayasa Web
	  </a>
	</nav>
	
	<div class="container mb-5">
		<h2 align="center" style="margin: 30px;">Menampilkan data json ke dalam datatable</h2>
		<div class="table-responsive">
			<table id="data" class="table table-striped table-bordered" style="width:100%">
			</table>
		</div>	
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/datatables.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript">
	    $(document).ready(function() {
	        var table = $('#data').DataTable({
		        responsive: true,
		        "ajax": {
		            "type": "POST",
		            "url": "mahasiswa.json",
		            "timeout": 120000,
		            "dataSrc": function (json) {
		                if(json != null){
		                    return json
		                } else {
		                    return "";
		                }
		            }
		        },
		        "sAjaxDataProp": "",
		        "width": "100%",
		        "order": [[ 0, "asc" ]],
		        "aoColumns": [
		            {
		                "mData": null,
		                "title": "No",
		                render: function (data, type, row, meta) {
		                    return meta.row + meta.settings._iDisplayStart + 1;
		                }
		            },
		            {
		                "mData": null,
		                "title": "Kode Prodi",
		                "render": function (data, row, type, meta) {
		                    return data.kode_prodi;
		                }
		            },
		            {
		                "mData": null,
		                "title": "Prodi",
		                "render": function (data, row, type, meta) {
		                    return data.prodi;
		                }
		            },
		            {
		                "mData": null,
		                "title": "Kelas",
		                "render": function (data, row, type, meta) {
		                    return data.kelas;
		                }
		            },
		            {
		                "mData": null,
		                "title": "NIM",
		                "render": function (data, row, type, meta) {
		                    return data.nim;
		                }
		            },
		            {
		                "mData": null,
		                "title": "Nama",
		                "render": function (data, row, type, meta) {
		                    return data.nama;
		                }
		            },
		            {
		                "mData": null,
		                "title": "Angkatan",
		                "render": function (data, row, type, meta) {
		                    return data.angkatan;
		                }
		            },
		            {
		                "mData": null,
		                "title": "IP",
		                "render": function (data, row, type, meta) {
		                    return data.IP;
		                }
		            },
		            {
		                "mData": null,
		                "title": "IPK",
		                "render": function (data, row, type, meta) {
		                    return data.IPK;
		                }
		            }
		        ]
		    });
	    });
	</script>
</body>
</html>