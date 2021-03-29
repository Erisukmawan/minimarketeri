<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Pembelian;
use App\Pemasok;
Use App\Barang;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lastId = Pembelian::orderBy('created_at','desc')->first();
         $data['kode']= sprintf('P%06d',substr($lastId,1)+1);
         $data['pemasok']= Pemasok::get();
         $data['barang'] = Barang::get();
        return view('transaksi_pembelian/index')->with($data);
    }
    public function kodePembelian()
    {
        $dataPembelian = DB::table('pembelian')->orderBy('id')->get('kode_masuk');
        foreach ($dataPembelian as $key => $value) {
            $kodeBaru = $value->kode_masuk;
        }
        $noUrut = (int) substr($kodeBaru, 3, 5);
        $noUrut++;
        $char = "P-";
        $urut = $char.sprintf("%05s", $noUrut);
        return $urut;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kodePembelian = $this->kodePembelian();
        return view('transaksi_pembelian.index', [
            'kodePembelian' => $kodePembelian
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
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
