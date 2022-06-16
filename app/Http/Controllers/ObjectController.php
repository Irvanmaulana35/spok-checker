<?php

namespace App\Http\Controllers;

use App\Models\Objek;
use Illuminate\Http\Request;

class ObjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objek = Objek::all();
        return view('pages.objek.index', compact('objek'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.objek.create') ;
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
            'kata_objek' => 'required|string|max:155',

        ]);

        $objek = Objek::create([
            'kata_objek' => $request->kata_objek,
        ]);

        if ($objek) {
            return redirect()
                ->route('objek.index')
                ->with([
                    'success' => 'kata objek berhasil di tambah'
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
        $objek = Objek::findOrFail($id);
        return view('pages.objek.edit', compact('objek'));
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
            'kata_objek' => 'required|string|max:155',

        ]);

        $objek = Objek::findOrFail($id);

        $objek->update([
            'kata_objek' => $request->kata_objek,

        ]);

        if ($objek) {
            return redirect()
                ->route('objek.index')
                ->with([
                    'success' => 'kata objek berhasil di edit'
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
        $objek = Objek::findOrFail($id);
        $objek->delete();

        if ($objek) {
            return redirect()
                ->route('objek.index')
                ->with([
                    'success' => 'kata objek berhasil di hapus'
                ]);
        } else {
            return redirect()
                ->route('objek.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
