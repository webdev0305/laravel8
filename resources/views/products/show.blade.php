@extends('Layouts.App')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Product Show </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('products.get.view')}}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>&emsp;
                <span>{{$product->name}}</span>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>&emsp;
                <span>{{$product->description}}</span>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>&emsp;
                <span>{{$product->price}}</span>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Created:</strong>&emsp;
                <span>{{$product->created_at}}</span>
            </div>
        </div>
    </div>
@endsection
