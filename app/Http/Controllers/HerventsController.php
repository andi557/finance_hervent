<?php

namespace App\Http\Controllers;

use App\Models\Hervent;
use Illuminate\Http\Request;
use PDF;

class HerventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $hervent = DB::table('hervents')->get();
        $hervent = Hervent::all();
        return view('hervent.index', compact('hervent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hervent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Hervent::create($request->all());
        return redirect('/hervent')->with('status', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hervent  $hervent
     * @return \Illuminate\Http\Response
     */
    public function show(Hervent $hervent)
    {
        return view('hervent.detail', compact('hervent'));
    }

    public function show2(Hervent $hervent)
    {
        return view('hervent.detail2', compact('hervent'));
    }

    public function invoice($id)
    {
        $hervent = Hervent::findOrFail($id);
        // dd($hervent);
        $pdf = PDF::loadview('hervent.printInvoice', ['hervent' => $hervent]);
        return $pdf->download('invoice.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hervent  $hervent
     * @return \Illuminate\Http\Response
     */
    public function edit(Hervent $hervent)
    {
        return view('hervent.edit', compact('hervent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hervent  $hervent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hervent $hervent)
    {

        Hervent::where('id', $hervent->id)
            ->update([
                'namacustomer' => $request->namacustomer,
                'namaproject' => $request->namaproject,
                'editcode' => $request->editcode,
                'tanggalbuat' => $request->tanggalbuat,
                'jatuhtempo' => $request->jatuhtempo,
                'metodebayar' => $request->metodebayar,
                'nomorfa' => $request->nomorfa,
                'item1' => $request->item1,
                'item2' => $request->item2,
                'item3' => $request->item3,
                'item4' => $request->item4,
                'item5' => $request->item5,
                'item6' => $request->item6,
                'item7' => $request->item7,
                'item8' => $request->item8,
                'item9' => $request->item9,
                'item10' => $request->item10,
                'harga1' => $request->harga1,
                'harga2' => $request->harga2,
                'harga3' => $request->harga3,
                'harga4' => $request->harga4,
                'harga5' => $request->harga5,
                'harga6' => $request->harga6,
                'harga7' => $request->harga7,
                'harga8' => $request->harga8,
                'harga9' => $request->harga9,
                'harga10' => $request->harga10,
                'amount1' => $request->amount1,
                'amount2' => $request->amount2,
                'amount3' => $request->amount3,
                'amount4' => $request->amount4,
                'amount5' => $request->amount5,
                'amount6' => $request->amount6,
                'amount7' => $request->amount7,
                'amount8' => $request->amount8,
                'amount9' => $request->amount9,
                'amount10' => $request->amount10,
                'qty1' => $request->qty1,
                'qty2' => $request->qty2,
                'qty3' => $request->qty3,
                'qty4' => $request->qty4,
                'qty5' => $request->qty5,
                'qty6' => $request->qty6,
                'qty7' => $request->qty7,
                'qty8' => $request->qty8,
                'qty9' => $request->qty9,
                'qty10' => $request->qty10,
                'total' => $request->total,
                'pelunasan' => $request->pelunasan,
                'downpayment' => $request->downpayment,
            ]);
        return redirect('/hervent')->with('status', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hervent  $hervent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hervent $hervent)
    {
        Hervent::destroy($hervent->id);
        return redirect('/hervent')->with('status', 'Data Berhasil Dihapus');
    }
}
