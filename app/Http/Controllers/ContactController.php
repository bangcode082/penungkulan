<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {   
        $contact=Contact::first();
        return view('auth.contact.index',compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.contact.create');
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
            'address' => 'required',
            'phonenumber' => 'required'
            ]);
        $contact=new Contact;
       
        $contact->address=$request->address;
        $contact->phonenumber=$request->phonenumber;
        $contact->save();        

        // \Flash::success('Berhasil menambah kategori '.$request->get('title') );
        alert()->success('Berhasil Membuat Kontak', 'Kerja Bagus!');
        return redirect()->route('contact-product.index');
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
        $contact=Contact::findOrFail($id);
        return view('auth.contact.edit',compact('contact'));
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
        $contact = Contact::findOrFail($id);
        $this->validate($request, [
            'address' => 'required',
            'phonenumber' => 'required'
            ]);
       
        $contact->address=$request->address;
        $contact->phonenumber=$request->phonenumber;
        $contact->update();       

        alert()->success('Kontak berhasil di edit', 'Kerja Bagus!');
        return redirect()->route('contact-product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contact::find($id)->delete();
        alert()->success('Berhasil Menghapus Kontak', 'Terhapus!');
        return redirect()->route('contact-product.index');
    }
}
