@extends('layouts.basehome')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">  {{$cat->name}}</div>
                    <div class="card-body">
                        <div class="row">
@foreach($products as $one)



                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card h-100">
                                    <a href="#"><img class="card-img-top" src="http://laravel/public/storage/{{$one->picture}}" alt=""></a>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            <a href="#">    {{$one->name}}</a>
                                        </h4>
                                        <h5>${{$one->price}}</h5>
                                        <p class="card-text">
                                            {{ $one->body }}
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <small class="text-muted">★ ★ ★ ★ ☆</small>
                                    </div>
                                </div>
                            </div>
    @endforeach
                        </div>
    <div align="center">{!! $products->links() !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




