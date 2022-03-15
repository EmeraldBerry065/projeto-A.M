@extends('layouts.app')
@section('content')
<div id="create-announcement-container" class="col-md-6 offset-md-3">
    <h1>Faça Seu Financiamento</h1>
        <form action="/done/{{ $announcement->id }}" method="GET">
            @csrf
            <div class="form-group">
                <label for="price">Entrada:</label>
                <input type="text" class="form-control" id="entrada" name="entrada" placeholder="Valor Da Entrada Desejada">
            </div>
            <div class="form-group">
                <label for="price">Parcelas:</label>
                <input type="text" class="form-control" id="parcela" name="parcela" placeholder="Numero de Parcelas desejado">
            </div>
            <div class="form-group">
                
                <input type="hidden" class="form-control" id="price" name="price" placeholder="Preço Do Veiculo" value="{{ $announcement->price }}">
            </div>
            <div class="form-group">
                <label for="price">Valor Do Veiculo:</label>
                <input type="text" class="form-control" id="valorParcela" name="valorParcela" value="{{ $announcement->price }}"disabled="">
            </div>
            <div class="form-group">
                <img style="width:500px; margin-top:20px;" src="/img/fotos/{{$announcement->photo}}" alt="">
            </div>
            <div>
                <input type="submit" class="btn btn-primary" value="simular financiamento" style="margin-top:10px; margin-left:400px;">
            </div>
            
        </form>
</div>
@endsection