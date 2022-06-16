<?php

namespace App\Http\Controllers;

use App\Models\Predikat;
use Illuminate\Http\Request;

class PredikatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $predikat = Predikat::all();
        return view('pages.predikat.index', compact('predikat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.predikat.create') ;
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
            'kata_predikat' => 'required|string|max:155',

        ]);

        $predikat = Predikat::create([
            'kata_predikat' => $request->kata_predikat,
        ]);

        if ($predikat) {
            return redirect()
                ->route('predikat.index')
                ->with([
                    'success' => 'kata predikat berhasil di tambah'
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $predikat = Predikat::findOrFail($id);
        return view('pages.predikat.edit', compact('predikat'));
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
            'kata_predikat' => 'required|string|max:155',

        ]);

        $predikat = Predikat::create([
            'kata_predikat' => $request->kata_predikat,
        ]);

        $predikat = Predikat::findOrFail($id);

        $predikat->update([
            'kata_predikat' => $request->kata_predikat,

        ]);

        if ($predikat) {
            return redirect()
                ->route('predikat.index')
                ->with([
                    'success' => 'kata predikat berhasil di edit'
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
        $predikat = Predikat::findOrFail($id);
        $predikat->delete();

        if ($predikat) {
            return redirect()
                ->route('predikat.index')
                ->with([
                    'success' => 'kata predikat berhasil di hapus'
                ]);
        } else {
            return redirect()
                ->route('predikat.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
