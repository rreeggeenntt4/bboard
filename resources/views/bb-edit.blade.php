@extends('layouts.app')

@section('title', 'Правка объявления :: Мои объявления')

@section('content')

<form action="{{ route('bb.update', ['bb'=>$bb->id]) }}" method="POST">
    @csrf
    @method('PATCH')
    <div class="mb-3">
        <label for="txtTitle" class="form-label">Товар</label>
        <input type="text" id="txtTitle" name="title" class="form-control" value="{{ $bb->title }}">
    </div>
    <div class="mb-3">
        <label for="txtContent" class="form-label">Описание</label>
        <input type="text" id="txtContent" name="content" class="form-control" value="{{ $bb->content }}">
    </div>
    <div class="mb-3">
        <label for="txtPrice" class="form-label">Цена</label>
        <input type="text" id="txtPrice" name="price" class="form-control" value="{{ $bb->price }}">
    </div>
    <input type="submit" class="btn btn-primary" value="Сохранить">
</form>

@endsection('content')