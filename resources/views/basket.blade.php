@extends('layouts.basehome')

@section('content')
    <table width="100%" class="table table-bordered">
        <tr>
            <th width="200px">Изображение</th>
            <th>Наименование</th>
            <th>Цена</th>
            <th>Количество</th>
            <th>Сумма</th>
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
            <td>{{$value->price}} </td>
            <td>{{$cook_count[$value->id]}}</td>
            <td>{{$summa}}</td>
        </tr>
        @endforeach
        <tr>
            <td colspan="4">Итого</td>
            <td>{{$itogo}}</td>
        </tr>
    </table>
<form action="" method="post">

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