@extends('layout.default')
@section("title", "Ecomerce Application")
@section("content")
<main class="container" style="max-width:900px">
    <section>
        <img src="{{ $products->image }}" alt="" width="100%">
        <h1>{{ $products->title }}</h1>
        <p>{{ $products->price }}</p>
        <p>{{ $products->description }}</p>
        <a href="{{ route('product.Addcart',$products->id) }}" class="btn btn-success">Add to cart</a>
    </section>
</main>
@endsection