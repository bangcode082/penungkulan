<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
     $q = $request->get('q');
     $categories = Category::where('title', 'LIKE', '%'.$q.'%')->orderBy('title')->paginate(5);
     return view('auth.category.index', compact('categories', 'q'));
 }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.category.create');
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
            'title' => 'required|string|max:255|unique:categories',
            'parent_id' => 'exists:categories,id'
            ]);
        $categories=new Category;

        if ($request->parent_id=='') {
            $categories->parent_id=0;
        }else{
            $categories->parent_id=$request->parent_id;
        }
        $categories->title=$request->title;
        $categories->save();        

        // \Flash::success('Berhasil menambah kategori '.$request->get('title') );
        alert()->success('Berhasil Menambah Kategori', 'Kerja Bagus!');
        return redirect()->route('category-product.index');
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
        $category = Category::findOrFail($id);
        return view('auth.category.edit', compact('category'));
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
        $category = Category::findOrFail($id);
        $this->validate($request, [
            'title' => 'required|string|max:255|unique:categories,title,' . $category->id,
            'parent_id' => 'exists:categories,id'
            ]);

        if ($request->parent_id=='') {
            $category->parent_id=0;
        }else{
            $category->parent_id=$request->parent_id;
        }
        $category->title=$request->title;
        $category->update();       

        alert()->success('Kategori berhasil di edit', 'Kerja Bagus!');
        return redirect()->route('category-product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::find($id)->delete();
        alert()->success('Berhasil Menghapus Kategori', 'Terhapus!');
        return redirect()->route('category-product.index');
    }
}
