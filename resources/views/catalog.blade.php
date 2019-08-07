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

                                @include('templates.product')
                            @endforeach
                        </div>
                        <div align="center">{!! $products->links() !!}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




