<?php

namespace App\Http\Controllers;

use App\Models\Wilayah;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.wilayah.index',[
            'wilayah'=>Wilayah::all()
        ]);
        // [
        //     "wilayah"=>Wilayah::latest()->paginate(4)
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.wilayah.create');
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
        ]);
        
        Wilayah::create($validateData);
        $request->session()->flash('success','data di tambahkan');

        return redirect('/dashboard/wilayah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wilayah  $wilayah
     * @return \Illuminate\Http\Response
     */
    public function show(Wilayah $wilayah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wilayah  $wilayah
     * @return \Illuminate\Http\Response
     */
    public function edit(Wilayah $wilayah)
    {
        return view('dashboard.wilayah.edit',[
            'wilayah'=>$wilayah,
            

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wilayah  $wilayah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wilayah $wilayah)
    {
        $rules =[
            'name'=>'required',
        ];
        $validateData=$request->validate($rules);
            Wilayah::where('id',$wilayah->id)
            ->update($validateData);
            return redirect('/dashboard/wilayah')->with('success','data di ubah');
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wilayah  $wilayah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wilayah $wilayah)
    {
        Wilayah::destroy($wilayah->id);
        return redirect('/dashboard/wilayah')->with('success','data di hapus');
    
    }
}
