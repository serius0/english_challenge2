@extends('layouts.master')

@section('content')

<h1>{{$question["no"]}}</h1>
<h2>{{$question["soal"]}}</h2>
<h3>{{$question["answer"]}}</h3>
<h4>{{$question["desc"]}}</h4>
@endsection
