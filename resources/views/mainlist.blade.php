@extends('template')

    @section('content')
                    @foreach($products as $product)
                        <div class="col-sm-4"> <!-- 3 for 4 item in 1 row-->
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">{{$product->name}}</h5>
                                    <a href="{{ route('product.detail', ['id' =>$product->id]) }}"><img src="{{ asset('pic/') }}/{{$product->image}}" alt="" class="img-fluid"></a>
                                    <div class="card-heading">RM {{$product->price}}</div>
                                    <a href="{{ route('product.detail', ['id' => $product->id])}}">
                                    <button style="float:right" class="btn btn-success btn-xs">Details</button></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
    @endsection