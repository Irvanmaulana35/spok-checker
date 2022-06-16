<?php

namespace App\Http\Controllers;

use App\Models\Keterangan;
use Illuminate\Http\Request;

class KeteranganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keterangan = Keterangan::all();
        return view('pages.keterangan.index', compact('keterangan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.keterangan.create') ;
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
            'kata_keterangan' => 'required|string|max:155',

        ]);

        if ($keterangan) {
            return redirect()
                ->route('keterangan.index')
                ->with([
                    'success' => 'kata keterangan berhasil di tambah'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Error, please try again'
                ]);
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $keterangan = Keterangan::findOrFail($id);
        return view('pages.keterangan.edit', compact('keterangan'));
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
            'kata_keterangan' => 'required|string|max:155',

        ]);

        $keterangan = Keterangan::create([
            'kata_keterangan' => $request->kata_keterangan,
        ]);

        $keterangan = Keterangan::findOrFail($id);

        $keterangan->update([
            'kata_keterangan' => $request->kata_keterangan,

        ]);

        if ($keterangan) {
            return redirect()
                ->route('keterangan.index')
                ->with([
                    'success' => 'kata keterangan berhasil di edit'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Error, please try again'
                ]);
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
        $keterangan = Keterangan::findOrFail($id);
        $keterangan->delete();

        if ($keterangan) {
            return redirect()
                ->route('keterangan.index')
                ->with([
                    'success' => 'kata keterangan berhasil di hapus'
                ]);
        } else {
            return redirect()
                ->route('keterangan.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
