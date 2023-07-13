@extends('layout.main')
@section('content')

<h1>Master Transaksi</h1>
<div class="card">
<div class="card-header">
<a href="{{ asset('djurnal/tambah')  }}">Tambah Data</a>
<table class="table table-sm table-stripped table-bordered">
    <thead>
 <tr style="background:black;color:white">
 <td>No</td>
    <td>Kode Jurnal</td>
    <td>Nomor Perkiraan</td>
    <td>Tanggal Transaksi</td>

   
    <td>Aksi</td>
 </tr> 
 </thead>

    <tbody>  
<?php 
$no=0;
foreach ($djurnal as $rows){
$no++;
?>
<tr>
<td>{{ $no }}</td>
    <td>{{ $rows->kode_jurnal }}</td>
    <td>{{ $rows->nomor_perkiraan }}</td>
    <td>{{ $rows->tanggal_transaksi }}</td>
   

    
    <td>
        <a href="{{ asset('djurnal/edit/'.$rows->id ) }}">Edit</a>
        <a href="{{ asset('djurnal/delete/'.$rows->id ) }}">Del</a>
</td>
</tr>
<?php 
}
?>
 </tbody>
</table>
</div>
</div>
@endsection