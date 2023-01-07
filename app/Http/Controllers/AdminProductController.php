<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductFormRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        return view('admin.products', compact('products'));
    }

    //Mostrar a página de editar
    public function edit(Product $product)
    {
        return view('admin.product_edit', compact('product'));
    }

    //Recebe requisição de update
    public function update(StoreProductFormRequest $request, Product $product)
    {
        $input = $request->all();
        $input['slug'] = Str::slug($input['name']);
        
        if(isset($input['cover'])){
            $url = $product->cover;
            $url = explode('storage/', $url);
            
            if(count($url) > 1){
                if(Storage::exists($url[1]))
                    Storage::delete($url[1]);
            }

            $path = $request->cover->store('imagesProduct');
            $input['cover'] = url("storage/{$path}");
        }

        $product->update($input);
        return redirect()->route('admin.products');
    }

    //Mostrar a página de criar
    public function create()
    {
        return view('admin.product_create');
    }

    //Receber a requisição de criar
    public function store(StoreProductFormRequest $request)
    {
        $input = $request->all();
        $input['slug'] = Str::slug($input['name']);
        if(!isset($input['cover'])){
            $input['cover'] = 'https://dummyimage.com/800x500';
        }else{
            $path = $request->cover->store('imagesProduct');
            $input['cover'] = url("storage/{$path}");
        }
        Product::create($input);

        return redirect()->route('admin.products');
    }

    public function destroy(Product $product)
    {
        if(isset($product->cover)){
            $url = $product->cover;
            $url = explode('storage/', $url);
            if(count($url) > 1){
                if(Storage::exists($url[1])){
                    Storage::delete($url[1]);
                }
            }
        }
        
        $product->delete();
        return redirect()->back();
    }
}
