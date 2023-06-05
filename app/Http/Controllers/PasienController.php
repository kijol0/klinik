<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.pendaftaran.index',[
            'pasien'=>Pasien::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pendaftaran.create');
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
            'alamat'=>'required|max:255',
            'telepon'=>'required',
            'tanggal_lahir',
        ]);
        
        Pasien::create($validateData);
        $request->session()->flash('success','data di tambahkan');

        return redirect('/dashboard/pendaftaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show(Pasien $pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit(Pasien $pasien)
    {
        return view('dashboard.pendaftaran.edit',[
            'pasien'=>$pasien,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pasien $pasien)
    {
        $rules =[
            'name'=>'required|max:255',
            'alamat'=>'required|max:255',
            'telepon'=>'required',
            'tanggal_lahir',
        ];
        $validateData=$request->validate($rules);
            Pasien::where('id',$pasien->id)
            ->update($validateData);
            return redirect('/dashboard/pendaftaran')->with('success','data pasien di ubah');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pasien $pasien)
    {
        Pasien::destroy($pasien->id);
        return redirect('/dashboard/Pendaftaran')->with('success','data di hapus');
    
    }
}
