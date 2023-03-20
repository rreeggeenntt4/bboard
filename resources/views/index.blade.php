@extends('layouts.app')

@section('title', 'Главная')

@section('content')

@if (count($bbs) > 0)
<table class="table table-striped table-borderless">
    <thead>
        <tr>
            <th>Товар</th>
            <th>Цена, руб.</th>
            <th>&nbsp</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bbs as $bb)
        <tr>
            <td>
                <h4>{{$bb->title}}</h4>
            </td>
            <td>{{$bb->price}}</td>
            <td>
                <a href="{{ route('detail',['bb'=>$bb->id]) }}">Подробнее ...</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<style>
    .page-item:not(:first-child) .page-link {
        margin-left: -2px;
    }
</style>
{{ $bbs->links('vendor.pagination.bootstrap-5') }}


@endif

@endsection('content')