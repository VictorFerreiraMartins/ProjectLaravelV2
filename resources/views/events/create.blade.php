@extends('layouts.main')

@section('title', 'Adicionar Produto')

@section('content')

    <div id="product-create-container" class="col-md-6 offset-md-3">
        <h1>Adicione o produto</h1>
        <form action="/events" method="POST">
        @csrf
            <div class="form-group">
                <label for="name">Produto:</label>
                <input required type="text" class="form-control" id="name" name="name" placeholder="Nome do Produto">
            </div>
            <div class="form-group">
                <label for="title">Quantidade:</label>
                <input required type="number" class="form-control" id="quantity" name="quantity" placeholder="Quantidade" min="1" value="0"> 
            </div>
            <div class="form-group">
                <label for="title">Descrição:</label>
                <textarea required name="description" id="description" class="form-control" placeholder="Descrição do Produto"></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="Adicionar Produto">
        </form>
    </div>

@endsection