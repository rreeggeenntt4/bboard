@extends(loyouts.app)

@section('title', 'Главная')

@section('content')
@foreach($bbs as $bb)
<h2>{{$bb->title}}</h2>
<p>{{$bb->content}}</p>
<p>{{$bb->price}}</p>
<p><a href="{{ route('detail',['bb'=>$bb->id]) }}">На перечень объявлений</a></p>
@endforeach
@endsection('content')