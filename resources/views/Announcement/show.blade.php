@extends('layouts.app')
@section('content')
<div class="col-md-10 offser-mds-1">
    <div class="row">
        <div id="image-contariner" class="col-md-6">
        <img src="/img/fotos/{{$announcement->photo}}" class="img-fluid"alt="">
        </div>
        <div class="col-md-6" id="info-container">
            <h1 >{{$announcement->model}}</h1>
            <p><ion-icon name="car-sport"></ion-icon>Fabricante:{{$announcement->mark}}</p>
            <p><ion-icon name="calendar-number"></ion-icon>Ano:{{$announcement->year}}</p>
            <p><ion-icon name="color-palette"></ion-icon>Cor:  {{$announcement->color}}</p>
            <p><ion-icon name="globe"></ion-icon>  {{$announcement->km}} km rodados</p>
            <p><ion-icon name="play-circle"></ion-icon>multimidia:{{$announcement->multimedia}}</p>
            <p><ion-icon name="cash"></ion-icon>  {{$announcement->price}} R$</p>
            <form action="/Announcement/{{$announcement->id}}" method="POST">
                @csrf
                @method('DELETE')
                <a href="" class="btn btn-primary">comprar</a>
                @can('delete', 'App\Models\Announcement')
                <a href="/Announcement/edit/{{$announcement->id}}" class="btn btn-primary">Editar</a>
                @endcan
                @can('update', 'App\Models\Announcement')
                <button type="submit" class="btn btn-primary">deletar</button>  
                @endcan
            </form>
            <button class="btn btn-primary" style="margin-top:5px;"><a href="/financing/{{$announcement->id}}" style="margin-top:5px;color: inherit; text-decoration: none;">financiamento</a></button>
            </div>
            <div class="description-container">
            <h3>Observações Do Vendedor</h3>
            <p>{{$announcement->note}}</p>
            </div>
        <div>
            <form action="/coment" method='get'>
                @csrf
                    <div class="form-group">
                    <label for="comentario">comentario</label>
                    <input type="text" class="form-control" id="comentario" name="comentario">
                </div>
                <button type="submit" class="btn btn-primary">comentar</button> 
            </form>
        </div>
    </div>
    @foreach($coments as $coments)
    <h1>{{$coments->comentario}}</h1>
    @endforeach
</div>

@endsection