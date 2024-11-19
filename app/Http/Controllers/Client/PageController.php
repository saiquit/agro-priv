<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Event;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PageController extends Controller
{
    public function home()
    {
        $latestProducts = Product::latest()->take(6)->get();
        $latestEvents = Event::latest()->take(3)->get();
        $latestReviews = Review::latest()->take(3)->get();
        return view('client.home', compact('latestProducts', 'latestEvents', 'latestReviews'));
    }

    public function about()
    {
        return view('client.about');
    }

    public function events()
    {
        $events = Event::latest()->paginate(12);
        return view('client.events', compact('events'));
    }

    public function event(Event $event)
    {
        return view('client.event-single', compact('event'));
    }
    public function contact()
    {
        return view('client.contact');
    }

    public function category(Request $request, $slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('client.category', compact('category'));
    }
    public function products()
    {
        $categories = Category::with(['products' => function ($query) {
            $query->latest()->take(8);
        }])->whereHas('products')->get();
        return view('client.products', compact('categories'));
    }

    public function product(Request $request, $slug)
    {
        $product = Product::where('slug', $slug)->first();
        $relatedProducts = Product::where('category_id', $product->category_id)->where('id', '!=', $product->id)->latest()->take(3)->get();
        return view('client.product-single', compact('product', 'relatedProducts'));
    }

    public function setLocale(Request $request, $locale)
    {
        session()->put('locale', $locale);
        App::setlocale(session()->get('locale'));
        return redirect()->back();
    }

    public function termsConditios()
    {
        return view('client.terms-conditions');
    }
}
