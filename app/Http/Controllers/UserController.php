<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use DB;
use Auth;
use App\User;

class UserController extends Controller
{
    public function signup(request $request) {
        // print_r($request->input());

        $username=$request->input('username');
        $name=$request->input('name');
        $email=$request->input('email');
        $telp=$request->input('telp');
        $alamat=$request->input('alamat');
        $password=$request->input('password');

        $data=DB::insert('insert into admin(username,name,email,telp,alamat,password) 
            values(?,?,?,?,?,?)',[$username,$name,$email,$telp,$alamat,$password]);

        if($data) {
            return redirect('/login');
        }
        else {
            return redirect('/register');
        }
    }

    public function signin(request $request) {
        // return "success";

        global $username;

        $username=$request->input('username');
        $password=$request->input('password');

        $data=DB::select('select username from admin where username=? and password=?',[$username,$password]);
    
        if($data) {
            $username = $username;
            return redirect('/homepage');
        }
        else {
            $username = null;
            return redirect('/login');
        }
    }

    public function logout(){
        return redirect('/login');
    }

    public function showBook() {
        $data['data']=DB::table('buku')->get();
        if(count($data)>0) {
            return view('bookdata', $data);
        }
        else {
            return view('bookdata');
        }
    }

    public function searchBook(request $request) {
        $word=$request->input('search');

        $data['data']=DB::select(DB::raw("SELECT judul_buku FROM buku WHERE judul_buku like '%$word%'"));
        return view('bookdata', $data);
    }

    public function showPeminjam() {
        $data['data']=DB::table('pelanggan')->get();
        if(count($data)>0) {
            return view('peminjam', $data);
        }
        else {
            return view('peminjam');
        }
    }

    public function searchPeminjam(request $request) {
        $word=$request->input('search');

        $data['data']=DB::select(DB::raw("SELECT nama_pembeli FROM pelanggan WHERE nama_pembeli like '%$word%'"));
        return view('peminjam', $data);
    }

    public function bookPlus(request $request) {
        $id=$request->input('nomor');
        $judul=$request->input('judul');
        $penulis=$request->input('penulis');
        $penerbit=$request->input('penerbit');
        $tahun=$request->input('tahun');
        $kategori=$request->input('kategori');
        $des=$request->input('deskripsi');

        $data=DB::insert('insert into buku(id,judul_buku,penulis,penerbit,tahun,kategori,description) 
            values(?,?,?,?,?,?,?)',[$id,$judul,$penulis,$penerbit,$tahun,$kategori,$des]);

        if($data) {
            return redirect('/book');
        }
        else {
            return redirect('/book-plus');
        }
    }

    public function peminjamPlus() {
        $id=$request->input('nomor');
        $judul=$request->input('judul');
        $penulis=$request->input('penulis');
        $penerbit=$request->input('penerbit');
        $tahun=$request->input('tahun');
        $kategori=$request->input('kategori');
        $des=$request->input('deskripsi');

        $data=DB::insert('insert into buku(id,judul_buku,penulis,penerbit,tahun,kategori,description) 
            values(?,?,?,?,?,?,?)',[$id,$judul,$penulis,$penerbit,$tahun,$kategori,$des]);

        if($data) {
            return redirect('/book');
        }
        else {
            return redirect('/book-plus');
        }
    }
}

?>