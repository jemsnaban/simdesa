<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Agama;
use App\Pendidikan;
use App\Pekerjaan;
use App\Kawin;
use App\Hubungan;
use App\Cacat;
use App\CaraKb;
use App\Status;
use App\Penduduk;

class PendudukController extends Controller
{
    public function index()
    {
      $penduduks = DB::table('penduduks AS a')
            ->leftJoin('agamas AS b', 'b.id', '=', 'a.agama')
            ->leftJoin('pendidikans AS c', 'c.id', '=', 'a.pendidikan')
            ->leftJoin('pekerjaans AS d', 'd.id', '=', 'a.pekerjaan')
            ->leftJoin('kawins AS e', 'e.id', '=', 'a.status_kawin')
            ->leftJoin('hubungans AS f', 'f.id', '=', 'a.hubungan')
            ->leftJoin('cacats AS g', 'g.id', '=', 'a.cacat')
            ->leftJoin('cara_kbs AS h', 'h.id', '=', 'a.cara_kb')
            ->leftJoin('statuses AS i', 'i.id', '=', 'a.status')
            ->select('a.*', 'b.nama AS agama', 'c.nama as pendidikan', 'd.nama as pekerjaan',
            'e.nama as status_kawin', 'f.nama as hubungan', 'g.nama as cacat', 'h.nama as cara_kb', 'i.nama as status')
            ->get();

      //dd($penduduks);

      return view('penduduk.index_penduduk')->with(compact('penduduks'));
    }

    public function create()
    {
      $agamas = Agama::all();
      $pendidikans = Pendidikan::all();
      $pekerjaans = Pekerjaan::all();
      $kawins = Kawin::all();
      $hubungans = Hubungan::all();
      $cacats = Cacat::all();
      $kbs = CaraKb::all();
      $statuses = Status::all();

      return view('penduduk.create_penduduk')
              ->with(
                compact('agamas', 'pendidikans', 'pekerjaans', 'kawins', 'hubungans', 'cacats', 'kbs', 'statuses')
              );
    }

    public function store(Request $request)
    {
      Penduduk::create($request->all());

      return redirect('/penduduk/list');
    }

    public function edit($id)
    {
      $penduduk = DB::table('penduduks AS a')
            ->leftJoin('agamas AS b', 'b.id', '=', 'a.agama')
            ->leftJoin('pendidikans AS c', 'c.id', '=', 'a.pendidikan')
            ->leftJoin('pekerjaans AS d', 'd.id', '=', 'a.pekerjaan')
            ->leftJoin('kawins AS e', 'e.id', '=', 'a.status_kawin')
            ->leftJoin('hubungans AS f', 'f.id', '=', 'a.hubungan')
            ->leftJoin('cacats AS g', 'g.id', '=', 'a.cacat')
            ->leftJoin('cara_kbs AS h', 'h.id', '=', 'a.cara_kb')
            ->leftJoin('statuses AS i', 'i.id', '=', 'a.status')
            ->select('a.*', 'b.id AS agama', 'c.id as pendidikan', 'd.id as pekerjaan',
            'e.id as status_kawin', 'f.id as hubungan', 'g.id as cacat', 'h.id as cara_kb', 'i.id as status')
            ->where('a.id', '=', $id)
            ->get()->first();

        $agamas = Agama::all();
        $pendidikans = Pendidikan::all();
        $pekerjaans = Pekerjaan::all();
        $kawins = Kawin::all();
        $hubungans = Hubungan::all();
        $cacats = Cacat::all();
        $kbs = CaraKb::all();
        $statuses = Status::all();

      //dd($penduduk);

      return view('penduduk.edit_penduduk')->with(compact('penduduk', 'agamas', 'pendidikans', 'pekerjaans', 'kawins', 'hubungans', 'cacats', 'kbs', 'statuses'));
    }

    public function update(Request $request, $id)
    {
      //dd($request->all());
      $penduduk = Penduduk::findOrFail($id);
      $penduduk->update($request->all());

      return redirect('/penduduk/list');
    }

    public function namaAutoComplete(Request $request) {
        $query = $request->get('term','');

        $penduduks = Penduduk::where('nama','LIKE','%'.$query.'%')->get();

        $data=array();
        foreach ($penduduks as $penduduk) {
              $data[]=array('value' => $penduduk->nama." - ".$penduduk->nik , 'id' => $penduduk->id);
        }
        if(count($data))
             return $data;
        else
            return ['value'=>'No Result Found','id'=>''];
    }

    public function nikAutoComplete(Request $request) {
        $query = $request->get('term','');

        $penduduks = Penduduk::where('nik','LIKE','%'.$query.'%')->get();

        $data=array();
        foreach ($penduduks as $penduduk) {
              $data[]=array('value' => $penduduk->nik . " - " . $penduduk->nama , 'nik' => $penduduk->nik , 'id' => $penduduk->id);
        }
        if(count($data))
             return $data;
        else
            return ['value'=>'No Result Found','id'=>'', 'nik' => ''];
    }
}
