<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class Controller1 extends Controller {
    public function create(){
        return view('create');
    }

    public function update($nim){
        if($data= Mahasiswa::find($nim)){
            return view('update', ['data' => $data]);
        } else {
            return redirect('/read');
        }
    }

    public function edit(Request $request){
        $data = Mahasiswa::find($request->nim);
    
        if($data){
            $data->nama = $request->nama;
            $data->alamat = $request->alamat;
            $data->updated_at = now(); // Menggunakan helper now() untuk mendapatkan waktu saat ini
            $data->save();
            
            return redirect('/read')->with('pesan', 'Data dengan NIM: ' . $request->nim . ' berhasil diupdate');
        } else {
            return redirect('/read')->with('pesan', 'Data tidak ditemukan/gagal diupdate');
        }
    }
    

    public function save(Request $request){
        $validatedData = $request->validate([
            'nim' => 'required|regex:/^G\d{3}.\d{2}.\d{4}$/|unique:mahasiswa,nim',
            'nama' => 'required|string|max:25',
            'alamat' => 'required|min:6',
            'foto_profil' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $file = $request->file('foto_profil');
        $filename = $file->getClientOriginalName();
        $path = $file->storeAs('public/foto_profil', $filename);
        
        // Menyimpan nama file di database
        $model = new Mahasiswa();
        $model->nim = $request->nim;
        $model->nama = $request->nama;
        $model->alamat = $request->alamat;
        $model->foto_profil = $filename; // Menyimpan nama file
        $model->save();

        return view('view', ['data' => $request->all(), 'foto_profil' => $filename]);
    }    

    public function read(){
        $model = new Mahasiswa();
        $dataAll = $model->all();
        return view('read', ['dataAll' => $dataAll]);
    }

    public function delete($nim){
        if($data = Mahasiswa::find($nim)){
            $data->delete();
        } else {
            return redirect('/read')->width('pesan', 'Data NIM : '.@$nim. 'tidak ditemukan');
        }

        return redirect('/read')->with('pesan', 'Data NIM : '.@$nim. 'Berhasil dihapus');
    }

    public function tampil1(){
        return view('tampil1');
    }
    public function tampilkan(Request $request){
        $model = new Mahasiswa();
        $model::insert(['nim' => @$request->nim, 'nama' => @$request->nama, 'alamat' => @$request->alamat]);
        return view('tampil2', ['data' => $request->all()]);
    }

    public function logout(){
        return view('logout');
    }
}