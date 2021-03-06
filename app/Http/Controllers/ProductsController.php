<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use File;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $q = $request->get('q');
        $products = Product::where('name', 'LIKE', '%'.$q.'%')->orderBy('id','desc')->paginate(5);
        // $products = Product::paginate(10);

        return view('auth.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.product.create');
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
            'name' => 'required|unique:products',
            'category_lists' => 'required',
            'photo' => 'max:10240',
            'description' => 'required',
            'price' => 'required|numeric|min:1000',
            'status'=>'required'
            ]);
        $data = $request->only('name', 'photo', 'description','price');
        if ($request->hasFile('photo')) {
            $data['photo'] = $this->savePhoto($request->file('photo'));
        }
        $data['category_id']=$request->category_lists;
        $data['status']=$request->status;
        $product = Product::create($data);
        
        alert()->success('Berhasil Menambah Produk', 'Kerja Bagus!');
        return redirect()->route('product.index');
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
        $product = Product::findOrFail($id);
        return view('auth.product.edit', compact('product'));
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
        $product = Product::findOrFail($id);
        $this->validate($request, [
            'name' => 'required|unique:products,name,'. $product->id,
            'category_lists'=>'required',
            'description' => 'required',
            'photo' => 'max:10240',
            'price' => 'required|numeric|min:1000',
            'status'=>'required'
            ]);
        $data = $request->only('name', 'description', 'price');
        if ($request->hasFile('photo')) {
            $data['photo'] = $this->savePhoto($request->file('photo'));
            if ($product->photo !== '') $this->deletePhoto($product->photo);
        }
        $data['category_id']=$request->category_lists;
        $data['status']=$request->status;
        $product->update($data);

        alert()->success('Produk berhasil di edit', 'Kerja Bagus!');
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if ($product->photo !== '') $this->deletePhoto($product->photo);
        $product->delete();
        alert()->success('Berhasil Menghapus Produk', 'Terhapus!');
        return redirect()->route('product.index');
    }

    //function tambahan
    protected function savePhoto(UploadedFile $photo)
    {
        $fileName = str_random(40) . '.' . $photo->guessClientExtension();
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
        $photo->move($destinationPath, $fileName);
        return $fileName;
    }

    public function deletePhoto($filename)
    {
        $path = public_path() . DIRECTORY_SEPARATOR . 'img'. DIRECTORY_SEPARATOR . $filename;
        return File::delete($path);
    }

    public function banner(Request $request)
    {
        $q = $request->get('q');
        $products = Product::where([['name', 'LIKE', '%'.$q.'%'],['status','banner']])->orderBy('name')->paginate(10);
        // $products = Product::paginate(10);

        return view('auth.banner.index', compact('products'));
    }

}
