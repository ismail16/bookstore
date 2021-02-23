<?php

namespace App\Http\Controllers\frontend;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Author;
use App\Models\Publisher;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Subscription;
use App\Models\Slider;
use App\Models\ProductReview;
use App\Models\About;
use App\Models\Setting;

use App\Models\TermsCondition;
use App\Models\ReturnReplacement;
use App\Models\PrivacyPolicy;

use Session;

class PagesController extends Controller
{

    public function index()
    {
        $products = Product::all();
        $orders = Order::orderBy('id', 'desc')->get();
        $sliders = Slider::orderBy('id', 'desc')->where('status',1)->get();
        return view('frontend.pages.index',compact('products','orders','sliders'));
    }

    public function author()
    {
        $authors = Author::orderBy('id', 'desc')->where('status',1)->paginate(10);
        return view('frontend.pages.authors',compact('authors'));
    }

    public function categories()
    {
        $categories = Category::orderBy('id', 'desc')->where('status',1)->paginate(10);
        return view('frontend.pages.categories',compact('categories'));
    }

    public function publisher()
    {
        $publishers = Publisher::orderBy('id', 'desc')->where('status',1)->paginate(10);
        return view('frontend.pages.publishers',compact('publishers'));
    }

    public function products()
    {
        $products = Product::paginate(4);
        $categories = Product::all();
        $sliders = Slider::orderBy('id', 'desc')->get();
        return view('frontend.pages.products',compact('products','categories','sliders'));
    }

    public function single_product($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $product_id = $product->id;
        $productImage = ProductImage::where('product_id',$product_id)->get();
        $product_reviews = ProductReview::where('product_id',$product_id)->get();
        return view('frontend.pages.single_product',compact('product','productImage','product_reviews'));
    } 

    public function category($cat_id)
    {
        $products = Product::where('category_id', $cat_id)->paginate(4);
        return view('frontend.pages.category',compact('products'));
    }

    public function sub_category($sub_slug, $sub_cat_slug)
    {
        $subcategory = Subcategory::where('slug', $sub_cat_slug)->first();
        $products = Product::where('sub_category_id', $subcategory->id)->paginate(4);
        return view('frontend.pages.sub_category',compact('products'));
    }

    public function search(Request $request)
    {

        $subject = $request->subject;
        $keyword = $request['query'];

        if ($subject == 'books') {
            $products = Product::orderByDesc('id')
                ->Where('title', 'LIKE', '%' . $keyword . '%')
                ->Where([
                    ['status',1]
                ])
                ->paginate(5);
            return view('frontend.pages.search_product',compact('products'));

        }elseif ($subject == 'authors') {
            $authors = Author::orderByDesc('id')
                ->Where(function ($query) use ($keyword) {
                    $query->where('name', 'LIKE', '%' . $keyword . '%')
                            ->orWhere('address', 'LIKE', '%' . $keyword . '%');
                    })
                ->Where([
                    ['status',1]
                ])
                ->paginate(5);
            $authors->appends ( array (
                'name' => $keyword
            ));
            return view('frontend.pages.search_authors',compact('authors'));

        }elseif ($subject == 'publisher') {
            $Publishers = Publisher::orderByDesc('id')
                ->Where(function ($query) use ($keyword) {
                    $query->where('name', 'LIKE', '%' . $keyword . '%')
                            ->orWhere('address', 'LIKE', '%' . $keyword . '%');
                    })
                ->Where([
                    ['status',1]
                ])
                ->paginate(5);
            $Publishers->appends ( array (
                'name' => $keyword
            ));
            return view('frontend.pages.search_publisher',compact('Publishers'));

        }else{
            $products = Product::orderByDesc('id')
                ->Where(function ($query) use ($keyword) {
                    $query->where('title', 'LIKE', '%' . $keyword . '%')
                            ->orWhere('price', 'LIKE', '%' . $keyword . '%');
                    })
                ->Where([
                    ['status',1]
                ])
                ->paginate(5);

            $products->appends ( array (
                'title' => $keyword
            ));
            return view('frontend.pages.search_product',compact('products'));
        }


    }


    public function contact()
    {
        $setting = Setting::first();
        return view('frontend.pages.contact',compact('setting'));
    }

    public function about()
    {
        $abouts = About::all();
        return view('frontend.pages.about', compact('abouts'));
    }

    public function faq()
    {
        return view('frontend.pages.faq');
    }

    public function terms_conditions()
    {
        $terms_conditions = TermsCondition::all();
        return view('frontend.pages.terms_conditions',compact('terms_conditions'));
    } 

    public function privacy_policy()
    {
        $privacy_policies = PrivacyPolicy::all();
        return view('frontend.pages.privacy_policy',compact('privacy_policies'));
    }

    public function returns_replacement()
    {
        $return_replacements = ReturnReplacement::all();
        return view('frontend.pages.returns_replacement',compact('return_replacements'));
    }

    public function subscribtion(Request $request)
    {

        $subscription = new Subscription;
        $subscription->ip = $request->ip_address;
        $subscription->email = $request->email;

        try {
            $subscription->save();
            return response()->json(['success' => 'Subscribe Successfully !!'], 200);
        } catch (Exception $e) {
            return response()->json(['error' => $e], 404);
        }

        
        
    }

    public function product_review_post(Request $request)
    {

        $ProductReview = new ProductReview;
        $ProductReview->product_id = $request->product_id;
        $ProductReview->rating = $request->rating;
        $ProductReview->name = $request->name;
        $ProductReview->email = $request->email;
        $ProductReview->review = $request->review;
        $ProductReview->status = 0;

        $ProductReview->save();
        Session::flash('message', 'Thank You For Rating!');
        return back();        
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
