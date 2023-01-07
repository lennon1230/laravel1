@extends('layouts.default')

@section('content')
<section class="text-gray-600">
    <div class="container px-5 py-24 mx-auto">
        <div class="lg:w-2/4 w-full mx-auto overflow-auto">
            <div class="flex items-center justify-between mb-2">
                <h1 class="text-2xl font-medium title-font mb-2 text-gray-900">Atualizar produto</h1>
            </div>

            <form action="{{route('admin.products.update', $product->slug)}}" enctype="multipart/form-data" method="post">
                @csrf
                @method('patch')
                <div class="flex flex-wrap">
                    <div class="p-2 w-1/2">
                        <div class="relative">
                            <label for="name" class="leading-7 text-sm text-gray-600">Nome do produto</label>
                            <input type="text" id="name" name="name" 
                            class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 
                                focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 
                                text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors 
                                duration-200 ease-in-out" value="{{$product->name ?? old('name')}}">
                        </div>
                    </div>

                    <div class="p-2 w-1/2">
                        <div class="relative">
                            <label for="name" class="leading-7 text-sm text-gray-600">Preço</label>
                            <input type="text" id="price" name="price"
                                   class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 
                                   focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 
                                   text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors 
                                   duration-200 ease-in-out" value="{{$product->price ?? old('price')}}"/>
                        </div>
                    </div>

                    <div class="p-2 w-1/2">
                        <div class="relative">
                            <label for="name" class="leading-7 text-sm text-gray-600">Estoque</label>
                            <input type="text" id="stock" name="stock"
                                   class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 
                                   focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 
                                   text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors 
                                   duration-200 ease-in-out" value="{{$product->stock ?? old('stock')}}">
                        </div>
                    </div>

                    <div class="p-2 w-1/2">
                        <div class="relative">
                            <label for="name" class="leading-7 text-sm text-gray-600">Imagem de capa</label>
                            <input type="file" id="cover" name="cover"
                                   class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 
                                   focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 
                                   text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors 
                                   duration-200 ease-in-out" value="{{$product->cover ?? old('cover')}}"/>
                        </div>
                    </div>

                    <div class="p-2 w-full">
                        <div class="relative">
                            <label for="name" class="leading-7 text-sm text-gray-600">Descrição</label>
                            <textarea
                                id="description" name="description"
                                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 
                                focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 
                                text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors 
                                duration-200 ease-in-out">{{$product->description ?? old('description')}}</textarea>
                        </div>
                    </div>

                    <div class="p-2 w-full">
                        <button class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none 
                        hover:bg-indigo-600 rounded" type="submit">Atualizar</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</section>
@endsection