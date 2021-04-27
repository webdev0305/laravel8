@extends('Layouts.App')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('products.get.new')}}" title="Create a product"> <i class="fas fa-plus-circle"></i>
                </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>description</th>
            <th>Price</th>
            <th>Date Created</th>
            <th>Actions</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->created_at}}</td>
                <td>
                    <form action="{{route('products.post.delete',['product'=>$product->id])}}" method="POST">

                        <a href="{{route('products.get.show',['product'=>$product->id])}}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{route('products.get.edit',['product'=>$product->id])}}">
                            <i class="fas fa-edit  fa-lg"></i>
                        </a>

                        @csrf

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $products->links() !!}

@endsection
