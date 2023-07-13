@extends('layout.main')
@section('content')

<h1>Master data akun</h1>
<div class="card">
<div class="card-header">

<h1>Tambah Data djurnal</h1>
<form action="{{ asset('djurnal/tambah_proses') }}" method="POST">
@csrf
Kode Jurnal <input type="text" name="kode_jurnal"><br>
Nomor Perkiraan <input type="text" name="nomor_perkiraan"><br>
Tanggal Transaksi <input type="date" name="tanggal_transaksi"><br>
>
<input type="submit" value="Simpan">
</form>   

</div>
</div>
@endsection