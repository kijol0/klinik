<?php

namespace App\Http\Controllers;

use App\Models\Tindakan;
use Illuminate\Http\Request;

class TindakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.tindakan.index',[
            'tindakan'=>Tindakan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tindakan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name'=>'required|max:255',
            'harga'=>'required',
        ]);
        
        Tindakan::create($validateData);
        $request->session()->flash('success','data di tambahkan');

        return redirect('/dashboard/tindakan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tindakan  $tindakan
     * @return \Illuminate\Http\Response
     */
    public function show(Tindakan $tindakan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tindakan  $tindakan
     * @return \Illuminate\Http\Response
     */
    public function edit(Tindakan $tindakan)
    {
        return view('dashboard.tindakan.edit',[
            'tindakan'=>$tindakan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tindakan  $tindakan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tindakan $tindakan)
    {
        $rules =[
            'name'=>'required',
            'harga'=>'required',
        ];
        $validateData=$request->validate($rules);
            Tindakan::where('id',$tindakan->id)
            ->update($validateData);
            return redirect('/dashboard/tindakan')->with('success','data di ubah');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tindakan  $tindakan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tindakan $tindakan)
    {
        Tindakan::destroy($tindakan->id);
        return redirect('/dashboard/tindakan')->with('success','data di hapus');
    
    }
}
