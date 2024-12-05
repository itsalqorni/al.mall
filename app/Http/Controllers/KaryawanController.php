<?php


namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        return view('karyawan.index', [
            'karyawan' => Karyawan::latest()->get()
        ]);
    }

    public function add()
    {
        return view('karyawan.insert');
    }

    public function insert(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);

        Karyawan::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
        ]);

        return redirect()->route('karyawan')->with('message', 'Karyawan berhasil ditambahkan');
    }

    
public function edit($id)
{
    $karyawan = Karyawan::findOrFail($id);
    return view('karyawan.edit', compact('karyawan'));
}

public function update(Request $request, $id)
{
    $karyawan = Karyawan::findOrFail($id);
    $karyawan->update($request->all());
    return redirect()->route('karyawan')->with('message', 'Data berhasil diperbarui!');
}

public function destroy($id)
{
    $karyawan = Karyawan::findOrFail($id);
    $karyawan->delete();
    return redirect()->route('karyawan')->with('message', 'Data berhasil dihapus!');
}

}



