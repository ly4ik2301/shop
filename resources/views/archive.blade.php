@extends('layouts.basehome')

@section('content')

    @foreach($arr as $one)
        <div class="">{{$one['order']->id}}
            @foreach($arr[$one['order']->id] as $prod)
                {{$prod->name}}
            @endforeach
            @foreach($arr_count[$one['order']->id] as $coun)
                <b>{{$coun}}</b>
            @endforeach
        </div>

    @endforeach

@endsection