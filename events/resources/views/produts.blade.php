@extends('layouts.main')
@section('title', 'Produtos')
@section('content')

<h1>tela de produtos</h1>

@if($search != '')
    <p>O usuario esta buscando por {{ $search }}</p>
@endif

@endsection