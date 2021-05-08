<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;

class GuruPnsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // Untuk Guru Pns
    public function index()
    {
        $teacher = Teacher::where('role_id', 2)
            ->get();
        return view('pages.pagesAdmin.dataGuru.guruPns', compact('teacher'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'nama' => 'required',
            'nid' => 'required',
            'mapel' => 'required',
            'no_hp' => 'required',
            'gambar' => 'required|file|image|mimes:jpeg,png,jpg',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('gambar');

        $nama_file = time() . "_" . $file->getClientOriginalName();

        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'dataGambarGuru';
        $file->move($tujuan_upload, $nama_file);

        Teacher::create([
            'nama' => $request->nama,
            'nid' => $request->nid,
            'mapel' => $request->mapel,
            'no_hp' => $request->no_hp,
            'role_id' => 2,
            'gambar' => $nama_file,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {

        $data = $this->validate($request, [
            'nama' => 'required',
            'nid' => 'required',
            'mapel' => 'required',
            'no_hp' => 'required',
        ]);

        // menyimpan data file yang diupload ke variabel $file

        $file = $request->file('gambar');
        if ($file) {
            $nama_file = time() . "_" . $file->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'dataGambarPns';
            $file->move($tujuan_upload, $nama_file);
        } else {
            $nama_file = $teacher->gambar;
        }

        Teacher::where('id', $teacher->id)
            ->update([
                'nama' => $request->nama,
                'nid' => $request->nid,
                'mapel' => $request->mapel,
                'no_hp' => $request->no_hp,
                'gambar' => $nama_file
            ]);
        return redirect()->back()->with('status', 'Data Berhasil Diubah');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
