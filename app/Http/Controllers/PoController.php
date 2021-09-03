<?php

namespace App\Http\Controllers;

use App\Models\DetailPO;
use App\Models\Log;
use App\Models\Pembelian;
use App\Models\PO;
use  App\Models\Instansi;
use Carbon\Carbon;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PoController extends Controller
{
    //
    public function index()
    {
        $data_po_wh = PO::all()->where('status', '1');
        $data_po = PO::all();
        // dd($data_po_wh);
        return view('po\po', compact('data_po', 'data_po_wh'));
    }

    //
    public function addpo()
    {
        // $now = Carbon::now();
        // $thnBln = $now->year . $now->month;

        $kode = strtoupper(substr("NS", 0, 2));
        $check = count(PO::where('no_PO', 'like', "%$kode%")->get()->toArray());
        $angka = sprintf("%04d", (int)$check + 1);
        $noPO = $kode . "" . $angka;
        $data_instansi = Instansi::all();

        // $noPO = IdGenerator::generate(['table' => 'purchase_order', 'length' => 8, 'prefix' => date('ym')]);
        return view('po/addpo', compact('noPO',  'data_instansi'));
    }

    public function addpo2(Request $request)
    {
        $user = Auth::user();
        if($request->jenis_simpan == '1'){

    
        // $rules = [
        //     'TabelDinamis' => 'required'
        // ];

        // $messages = [
        //     'TabelDinamis.required' => '*Data tidak boleh kosong'
        // ];
        // $this->validate($request, $rules, $messages);

        $jumlah_data = count($request->noPO);
        for ($i = 0; $i < $jumlah_data; $i++) {
            DetailPO::create(
                [
                    'no_PO' => $request->noPO[$i],
                    'nama_barang' => $request->nama_barang[$i],
                    'jumlah' => $request->jumlah[$i],
                    'rate' => $request->rate[$i],
                    'amount' => $request->amount[$i],
                    'keterangan_barang' => $request->keterangan[$i],
                ]
            );
        }

        PO::create(
            [
                'no_PO' => $request->no_PO,
                'instansi' => $request->instansi,
                'tgl_pemasangan' => $request->tgl_transaksi,
                'pic_marketing' => $user->name,
                'status' => '1'
            ]
        );

        $user = Auth::user();
        Log::create(
            [
                'name' => $user->name,
                'email' => $user->email,
                'divisi' => $user->divisi,
                'deskripsi' => 'Create PO',
                'status' => '2',
                'ip' => $request->ip()

            ]
        );
    } elseif($request->jenis_simpan == '2'){
        $jumlah_data = count($request->noPO);
        for ($i = 0; $i < $jumlah_data; $i++) {
            DetailPO::create(
                [
                    'no_PO' => $request->noPO[$i],
                    'nama_barang' => $request->nama_barang[$i],
                    'jumlah' => $request->jumlah[$i],
                    'rate' => $request->rate[$i],
                    'amount' => $request->amount[$i],
                    'keterangan_barang' => $request->keterangan[$i],
                ]
            );
        }

        PO::create(
            [
                'no_PO' => $request->no_PO,
                'instansi' => $request->instansi,
                'tgl_pemasangan' => $request->tgl_transaksi,
                'pic_marketing' => $user->name
            ]
        );

        $user = Auth::user();
        Log::create(
            [
                'name' => $user->name,
                'email' => $user->email,
                'divisi' => $user->divisi,
                'deskripsi' => 'Create PO',
                'status' => '2',
                'ip' => $request->ip()

            ]
        );
    }

        return redirect('/po');
    }
    public function editpo(Request $request)
    {
        $rules = [
            'namaBarang' => 'required',
            'jumlah' => 'required',
        ];

        $messages = [
            'namaBarang.required' => '*Nama barang tidak boleh kosong',
            'jumlah.required' => '*Jumlah barang tidak boleh kosong',
        ];
        $this->validate($request, $rules, $messages);
        PO::where('id_PO', $request->edit_id_po)
            ->update([
                'namaBarang' => $request->namaBarang,
                'jumlah' => $request->jumlah,
                'keterangan' => $request->keterangan
            ]);

        $user = Auth::user();
        Log::create(
            [
                'name' => $user->name,
                'email' => $user->email,
                'divisi' => $user->divisi,
                'deskripsi' => 'Update PO',
                'status' => '2',
                'ip' => $request->ip()

            ]
        );
        return back()->with('success', "Data telah diperbarui");
    }
    public function confirm(Request $request)
    {
        // dd($request->non);
            $user = Auth::user();
            DetailPO::whereIn('id_po', $request->is_active)
            ->update(array(
                    'status'=> '2'
            ));  

            // DetailPO::whereIn('id_po', $request->non)
            // ->update(array(
            //         'status'=> '1'
            // ));  

            PO::where('no_PO', $request->no_PO)
            ->update(
                [
                'status'=> '2'
                ]
            );

            Log::create(
                [
                    'name' => $user->name,
                    'email' => $user->email,
                    'divisi' => $user->divisi,
                    'deskripsi' => 'Confirm PO',
                    'status' => '2',
                    'ip' => $request->ip()

                ]
            );
            return redirect('/po');
    }

    public function reject(Request $request)
    {
        $user = Auth::user();
        if ($user->divisi == "warehouse") {
            PO::where('id_PO', $request->edit_id_po)
                ->update([
                    'status' => '1',
                    'keterangan' => $request->keterangan,
                    'pic_warehouse' => $user->name
                ]);
            $user = Auth::user();
            Log::create(
                [
                    'name' => $user->name,
                    'email' => $user->email,
                    'divisi' => $user->divisi,
                    'deskripsi' => 'Reject PO',
                    'status' => '2',
                    'ip' => $request->ip()

                ]
            );
        } elseif ($user->divisi == "admin") {
            PO::where('id_PO', $request->edit_id_po)
                ->update([
                    'status' => '3',
                    'keterangan' => $request->keterangan,
                    'pic_warehouse' => $user->name
                ]);

            $user = Auth::user();
            Log::create(
                [
                    'name' => $user->name,
                    'email' => $user->email,
                    'divisi' => $user->divisi,
                    'deskripsi' => 'Reject PO',
                    'status' => '2',
                    'ip' => $request->ip()

                ]
            );
        }
        return back()->with('success', "Data telah ditolak");
    }

    public function detailpo($no_PO)
    {
        $data_detail = DetailPO::where('no_PO', $no_PO)->get();
        $data_po = PO::where('no_PO', $no_PO)->get();
        // dd($data_detail);
        $user = Auth::user();
        return view('po/detail', compact('data_po', 'data_detail', 'user'));
    }

    // public function insertCB(Request $request)
    // {
    //     $detail = new DetailPO();
    //     $detail->is_active = $request->has('is_active');

    //     return $detail;
    // }
}
