<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Djurnal_model;

class DjurnalController extends Controller
{
    //
    public function index(){
        $mydjurnal = new Djurnal_model();
        $djurnal = $mydjurnal->tampil_djurnal();
        
        $data = array('djurnal' => $djurnal);
        return view('djurnal/index', $data);
    }
    public function tambah(){
        // return ('Testing');
        return view('djurnal/tambah');
     }
 
     public function tambah_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('djurnal')
         ->insert([
             'kode_jurnal'  =>  $request->kode_jurnal,
             'nomor_perkiraan'  =>  $request->nomor_perkiraan,
             'tanggal_transaksi'  =>  $request->tanggal_transaksi,

             
         ]);
         return redirect('djurnal');
     }
 
     public function edit($id){
         // return ('Testing');
         $djurnal = \DB::table('djurnal')->where('id', $id)->first();
         //dd($akun);
         $data = array('djurnal' => $djurnal);
         return view('djurnal/edit', $data);
     }
 
     public function edit_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('djurnal')->where('id',$request->id)
         ->update([
            'kode_jurnal'  =>  $request->kode_jurnal,
            'nomor_perkiraan'  =>  $request->nomor_perkiraan,
            'tanggal_transaksi'  =>  $request->tanggal_transaksi,

            
         ]);
         return redirect('djurnal');
     }
 
     public function delete ($id){
         $query = \DB::table('djurnal')->where('id',$id)->delete();
         return redirect('djurnal');
     }
 }
 

