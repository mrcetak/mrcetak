@extends('layouts.desain')
@section('judul')
Home
@endsection
@section('isi')
<div class="container">
<center>    <div class="row content-center">
        <div class="col-md-11">
            <div class="panel">
                <div class="panel-heading bg-primary"><h3>Selamat Datang Di Halaman Home InventarisirAPP</h3></div>
            @section('kepala')
            Home
            @endsection
            @section('homeaktif')
            active
            @endsection
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <br><br><br>
                    <h3>
                    InventarisirAPP Adalah Aplikasi Berbasis Website <br> Yang Digunakan Untuk Mendata Inventaris Sarana dan Pra Sarana Sekolah
                    </h3>
                     <br><br><br><br>
                </div>
            </div>
        </div>
    </div>
</center>

</div>
@endsection
