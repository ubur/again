<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = siswa::orderBy('nomer_induk','asc')->paginate(5);
        return view('siswa/index')->with('data',$data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        session::flash('nomer_induk', $request->nomer_induk);
        session::flash('nama', $request->nama);
        session::flash('alamat', $request->alamat);
        
        $request->validate([
            'nomer_induk' => 'required|numeric',
            'nama' => 'required',
            'alamat' => 'required',
        ],[
            'nomer_induk.required'=>'nomer induk wajib di isi',
            'nomer_induk.numeric'=>'nomer induk wajib di isi dalam angka',
            'nama.required'=>'nama wajib di isi',
            'alamat.required'=>'alamat wajib di isi',

        ]);

        $data = [
            'nomer_induk' => $request->input('nomer_induk'),
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
        ];
        siswa::create($data);
        return redirect('siswa')->with('success','data berhasil di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = siswa::where('nomer_induk', $id)->first();
       return view('siswa/show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = siswa::where('nomer_induk', $id)->first();
        return view('siswa/edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([

            'nama' => 'required',
            'alamat' => 'required',
        ],[
            'nama.required'=>'nama wajib di isi',
            'alamat.required'=>'alamat wajib di isi',

        ]);
        $data = [
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
        ];
        siswa::where('nomer_induk', $id)->update($data);
        return redirect('/siswa')->with('success', 'data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        siswa::where('nomer_induk',$id)->delete();
        return redirect('/siswa')->with('data berhasil di hapus');
    }
}
