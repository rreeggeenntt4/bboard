@extends('layouts.app')

@section('title', 'Добавление объявления :: Мои объявления')

@section('content')

<form action="{{ route('bb.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="txtTitle" class="form-label">Товар</label>
        <input type="text" id="txtTitle" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
        @error('title')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="txtContent" class="form-label">Описание</label>
        <input type="text" id="txtContent" name="content" class="form-control @error('content') is-invalid @enderror" value="{{ old('content') }}">
        @error('content')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="txtPrice" class="form-label">Цена</label>
        <input type="text" id="txtPrice" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}">
        @error('price')
        <div class=" invalid-feedback">{{$message}}</div>
        @enderror
    </div>
    <input type="submit" class="btn btn-primary" value="Добавить">
</form>

@endsection('content')