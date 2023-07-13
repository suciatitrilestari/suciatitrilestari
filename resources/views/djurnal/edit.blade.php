@extends('layout.main')
@section('content')
<h1>Tambah Data Transaksi</h1>
<form action="{{ asset('djurnal/edit_proses') }}" method="POST">
@csrf
<input type="hidden" name="id" value="<?php echo $djurnal->id ?>">
Kode Jurnal <input type="text" name="kode_jurnal" value="<?php echo $djurnal->kode_jurnal ?>"><br>
Nomor Perkiraan <input type="text" name="nomor_perkiraan" value="<?php echo $djurnal->nomor_perkiraan ?>"><br>
Tanggal Transaksi <input type="date" name="tanggal_transaksi" value="<?php echo $djurnal->tanggal_transaksi ?>"><br>

<input type="submit" value="Simpan">
</form>   
@endsection  