<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\Type;

class ProductController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function test(Request $request)
    {
//        dd(Hash::make('admin123'));
        $categories = Category::all();
        return view('admin/test', compact('categories'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        /**
         * validate
         */
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'images' => 'required',
        ]);

        if ($request->hasFile('images'))
        {
            foreach ($request->file('images') as $image)
            {
                $name = $image->getClientOriginalName();
                $image->storeAs('images', $name, 'public');
                $data[] = $name;
            }
        }

        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->images = json_encode($data);
        $product->category_id = $request->input('category_id');
        $product->save();

        return redirect('/test')->with('message', 'Product has been created successfully');
    }

    public function showProduct()
    {
        $products = Product::with('category')->paginate(5);
        return view('/admin/product-list', compact('products'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function showProductImages($id)
    {

        $product = Product::where('id', $id)->first();

        $productImages = json_decode( $product->images );
//        dd($productImages);
        $imgCunt = count( json_decode( $product->images ) );

        return view('admin/show-product-images', compact('productImages', 'imgCunt', 'id'));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deletProduct($id)
    {
        $product = Product::where('id', $id)->first();
        $productImages = json_decode( $product->images );
        foreach ($productImages as $productImage)
        {
            Storage::delete('/public/images/'.$productImage);
        }
        $product->delete();

        return redirect()->route('show-product')
            ->with('success','Product deleted successfully');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function editProduct($id)
    {
        $product = Product::find($id);
        $categories = Category::all();

        return view('admin/edit-product',compact('product','categories'));
    }

    public function updateProduct(Request $request)
    {
        /**
         * validate
         */
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required|min:12',
            'images' => 'required',
        ]);
        /**
         * find prod by id
         */
        $product = Product::where('id', $request->id)->first();
        /**
         * delete images path
         */
        $productImages = json_decode( $product->images );
        foreach ($productImages as $productImage)
        {
            Storage::delete('/public/images/'.$productImage);
        }
        /**
         * move images in images folder
         */
        if ($request->hasFile('images'))
        {
            foreach ($request->file('images') as $image)
            {
                $name = time().$image->getClientOriginalName();
                $image->storeAs('images', $name, 'public');
                $data[] = $name;
            }
        }
        /**
         * update prod
         */
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->images = json_encode($data);
        $product->category_id = $request->category_id;
        $product->save();

        return redirect()->route('show-product')->with('success','Product has been updated successfully!');
    }

    /**
     * show categories
     */
    public function showCategoreies()
    {
        $categories = Category::paginate(4);
//        dd($categories);
        return view('admin/category-list', compact('categories'));
    }

    /**
     * create new category
     */
    public function createCategory(Request $request)
    {
        /**
         * validate
         */
        $request->validate([
            'name' => 'required',
        ]);


        $category = new Category();
        $category->name = $request->name;
        $category->save();

        return back()->with('message1', 'Category has been created successfully');
    }

    /**
     * delete Category
     */
    public function deletCategory($id)
    {
        $category = Category::where('id',$id)->first();
        $category->delete();

        return back()->with('success','category deleted successfully!');
    }

}
