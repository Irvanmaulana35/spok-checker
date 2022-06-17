<?php

namespace App\Http\Controllers;

use App\Models\Subjek;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjek = Subjek::all();
        return view('pages.subjek.index', compact('subjek'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.subjek.create');
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
            'kata_subjek' => 'required|string|max:155',

        ]);

        $subjek = Subjek::create([
            'kata_subjek' => $request->kata_subjek,
        ]);

        if ($subjek) {
            return redirect()
                ->route('subject.index')
                ->with([
                    'success' => 'Subjek berhasil di tambah'
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
        $subjek = Subjek::findOrFail($id);
        return view('pages.subjek.edit', compact('subjek'));
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
            'kata_subjek' => 'required|string|max:155|unique:subjeks',

        ]);

        $subjek = Subjek::findOrFail($id);

        $subjek->update([
            'kata_subjek' => $request->kata_subjek,

        ]);

        if ($subjek) {
            return redirect()
                ->route('subject.index')
                ->with([
                    'success' => 'Subjek berhasil di edit'
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
        $subjek = Subjek::findOrFail($id);
        $subjek->delete();

        if ($subjek) {
            return redirect()
                ->route('subject.index')
                ->with([
                    'success' => 'Subjek berhasil di hapus'
                ]);
        } else {
            return redirect()
                ->route('subject.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
