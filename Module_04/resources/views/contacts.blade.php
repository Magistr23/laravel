@extends('layouts.default')

@section('content')
@if ($email == NULL)
<div style="border: solid 1px black; text-align:center">Адрес электронной почты не указан</div>
@else 
<div> Почта {{$email}}</div>
@endif
@stop