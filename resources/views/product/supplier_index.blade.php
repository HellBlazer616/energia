@extends('layouts.layout')

@section('content')
<h1 style="text-align: center">Products</h1>
@endsection

@section('productShowcase')

<div class="row" style="justify-content: center; margin: 2rem;">
    <div class="card" style="width: 28rem;">
        <div class="card-header  ">
            Products Need To Be Sent
        </div>

        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Supplier</th>
                    <th scope="col">Amount</th>
                </tr>
            </thead>
            @foreach ($products as $product)
            <tbody>
                @if($product->received_product === 0)
                <tr>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->supplier_name}}</td>
                    <td>{{$product->amount}}</td>
                </tr>
                @endif
            </tbody>
            @endforeach
        </table>

    </div>
</div>



@endsection