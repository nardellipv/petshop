@extends('layouts.mainAdminSite')

<style>
    .imgListado {
        position: relative;
        height: 120px;
        width: 120px;
        object-fit: cover;
    }
</style>

@section('content')
<div class="page-content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-xl-2">
                            <a href="{{ route('product.add') }}" class="btn btn-primary mb-3 mb-lg-0"><i class='bx bxs-plus-square'></i>Agregar</a>
                        </div>
                        <div class="col-lg-9 col-xl-10">
                            <form class="float-lg-end">
                                <div class="row row-cols-lg-2 row-cols-xl-auto g-2">
                                    <div class="col">
                                        <div class="btn-group" role="group">
                                            <h6>Listado de productos</h6>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 product-grid">
        @foreach($products as $product)
        <div class="col">
            <div class="card">
                <img src="{{ asset('shop/' . $product->shop_id . '/products/500-' . $product->image) }}" class="card-img-top imgListado" alt="{{ $product->name }}">
                <div class="card-body">
                    <h6 class="card-title cursor-pointer">{{ $product->name }}</h6>
                    <div class="clearfix">
                        <p class="mb-0 float-start">Stock <strong> {{ $product->quantity }}</strong></p>

                        @if($product->discount)
                        <p class="mb-0 float-end fw-bold"><span class="me-2 text-decoration-line-through text-secondary">${{ $product->sellPrice }}</span>
                            <span>${{ $product->discount }}</span>
                        </p>
                        @else
                        <p class="mb-0 float-end">Precio <strong> ${{ $product->sellPrice }}</strong></p>
                        <br>
                        @endif
                        <br>
                        @if($product->internalCode)
                        <p class="mb-0 float-start">C??digo <strong> {{ $product->internalCode }}</strong></p>
                        <br>
                        @endif
                        <p class="mb-0 float-start">Publicado <strong> {{ $product->post }}</strong></p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection