@extends('templates/layout')

@section('titulo', 'Página de Produtos - Editar')

@section('corpo')

<h1>Produtos - Editar</h1>

@if( $errors ->any())
<p>Preencha os campos corretamente!</p>

<ul>
    @foreach($errors->all() as $erro)
    <li>{{ $erro }}</li>
    @endforeach
</ul>
@endif

<form action="{{ route('produto/editar', $prod->id) }}" method="post">
    @csrf
    @method('put')

    <p><input value="{{ old('nome') ?: $prod->nome }}" type="text" name="nome" placeholder="Nome do produto" value=""></p>
    <p><input value="{{ old('preco') ?: $prod->preco }}" type="number" name="preco" placeholder="Preço"></p>
    <p><textarea name="descricao" cols="30" rows="10" placeholder="Descrição">{{
    old('descricao') ?: $prod->descricao }}</textarea></p>
    <p><input type="submit" value="Gravar"></p>
</form>

@endsection
