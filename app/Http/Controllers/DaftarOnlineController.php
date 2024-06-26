<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Models\Siswa;
use App\Models\User;

use App\Models\Biaya;
use App\Models\Biaya_awal_masuk;
use App\Models\Registrasi_online;

use DB;
use Carbon\Carbon;

use App\Models\Mst_kabupaten;
use App\Models\Mst_kecamatan;

class DaftarOnlineController extends Controller
{

    public function daftar_online(Request $request)
    {
        $jenjang =  DB::select('select
            `jenjang`
            FROM `jenjang` 
            ');
        $fasilitas =  DB::select('select
            `fasilitas`
            FROM `fasilitas` 
            ');
        $pendidikan =  DB::select('select
            `pendidikan`
            FROM `pendidikan` 
            ');
        $pekerjaan =  DB::select('select
            `pekerjaan`
            FROM `pekerjaan` 
            ');
        $mst_provinsi =  DB::select('select
            `provinsi`
            FROM `mst_provinsi` 
            ');

        return view('daftar_online.daftar_online',[
        	'jenjang' => $jenjang,
        	'fasilitas' => $fasilitas,
        	'mst_provinsi' => $mst_provinsi,
        	'pendidikan' => $pendidikan,
        	'pekerjaan' => $pekerjaan,
        ]);
    }

    public function data_online(Request $request)
    {
//input pendaftaran sebagai user dulu
        $user = new \App\Models\User;
        $user->role = 'siswa';
        $user->jenjang = $request->jenjang;
        $user->name = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        //$user->remember_token = str_random(60);
        $user->save();
    
//insert ke tabel siswa
        $request->request->add(['user_id' => $user->id ]);
        $siswa = \App\Models\Siswa::create($request->all());

        return redirect ('/login')->with('sukses', 'Data siswa berhasil di tambah');
    }

    public function profil_pendaftaran_online() 
    {
        $siswa = auth()->user()->siswa;
        $biaya_pendaftaran =  DB::select('select
            `uang_sebanyak`, `terbilang`
            FROM `biaya_pendaftaran` 
            WHERE `id`="1"
            ');

        return view('daftar_online.profil_pendaftar_online',[
            'siswa' => $siswa,
            'biaya_pendaftaran' => $biaya_pendaftaran
        ]);
    }

    public function edit($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $jenjang =  DB::select('select
            `jenjang`
            FROM `jenjang` 
            ');
        $fasilitas =  DB::select('select
            `fasilitas`
            FROM `fasilitas` 
            ');
        $pendidikan =  DB::select('select
            `pendidikan`
            FROM `pendidikan` 
            ');
        $pekerjaan =  DB::select('select
            `pekerjaan`
            FROM `pekerjaan` 
            ');
        $mst_provinsi =  DB::select('select
            `provinsi`
            FROM `mst_provinsi` 
            ');

        return view('daftar_online.edit', [
        	'siswa' => $siswa, 
        	'jenjang' => $jenjang,
        	'fasilitas' => $fasilitas,
        	'mst_provinsi' => $mst_provinsi,
        	'pendidikan' => $pendidikan,
        	'pekerjaan' => $pekerjaan,
        ]);
    }

    public function getMsKabupaten(Request $request){
        $kabupaten = Mst_kabupaten::where("provinsi_id",$request->kabID)
        ->pluck('kabupaten');
        return response()->json($kabupaten);
    }

    public function getMsKecamatan(Request $request){
        $kecamatan = Mst_kecamatan::where("kabupaten_id",$request->kecID)->pluck('kecamatan');
        return response()->json($kecamatan);
    }

    public function update(Request $request ,$id)
    {       
        $daftar_online = \App\Models\Siswa::find($id);
        $daftar_online->update($request->all());

        return redirect ('/profil_pendaftaran_online')->with('sukses', 'Data siswa berhasil di update');
    }


    public function editfoto($id)
    {
        $siswa = \App\Models\Siswa::find($id);

        return view('daftar_online.editfoto', ['siswa' => $siswa]);
    }

    public function updatefoto(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

//tambah foto
        if($request->hasFile('foto'))
        {
            $file_foto = time()."_".$request->file('foto')->getClientOriginalName();
            $request->file('foto')->move('images/',$file_foto);
            $siswa->foto = $file_foto;
            $siswa->save();
        }

        return redirect ('/profil_pendaftaran_online')->with('sukses', 'Data siswa  berhasil di update');
    }


    public function updatedetail(Request $request ,$id)
    {       
        $siswa = \App\Models\Siswa::find($id);
        $siswa->update($request->all());

        return redirect ('/profil_pendaftaran_online')->with('sukses', 'Data siswa  berhasil di update');
    }

//////////////////

    public function biayaawalmasuk($id)
    {


        $siswa = \App\Models\Siswa::find($id);
        $uang = DB::select('
            select `smpreg1`, `smpnonreg1`, `smpreg2`, `smpnonreg2`, 
            `mtsreg1`, `mtsnonreg1`, `mtsreg2`, `mtsnonreg2`,
            `smkreg1`, `smknonreg1`, `smkreg2`, `smknonreg2`,
            `mareg1`, `manonreg1`, `mareg2`, `manonreg2`
            FROM `biaya` 
            WHERE `id`="1"
            ');

        $biaya_awal_masuk = \App\Models\Biaya_awal_masuk::where('siswa_id',$id)->get();

        $price = DB::table('biaya_awal_masuk')
                        ->where('id', $siswa->id)
                        ->sum('biaya');

        return view('daftar_online.biayaawalmasuk', [
            'siswa' => $siswa,
            'uang' => $uang,
            'biaya_awal_masuk' => $biaya_awal_masuk,
            'price' => $price
        ]);
    }


    public function addbiaya(Request $request ,$idsiswa)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);
        $request->request->add(['siswa_id' => $siswa->id ]);
        $request->request->add(['jalurpendaftaran' => $siswa->jalurpendaftaran ]);
        $request->request->add(['jenjang' => $siswa->jenjang ]);
        $request->request->add(['nama' => $siswa->nama ]);
        $request->request->add(['fasilitas' => $siswa->fasilitas ]);
        $request->request->add(['jeniskelamin' => $siswa->jeniskelamin ]);

        $biaya_awal_masuk = \App\Models\Biaya_awal_masuk::create($request->all());

//tambah upload
        if($request->hasFile('upload'))
        {
            $file_upload = time()."_".$request->file('upload')->getClientOriginalName();
            $request->file('upload')->move('images/',$file_upload);
            $biaya_awal_masuk->upload = $file_upload;
            $biaya_awal_masuk->save();
        }

        return redirect('daftar_online/'.$idsiswa.'/biayaawalmasuk')->with('sukses', 'Data Biaya Awal Masuk berhasil di tambah');
    }


        public function deleteregistrasi($idsiswa,$idbiaya)
    {
        $biaya_awal_masuk = \App\Models\Biaya_awal_masuk::find($idbiaya);
        $biaya_awal_masuk->delete($biaya_awal_masuk);

        return redirect('daftar_online/'.$idsiswa.'/biayaawalmasuk')->with('sukses', 'Data Biaya Awal Masuk berhasil dihapus');
    }

    public function printregistrasi($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $data_siswa = \App\Models\Biaya_awal_masuk::where('siswa_id',$id)->get();

        return view('daftar_online.printregistrasi', [
            'siswa' => $siswa, 
            'data_siswa' => $data_siswa
        ]);
    }


//////////////////////////////////////////////////////////


    public function addregistrasi_online(Request $request ,$idsiswa)
    {
        $siswa = \App\Models\Siswa::find($idsiswa);
        $request->request->add(['siswa_id' => $siswa->id ]);
        $request->request->add(['jalurpendaftaran' => $siswa->jalurpendaftaran ]);
        $request->request->add(['jenjang' => $siswa->jenjang ]);
        $request->request->add(['nama' => $siswa->nama ]);
        $request->request->add(['fasilitas' => $siswa->fasilitas ]);
        $request->request->add(['jeniskelamin' => $siswa->jeniskelamin ]);

        $registrasi_online = \App\Models\Registrasi_online::create($request->all());

//tambah registrasi_online
        if($request->hasFile('registrasi_online'))
        {
            $file_upload = time()."_".$request->file('registrasi_online')->getClientOriginalName();
            $request->file('registrasi_online')->move('images/',$file_upload);
            $registrasi_online->registrasi_online = $file_upload;
            $registrasi_online->save();
        }

        return redirect('/daftar_online/'.$idsiswa.'/printregistrasi_online')->with('sukses', 'Data Registrasi berhasil di tambah');
    }


    public function printregistrasi_online($id)
    {
        $siswa = \App\Models\Siswa::find($id);
        $data_siswa = \App\Models\Siswa::where('nama')->get();

        $siswa->tanggal_masuk = Carbon::now()->isoFormat('D MMMM Y');
        $biayas = \App\Models\Biaya_pendaftaran::all(); 

        return view('daftar.printslipregistrasi', [
            'siswa' => $siswa, 
            'data_siswa' => $data_siswa,
            'biayas' => $biayas
        ]);
    }


}
