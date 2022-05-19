<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SparepartInputRequest;
use App\Models\Sparepart;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SparepartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spareparts = Sparepart::all();
        return view('pages.sparepart.sparepart',[
            'spareparts' => $spareparts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.sparepart.creaet-sparepart');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SparepartInputRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name_sparepart);
        $data['foto_sparepart'] = $request->file('foto_sparepart')->store('assets/foto_sparepart','public');
        Sparepart::create($data);
        return redirect()->route('sparepart.index')->with('status','Berhasil Menambahkan Sparepart');
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
