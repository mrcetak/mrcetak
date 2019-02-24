<html>
	<head>
		<title>Laporan Inventaris</title>
		<link rel="stylesheet" href="{{ asset('adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
	</head>

	<body>
	<center>
			<p>
				<h1>LAPORAN INVENTARIS</h1>	
			</p>
			</center>
		<hr>
	<center><b>Tabel Data Inventaris</b></center>
	<br>

	 <table class="table table-bordered table-striped" border="1">
            <thead>
                <tr>
            <th width="2%">No</th>
            <th>Nama</th>
            <th>Kondisi</th>
            <th>Keterangan</th>
            <th width="2%">Jumlah</th>
            <th width="2%">Jenis ID</th>
            <th width="2%">Tanggal Register</th>
            <th width="2%">Ruang ID</th>
            <th width="2%">Kode Inventaris</th>
            <th width="2%">User ID</th>                  
                </tr>
            </thead>

            <tbody>
        @foreach($datainven as $dii)
                <tr>
            <td>{{$dii->id}}</td>
            <td>{{$dii->nama}}</td>
            <td>{{$dii->kondisi}}</td>
            <td>{{$dii->keterangan}}</td>
            <td>{{$dii->jumlah}}</td>
            <td>{{$dii->jenis_id}}</td>
            <td>{{$dii->created_at}}</td>
            <td>{{$dii->ruang_id}}</td>
            <td>{{$dii->kode_inventaris}}</td>
            <td>{{$dii->user_id}}</td>
               
                </tr>
        @endforeach
            </tbody>
        </table>

	</center>
  
<script src="{{ asset('adminlte/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
	</body>
</html>