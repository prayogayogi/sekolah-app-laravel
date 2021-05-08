<?php

namespace App\Http\Controllers;

use App\Headmaster;
use Illuminate\Http\Request;

class KepalaSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $headmaster = Headmaster::all();
        return view('pages.pagesAdmin.dataGuru.kepalaSekolah', compact('headmaster'));
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
        $tujuan_upload = 'dataGambarKepsek';
        $file->move($tujuan_upload, $nama_file);

        Headmaster::create([
            'nama' => $request->nama,
            'nid' => $request->nid,
            'mapel' => $request->mapel,
            'no_hp' => $request->no_hp,
            'role_id' => 1,
            'gambar' => $nama_file,
        ]);
        // Headmaster::create($request->all());
        return redirect()->back()->with('status', 'Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Headmaster $headmaster)
    {
        return $headmaster;
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
    public function update(Request $request, Headmaster $headmaster)
    {
        $data = $this->validate($request, [
            'nama' => 'required',
            'nid' => 'required',
            'mapel' => 'required',
            'no_hp' => 'required',
        ]);

        $file = $request->file('gambar');
        if ($file) {
            $nama_file = time() . "_" . $file->getClientOriginalName();

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'dataGambarKepsek';
            $file->move($tujuan_upload, $nama_file);
        } else {
            $nama_file = $headmaster->gambar;
        }

        Headmaster::where('id', $headmaster->id)
            ->update([
                'nama' => $request->nama,
                'nid' => $request->nid,
                'mapel' => $request->mapel,
                'no_hp' => $request->no_hp,
                'gambar' => $nama_file,
            ]);
        return redirect()->back()->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Headmaster $headmaster)
    {
        Headmaster::destroy($headmaster->id);
        return redirect()->back()->with('status', 'Data Berhasil Dihapus');
    }
}
