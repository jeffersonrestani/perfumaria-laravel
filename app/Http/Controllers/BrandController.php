<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $brands = Brand::all();
        //$brands = Brand::with('brand')-> paginate(10);
        return view('brand.index')->with('brands', $brands);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brand = new Brand();
        $brand->name = $request->input('name');
        $brand->description = $request->input('description');
        $brand->save();

        $brands = Brand::all();
        return view('brand.index')->with('brands', $brands)->with('msg', 'Marca cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brand = Brand::find($id);
        if ($brand) {
            return view('brand.show')->with('brand', $brand);
        } else {
            //..senão, retorna a view com uma mensagem que será exibida.
            return view('brand.show')->with('msg', 'Marca não encontrado!');
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
        $brand = Brand::find($id);
        if ($brand) {
            return view('brand.edit')->with('brand', $brand);
        } else {
            //..senão, retorna a view de edição com uma mensagem que será exibida.
            $brands = Brand::all();
            return view('brand.index')->with('brands', $brands)->with('msg', 'Marca não encontrado!');
        }
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
        $brand = Brand::find($id);
        //..atualiza os atributos do objeto recuperado com os dados do objeto Request
        $brand->name = $request->input('name');
        $brand->description = $request->input('description');
        $brand->save();
        //..retorna a view index com uma mensagem
        $brands = Brand::all();
        return view('brand.index')->with('brands', $brands)->with('msg', 'Marca atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::find($id);
        //..exclui o recurso
        $brand->delete();
        //..retorna à view index.
        $brands = Brand::all();
        return view('brand.index')->with('brands', $brands)->with('msg', "Marca excluído com sucesso!");
    }

    public static function getBrands(){
        $brands = Brand::all();
        return $brands;
    }
}
