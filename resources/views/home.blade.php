@extends('layouts.default')

@section('content')
<section class="text-gray-600">
    <div class="container px-5 py-24 mx-auto">
        <div class="text-gray-900 text-6xl title-font font-bold mb-12">
            <h1>{{'Products'}}</h1>
        </div>
        <div class="flex flex-wrap -m-4">
            @foreach ($products as $product)
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a class="block relative h-48 rounded overflow-hidden">
                    <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="{{$product->cover}}">
                </a>
                <div class="mt-4">
                    <h2 class="text-gray-900 title-font text-lg font-medium">{{ $product->name }}</h2>
                    <p class="mt-1">${{$product->price}}</p>
                </div>
                <a class="mt-3 text-indigo-500 inline-flex items-center" href="{{ route('product', $product->slug) }}">Ver mais
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
            @endforeach
            

            {{-- <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a class="block relative h-48 rounded overflow-hidden">
                    <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/800x450">
                </a>
                <div class="mt-4">
                    <h2 class="text-gray-900 title-font text-lg font-medium">Shooting Stars</h2>
                    <p class="mt-1">$21.15</p>
                </div>
                <a class="mt-3 text-indigo-500 inline-flex items-center" href="{{ route('product') }}">Ver mais
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a class="block relative h-48 rounded overflow-hidden">
                    <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/800x450">
                </a>
                <div class="mt-4">
                    <h2 class="text-gray-900 title-font text-lg font-medium">Neptune</h2>
                    <p class="mt-1">$12.00</p>
                </div>
                <a class="mt-3 text-indigo-500 inline-flex items-center" href="{{ route('product') }}">Ver mais
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a class="block relative h-48 rounded overflow-hidden">
                    <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/800x450">
                </a>
                <div class="mt-4">
                    <h2 class="text-gray-900 title-font text-lg font-medium">The 400 Blows</h2>
                    <p class="mt-1">$18.40</p>
                </div>
                <a class="mt-3 text-indigo-500 inline-flex items-center" href="{{ route('product') }}">Ver mais
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a class="block relative h-48 rounded overflow-hidden">
                    <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/800x450">
                </a>
                <div class="mt-4">
                    <h2 class="text-gray-900 title-font text-lg font-medium">The Catalyzer</h2>
                    <p class="mt-1">$16.00</p>
                </div>
                <a class="mt-3 text-indigo-500 inline-flex items-center" href="{{ route('product') }}">Ver mais
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a class="block relative h-48 rounded overflow-hidden">
                    <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/800x450">
                </a>
                <div class="mt-4">
                    <h2 class="text-gray-900 title-font text-lg font-medium">Shooting Stars</h2>
                    <p class="mt-1">$21.15</p>
                </div>
                <a class="mt-3 text-indigo-500 inline-flex items-center" href="{{ route('product') }}">Ver mais
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a class="block relative h-48 rounded overflow-hidden">
                    <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/800x450">
                </a>
                <div class="mt-4">
                    <h2 class="text-gray-900 title-font text-lg font-medium">Neptune</h2>
                    <p class="mt-1">$12.00</p>
                </div>
                <a class="mt-3 text-indigo-500 inline-flex items-center" href="{{ route('product') }}">Ver mais
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                <a class="block relative h-48 rounded overflow-hidden">
                    <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/800x450">
                </a>
                <div class="mt-4">
                    <h2 class="text-gray-900 title-font text-lg font-medium">The 400 Blows</h2>
                    <p class="mt-1">$18.40</p>
                </div>
                <a class="mt-3 text-indigo-500 inline-flex items-center" href="{{ route('product') }}">Ver mais
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div> --}}

        </div>
    </div>
    <div class="flex justify-end items-center py-2">
        {{$products->links()}}
    </div>
</section>
@endsection