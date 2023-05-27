<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::paginate(5);
        return view('mahasiswa.index', [
            'mhs' => $mahasiswa
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.form', ['data' => null]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nim' => 'required|min:8|integer',
            'nama_lengkap' => 'required|min:3',
            'kelas' => 'required|min:4',
            'jurusan' => 'required|min:3'
        ]);

        $store = Mahasiswa::create([
            'nim' => $request->nim,
            'nama_lengkap' => $request->nama_lengkap,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan
        ]);

        if ($store) {
            return redirect(route('mahasiswa.index'))->with('success', 'Data berhasil ditambahkan !');
        }else{
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $data = Mahasiswa::where('nama_lengkap', $request->search)->paginate(5);

        return view('mahasiswa.index', [
            'mhs' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Mahasiswa::findOrFail($id);

        return view('mahasiswa.form', [
            'data' => $data
        ]);
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
        $this->validate($request, [
            'nim' => 'required|min:8|integer',
            'nama_lengkap' => 'required|min:3',
            'kelas' => 'required|min:4',
            'jurusan' => 'required|min:3'
        ]);
        
        $mahasiswa = Mahasiswa::findOrFail($id);

        $update = $mahasiswa->update([
            'nim' => $request->nim,
            'nama_lengkap' => $request->nama_lengkap,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan
        ]);

        if ($update) {
            return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil diubah !');
        }else{
            return redirect()->back();
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        $delete = $mahasiswa->delete();

        if ($delete) {
            return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil dihapus !');
        }else{
            return redirect()->back();
        }
    }
}
