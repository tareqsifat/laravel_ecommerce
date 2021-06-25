<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\MainCategory;
use App\Models\Publication;
use App\Models\size;
use App\Models\SubCategory;
use App\Models\unit;
use App\Models\Writer;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::where('status',1)->get();
        $colors = Color::where('status',1)->get();
        $sizes = size::where('status',1)->get();
        $units = unit::where('status',1)->get();
        $writers = Writer::where('status',1)->get();
        $publications = Publication::where('status',1)->get();

        $maincategories = MainCategory::where('status',1)->get();
        $categories = Category::where('status',1)
                            ->where('main_category_id', MainCategory::where('status',1)->latest()->first()->id)->latest()->get();
        $sub_categories = SubCategory::where('status',1)
                            ->where('main_category_id', MainCategory::where('status',1)->latest()->first()->id)
                            ->whare('category_id', Category::where('status',1)
                            ->where('main_category_id', MainCategory::where('status',1)->latest()->first()->id)
                            ->latest()->first()->id)->latest()->get();
        return view('admin.Product.create', compact('brands','colors','sizes','units','writers',
                                                    'publications','maincategories','categories','sub_categ'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('admin.Product.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.product.view');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.product');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
