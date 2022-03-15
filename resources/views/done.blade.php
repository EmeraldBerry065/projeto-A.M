@extends('layouts.app')
@section('content')
<div id="create-announcement-container" class="col-md-6 offset-md-3">
    <h1>Faça Seu Financiamento</h1>
    <?php
    $vf = $_GET['price'] - $_GET['entrada'];
    $vf = $vf / $_GET['parcela'];
    $juros = ($vf*10)/100;
    $vf=$vf+$juros;
    
    ?>
    <form action="/done/{{ $announcement->id }}" method="GET">
            @csrf
            <div class="form-group">
                <label for="price">Entrada:</label>
                <input type="text" class="form-control" id="entrada" name="entrada" placeholder="Valor Da Entrada Desejada" value='<?php echo $_GET['entrada']; ?>'>
            </div>
            <div class="form-group">
                <label for="price">Parcelas:</label>
                <input type="text" class="form-control" id="parcela" name="parcela" placeholder="Numero de Parcelas desejado" value='<?php echo $_GET['parcela']; ?>'>
            </div>
            <div class="form-group">
                
                <input type="hidden" class="form-control" id="price" name="price" placeholder="Preço Do Veiculo" value="{{ $announcement->price }}">
            </div>
            <div class="form-group">
                <label for="price">Valor Da Parcela:</label>
                <input type="text" class="form-control" id="valorParcela" name="valorParcela" value='
                <?php 
                if($vf == 0){
                    echo 'o valor sera quitado';
                }elseif($vf<0){
                    echo 'erro';
                }else{
                    echo $vf;
                }
                ?>'disabled="">
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