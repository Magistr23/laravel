@extends('layouts.default')

@section('content')
@if ($age < 18)
<div style="border: solid 1px black; text-align:center">Вы слишком молоды!</div>
@else 
<div> ваш возраст {{$age}}</div>
@endif
@stop