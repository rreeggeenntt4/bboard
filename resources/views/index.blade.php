@extends(loyauts.app)

@section('title', $bb->title)

$section('content')
<h2>{{$bb->title}}</h2>
<p>{{$bb->content}}</p>
<p>{{$bb->price}}</p>
<p><a href="/">На перечень объявлений</a></p>
@endsection('content')