<html>
	<head>
		<title>Laporan Peminjaman</title>
		<link rel="stylesheet" href="{{ asset('adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
	</head>

	<body>
	<center>
			<p>
				<h1>LAPORAN PEMINJAMAN</h1>	
			</p>
			</center>
		<hr>
	<center><b>Tabel Data Peminjaman</b></center>
	<br>

	 <table class="table table-bordered table-striped" border="1">
            <thead>
                <tr>
        <th width="5%">No</th>
        <th width="10%">Inventaris ID</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
        <th width="5%">Jumlah</th>
        <th width="8%">Status Peminjaman</th>
        <th width="5%">Pegawai ID</th>                  
                </tr>
            </thead>

            <tbody>
        @foreach($datapinjam as $dpnn)
                <tr>
            <td>{{$dpnn->id}}</td>
          <td>{{$dpnn->inventaris_id}}</td>
          <td>{{$dpnn->tanggal_pinjam}}</td>
          <td>{{$dpnn->tanggal_kembali}}</td>
          <td>{{$dpnn->jumlah}}</td>
          <td>{{$dpnn->status_peminjaman}}</td>
          <td>{{$dpnn->pegawai_id}}</td> 
                </tr>
        @endforeach
            </tbody>
        </table>

	</center>
  
<script src="{{ asset('adminlte/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
	</body>
</html>