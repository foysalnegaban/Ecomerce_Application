@extends('layout.default')
@section("title", "Ecomerce Application")
@section("content")
<main class="container" style="max-width:900px">
    <section>
        <img class="" src="{{ $products->image }}" alt="" width="100%">
        <h1>{{ $products->title }}</h1>
        <p>{{ $products->price }}</p>
        <p>{{ $products->description }}</p>
    </section>
</main>
@endsection