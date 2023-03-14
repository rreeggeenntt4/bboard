@extends('layouts.app')

@section('title', 'Главная')

@section('content')


<table class="table table-striped table-borderless">
    <thead>
        <tr>
            <th>Товар</th>
            <th>Цена, руб.</th>
            <th>Цена</th>
        </tr>
    </thead>
    <tbody>

       

            <tr>
                <td>
                    <input name="title" type="text">
                </td>
                <td>
                    <input name="content" type="text">
                </td>
                <td>
                    <input name="price" type="number" min="1" max="100">
                </td>

                <td>
                    <input type="submit">
                </td>
            </tr>
       
    </tbody>
</table>


@endsection('content')