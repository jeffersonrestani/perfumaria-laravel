<?php

namespace App\Http\Controllers;

use App\Models\Perfume;
use Illuminate\Http\Request;

class PerfumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $perfumes = Perfume::with('brand')-> paginate(10);
        return view('perfume.index')->with('perfumes', $perfumes);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = BrandController::getBrands();
        return view('perfume.create')->with('brands', $brands);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);

        //$request->validate($this->getRules());

        $perfume = new Perfume();
        $perfume->name = $request->input('name');
        $perfume->fabrication = $request->input('fabrication');
        $perfume->brand_id = $request->input('brand');
        $perfume->save();
        return redirect (route('perfume.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $p = Perfume::find($id);
        if($p){
            return view ('perfume.show')->with ('perfume', $p);
        }else{
            return abort (404);
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
        $p = Perfume::find($id);

        //recuperar as marcas
        $brands = BrandController::getBrands();


        //.. return the view to edit the vehicle
        return view ('perfume.edit')
            -> with('perfume', $p)
            -> with('brands', $brands);
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
        $request -> validate($this->getRules());

        $p = Perfume::find($id);
        $p-> name = $request->input('name');
        $p-> fabrication = $request->input('fabrication');
        $p-> brand_id = $request->input('brand');

        $p-> save();

        return redirect (route('perfume.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p = Perfume::find($id);
        $p ->delete();
        return redirect(route('perfume.index'));
    }

    public function getRules(){
        $rules=[
            'name' => 'required|max:50',
            'fabrication' => 'required|numeric|digits:4',
        ];

        return $rules;
    }

    public function getRulesMessages(){
        $msg = [
            'name.*' => 'Digite um nome com até 50 caracteres',
            'fabrication.*' => 'Digite um ano com 4 dígitos',
        ];
        return $msg;
    }
}
