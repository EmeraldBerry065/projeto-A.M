@extends('layouts.app')
@section('content')
<div id="create-announcement-container" class="col-md-6 offset-md-3">
    <h1>Modifique Seu Anuncio</h1>
        <form action="/Announcement/update/{{ $announcement->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="mark">Marca:</label>
                <input type="text" class="form-control" id="mark" name="mark" placeholder="Marca Do Veiculo" value="{{ $announcement->mark }}">
            </div>
            <div class="form-group">
                <label for="model">Modelo:</label>
                <input type="text" class="form-control" id="model" name="model" placeholder="Modelo Do Veiculo" value="{{ $announcement->model}}">
            </div>
            <div class="form-group">
                <label for="year">Ano:</label>
                <input type="text" class="form-control" id="year" name="year" placeholder="Ano Do Veiculo" value="{{ $announcement->year }}">
            </div>
            <div class="form-group">
                <label for="color">Cor:</label>
                <input type="text" class="form-control" id="color" name="color" placeholder="Cor Do Veiculo" value="{{ $announcement->color }}">
            </div>
            <div class="form-group">
                <label for="km">km:</label>
                <input type="text" class="form-control" id="km" name="km" placeholder="KM Rodados Do Veiculo" value="{{ $announcement->km }}">
            </div>
            <label for="multimedia">O Carro Contém Multimídia?</label>
                <div class="form-check">
            <input class="form-check-input" type="radio" name="multimedia" id="multimedia" value="Sim">
            <label class="form-check-label" for="exampleRadios1">Sim</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="multimedia" id="multimedia" value="Não">
<label class="form-check-label" for="exampleRadios2">
    Não
</label>
</div>
            <div class="form-group">
                <label for="note">Observações:</label>
                <input type="text" class="form-control" id="note" name="note" placeholder="obs Do Veiculo" value="{{ $announcement->note }}">
            </div>
            <div class="form-group">
                <label for="price">Preço:</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Preço Do Veiculo" value="{{ $announcement->price }}">
            </div>
            <div class="form-group">
                <label for="photo">foto:</label>
                <input type="file" id="photo" name="photo" class="form-control-file">
                <img style="width:100px; margin-top:20px;" src="/img/fotos/{{$announcement->photo}}" alt="">
            </div>
            <div>
                <input type="submit" class="btn btn-primary" value="editar anuncio" style="margin-top:10px; margin-left:400px;">
            </div>
            
        </form>
</div>
@endsection