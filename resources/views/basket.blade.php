@extends('layouts.basehome')
@section('scripts')
@parent
<script src="{{asset('public/js/order.js')}}"></script>
@endsection
@section('content')
    <table width="100%" class="table table-bordered">
        <tr>
            <th width="200px">Изображение</th>
            <th>Наименование</th>
            <th>Цена</th>
            <th>Количество</th>
            <th>Сумма</th>
            <th>Действие</th>
        </tr>
@php
 $itogo = 0;
@endphp
    @foreach($cook_arr as $key=>$value)
        @php
        $summa = $value->price * $cook_count[$value->id];
        $itogo += $summa;
        @endphp
        <tr>
            <td><img src="http://laravel/public/storage/{{$value->picture}}" width="100%"/> </td>
            <td>{{$value->name}} </td>
            <td><span id ="price_{{$value->id}}">{{$value->price}}</span></td>
            <td>
                <input type="number" class="count" value="{{$cook_count[$value->id]}}" min=1 max=100 data_id="{{$value->id}}" />
            </td>

            <td><span id ="summa_{{$value->id}}" class="summa">{{$summa}}</span></td>
            <td><a href="{{asset('basket/delete/'.$value->id)}}">удалить</a></td>
        </tr>
        @endforeach
        <tr>
            <td colspan="4">Итого</td>
            <td><span id ="itog">{{$itogo}}</span></td>
        </tr>
    </table>
<form action="{{asset('order')}}" method="post">
    {!! csrf_field() !!}

    <table border=0>
        <tr>
            <td>name</td>
            <td><input type="text" name="name" size=20 /></td>
        </tr>
        <tr>
            <td>phone</td>
            <td><input type="text" name="phone" /></td>
        </tr>
        <tr>
            <td>address</td>
            <td><input type="text" name="address" /></td>
        </tr>

    </table>


    <p><input type="submit" value="Отправить" />

</form>
    @endsection
