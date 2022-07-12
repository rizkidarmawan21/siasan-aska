<?php

namespace App\Http\Controllers;
use PDF;
use App\Models\Absen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class AbsenController extends Controller
{

    public function messages()
{
    return [
        'title.required'    => 'A Title is required',
        'title.unique'      => 'The title has already been taken. Try another title.',
        'body.required'     => 'A body is required',
    ];
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Absen::all();

        return view('absensi.index',[
            'absen' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $data = Absen::all();
         $total = Absen::all()->count();
         return view('absensi.print',[
            'absen' => $data,
            'total' => $total
        ]);
        // $pdf = PDF::loadView('absensi.print', ['absen'=> $data])->setPaper('f4', 'patroit');

        // return $pdf->stream();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->file('foto')->store('foto-absensi');
        $validatedData = $request->validate([
            'name' => 'required|max:50|unique:absens',
            'name_wali'  => 'required',
            'kelas' => 'required',
            'alamat' => 'required',
            'foto' => 'required|image|file|max:1024',
        ],[
            'name.required' => 'Nama santri wajib diisi !',
            'name.max' => 'Maksimal input 50 huruf !',
            'name.unique' => 'Nama santri sudah melakukan absen !',
            'name_wali.required' => 'Nama wali santri wajib diisi !',
            'kelas.required' => 'Jenjang wajib diisi !',
            'alamat.required' => 'Alamat wajib diisi !',
            'foto.required' => 'Foto wajib diisi !',
            'foto.image' => 'File harus berupa image JPG/PNG !',
            'foto.file' => 'Input harus berupa file !',
            'foto.max' => 'Ukuran file tidak boleh melebihi 1024 KB'
        ]);

        $validatedData['foto'] = $request->file('foto')->store('foto-absensi');
        // $validatedData['kelas'] = "default";

        Absen::create($validatedData);

        return redirect('/absen-success')->with('success','Data absensi sudah terkirim ! ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function show(Absen $absen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function edit(Absen $absen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Absen $absen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Absen $absensi)
    {

        Storage::delete($absensi->foto);
        $absensi->delete();
        return redirect('/absensi')->with('sukses', 'Data Absensi berhasil dihapus');
    }

    public function print()
    {
        // $data = Absen::all();
        // $pdf = PDF::loadView('perizinan.print.izin', ['data'=> $data])->setPaper('f4', 'patroit');

        // return $pdf->stream();

        echo "absen";
    }
}
