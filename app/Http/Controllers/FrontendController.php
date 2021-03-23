<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Slide;
use App\Blog;
use App\Method;
use App\Order;
use App\Menu;
use App\Image;
use App\Comment;
use App\Features;
use App\Commentblog;
use App\Order_detail;
use App\Cart;
use App\User;
use App\Storelocaltion;
use Illuminate\Support\Facades\Session;
use Auth;
use DB;

class FrontendController extends Controller
{
	public function blog()
	{

		$blog= Blog::where('status',1)->orderBy('id_blog', 'desc')->paginate(3, ['*'], 'paga');
		return view('website.blog',compact('blog'));

	}
	// ('new_product',1)
	public function index()
	{	$new= Product::where([
		    ['status', '=', '1'],
		    ['new_product', '=', '1'],
		])->get();
		$slide_all = Slide::where('status',1)->get();
		$menu = Menu::where('status',1)->get();
		$blog_all = Blog::where('status',1)->paginate(3, ['*'], 'paga');
		$product = Product::all();
		$sale  = Product::where([
		    ['status', '=', 1],	
		    ['sale_price','>',0],
		])->orderBy('created_at', 'desc')->paginate(8, ['*'], 'pag');

		return view('index',compact('product','new','sale','slide_all','blog_all','chitietsp'));
		
	}
   	public function about()
	{
		return view('website.AboutAs');
	}
	public function contact()
	{
		return view('website.contact');

	}
	public function login_error()
	{
		$code = request()->code;
		
		return view('website.login_error');

	}
	public function introduct()
	{
		return view('website.Introduce');

	}
	public function store()
	{
		$store = Storelocaltion::where('status',1)->get();
		// dd($store);
		return view('website.store',compact('store'));

	}
	public function shiping()
	{
		if(Auth::check()){
			$method = Method::where('status',1)->get();
	        $order1 = Order::where('id_user',Auth::user()->id)->where('status',1)->orderBy('created_at', 'desc')->get();
	        $order2 = Order::where('id_user',Auth::user()->id)->where('status',2)->orderBy('created_at', 'desc')->get();
	        $order0 = Order::where('id_user',Auth::user()->id)->where('status',0)->orderBy('created_at', 'desc')->get();
			return view('website.shiping',compact('method','order0','order2','order1'));
		}else{
			return redirect()->route('home');
		}
	}
	public function shiping_detail($id)
	{
		if(Auth::check()){
			$method = Method::all();
			$order = Order::where('id_user',Auth::user()->id)->find($id);
			//dd($order);
			return view('website.shiping_detail',compact('method','order'));
		}else{
			return redirect()->route('home');
		}
	}
	public function FAQ()
	{
		 $menu = Menu::where('status',1)->get();
		return view('website.FAQ',compact('menu'));

	}
	public function profile()
	{
		
		$user = User::all();
       	$user = User::where('id',Auth::user()->id)->first();
    
		return view('website.profile',['user'=>$user]);

	}
	public function list1($type)
	{
		$lsp = Product::where('status',1)->where('id_cate',$type)->paginate(6, ['*'], 'pagaf');
		$sp_khac = Product::where('status',1)->where('id_cate','<>',$type)->paginate(4, ['*'], 'pagfa');
		return view('website.list1',compact('lsp','sp_khac'));

	}
	public function list2($type)
	{	
		$lsp = Product::where([
		    ['status', '=', '1'],
		    ['sale_price', '<>', '0'],
		])->where('id_cate',$type)->paginate(6, ['*'], 'pagaf');

		$lspdb = Product::where('status',1)->where('id_cate',$type)->paginate(6, ['*'], 'pagaf');
		
		$sp_khac = Product::where([
		    ['status', '=', '1'],
		    ['sale_price', '<>', '0'],
		])->where('id_cate','<>',$type)->paginate(4, ['*'], 'pagfa');
		return view('website.list2',compact('lsp','sp_khac','lspdb'));

	}
	public function list3($type)
	{	
		
		$lspdb = Product::where('status',1)->orderBy('id_product', 'desc')->where('id_cate',$type)->paginate(6, ['*'], 'pagaf');
		$sp_khac = Product::where('status',1)->orderBy('id_product', 'desc')->where('id_cate','<>',$type)->paginate(4,['*'],'pagfa');
		return view('website.list3',compact('lspdb','sp_khac'));
	}
	public function login()
	{
		return view('website.login');

	}
	public function preview($id)
	{	
		$features = Features::where('status',1)->paginate(4, ['*'], 'pagfaa');;
		$comments = Comment::where('id_product',$id)->orderBy('com_id', 'desc')->get();
		// dd($comments);
		$pro = Product::find($id);
		$sanpham = Product::where('status','=',1)->where('id_cate','=',$pro->id_cate)->paginate(4, ['*'], 'pagab');
		// dd($sanpham);
		return view('website.preview',compact('pro','sanpham','comments','features'));

	}
	public function signup()
	{
		return view('website.signup');

	}
	
	public function ship()
	{
		 
		$method = Method::where('status',1)->get();
        $order = Order::all();
		return view('website.ship',compact('method','order'));

	}
	public function cart()
	{
		return view('website.cart');

	}
	public function blog_detail($id)
	{
		if(Auth::check()){
			$comment_user = Commentblog::where('id',Auth::user()->id)->first();
			 //dd($comment_user);

		}
		//dd(Auth::user()->id);
		$comments = Commentblog::where('id_blog',$id)->orderBy('com_blog_id', 'desc')->paginate(4, ['*'], 'pagab');
		// dd($comments->id);
		$blog_detail = Blog::find($id);
		 //dd($blog_detail->id_blog);
		$blog_detail_khac = Blog::where('status',1)->paginate(5, ['*'], 'paga');
		return view('website.blog_detail',compact('blog_detail','comments','blog_detail_khac','comment_user'));

	}
	public function cart_detail(Request $req,$id)
	{
		$product = Product::find($id);
        $cart = new Cart();
        $qtt = ($req->quantity) ? $req->quantity : 1;
        
        $cart->add($product, $qtt);
		return view('website.cart',compact('product','cart','qtt'));

	}
	public function search(Request $req)
	{
		
		$timkiem = Product::where('name','like','%'.$req->key.'%')
							->orwhere('price','like','%'.$req->key.'%')
							// ->orwhere('sale_price',$req->key)
							->paginate(12, ['*'], 'pag');
		return view('website.search',compact('timkiem'));
	}
	public function getAddtoCart2(Request $req,$id){
        $product = Product::find($id);
      
        $cart = new Cart();
        $qtt = ($req->quantity) ? $req->quantity : 1;
        
        // dd($qtt);
        $cart->add2($product, $qtt);
         
        return redirect()->back();
    }
	public function getAddtoCart(Request $req,$id){
        $product = Product::find($id);
        $cart = new Cart();
        $qtt = ($req->quantity) ? $req->quantity : 1;
        
        $cart->add($product, $qtt);
        if ($product->sale_price==0) {
        	$total = ($cart->items[$product->id_product]['quantity'])*$product->price;
        } else {
        	$total = ($cart->items[$product->id_product]['quantity'])*$product->sale_price;
        }

         //dd($total);
        return response($total, 200);
    }public function getAdd(Request $req,$id){
        $product = Product::find($id);
        $cart = new Cart();
        $qtt = ($req->quantity) ? $req->quantity : 1;
        
        $cart->add2($product, $qtt);

       
        return  redirect('ship');
    }

    public function getDeletetoCart(Request $req,$id){
        
        $cart = new Cart();
        $qtt = ($req->quantity) ? $req->quantity : 1;
        
        $cart->reduceByOne($id);
        return redirect()->back();
    }
    public function getDeletealltoCart(Request $req,$id){
        
        $cart = new Cart();
        $qtt = ($req->quantity) ? $req->quantity : 1;
        
        $cart->removeItem($id);
        return redirect()->back();
    }
    public function postComment(Request $request,$id){
    		Comment::create([
    			'com_content'=>$request->com_content,
    			'id_product'=>$request->id,
    			'id'=>Auth::user()->id,   			 
    		]);
    		 return redirect()->back();
    }
    public function postCommentblog(Request $request,$id){
    		Commentblog::create([
    			'com_blog_content'=>$request->com_blog_content,

    			'id_blog'=>$request->id,
    			'id'=>Auth::user()->id,
    			 
    		]);

    		 return redirect()->back();
    }

}
?>