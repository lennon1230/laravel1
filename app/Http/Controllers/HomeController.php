<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::where('name', 'LIKE', "%{$request->search}%")
                    ->paginate(12);
        
        //Mesma coisa
        /* $products = Product::query();
        $products->when($request->search, function($query, $value){
            $query->where('name', 'LIKE', "%{$value}%");
        });
        $products = $products->paginate(12); */

        return view('home', compact('products'));
    }

    private function getUsers(string | null $search = '')
    {
        //this faz referência a variável model em UserController
        //with('comments') é para fazer apenas uma consulta no BD
        //para trazer o número de comentários por usuário. Sem ele,
        //para cada usuário, seria feito uma consulta, resultando em
        //muitas consultas no BD.
        $users = $this->where(function($query) use ($search) {
            if($search){
                $query->where('email', 'LIKE', "%{$search}%");
                $query->orWhere('name', 'LIKE', "%{$search}%");
            }
        })
        ->with('comments')
        ->paginate(15)->appends([
            'search' => request()->get('search', '')
        ]);

        return $users;
    }
}
