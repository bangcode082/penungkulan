<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Contact;
use App\Message;
use Illuminate\Support\Facades\Session;

class CatalogsController extends Controller
{	
	public function index(Request $request){

		$q = $request->get('q');
		if ($request->has('cat')) {
			$cat = $request->get('cat');
			$ctgry = Category::findOrFail($cat);

			$products = Product::where([['category_id', $ctgry->id],['name', 'LIKE', '%'.$q.'%'],['status','!=','nonactive']])->orderBy('id','desc')->paginate(12);
			
		} else {
			$cat=null;
			$ctgry=null;
			$products=Product::where([['name', 'LIKE', '%'.$q.'%'],['status','!=','nonactive']])->orderBy('id','desc')->paginate(12);
			
		}
		
		

		$contact=Contact::first();
		$banner1=Product::where('status','banner')->orderBy('id','desc')->first();
		$banner=Product::where([['status','banner'],['id','!=', $banner1->id]])->orderBy('id','desc')->get();
		// if($banner->count() == 0){
		// 	$banner=null;
		// }


		return view('client.index',compact('products','ctgry','banner','banner1','q','cat','contact'));
		
	}

	public function detail($id){
		$product=Product::findOrFail($id);
		$contact=Contact::first();
		return view('client.detail',compact('product','contact'));
	}

	public function message(Request $request){
		$this->validate($request, [
			'sender' => 'required',
			'email' => 'required',
			'message' => 'required'
			]);
		$message=new Message;

		$message->sender=$request->sender;
		$message->email=$request->email;
		$message->message=$request->message;
		$message->save();        

        // \Flash::success('Berhasil menambah kategori '.$request->get('title') );
		Session::flash("flash_notification", [
			"level"=>"success",
			"message"=>"Berhasil Mengirim Pesan, Tunggu balasan melalui email"
			]);
		return redirect('/');
	}
}
