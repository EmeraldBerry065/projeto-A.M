@extends('layouts.app')
@section('content')

<div id="create-announcement-container" class="col-md-6 offset-md-3">
    <h1>Crie Seu Anúncio</h1>
        <form action="/Announcement" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group ">
                <label for="mark">Marca:</label>
                <input type="text" class="form-control" id="mark" name="mark" placeholder="Marca Do Veículo">
            </div>
            <div class="form-group">
                <label for="model">Modelo:</label>
                <input type="text" class="form-control" id="model" name="model" placeholder="Modelo Do Veículo">
            </div>
            <div class="form-group">
                <label for="year">Ano:</label>
                <input type="text" class="form-control" id="year" name="year" placeholder="Ano Do Veículo">
            </div>
            <div class="form-group">
                <label for="color">Cor:</label>
                <input type="text" class="form-control" id="color" name="color" placeholder="Cor Do Veículo">
            </div>
            <div class="form-group">
                <label for="km">km:</label>
                <input type="text" class="form-control" id="km" name="km" placeholder="KM Rodados Do Veículo">
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
                <input type="text" class="form-control" id="note" name="note" placeholder="Obs Do Veículo">
            </div>
            <div class="form-group">
                <label for="price">Preço:</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Preço Do Veículo">
            </div>
            <div class="form-group">
                <label for="photo">foto:</label>
                <input type="file" id="photo" name="photo" class="form-control-file">
            </div>
            <div>
                <input type="submit" class="btn btn-primary" value="criar anuncio" style="margin-top:10px; margin-left:400px;">
            </div>
            
        </form>
</div>
@endsection