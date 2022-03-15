@extends('layouts.app')
@section('content')
<div class="col-md-10 ofsset-md-1 dashbord-title-container">
    <h1>Meus Anuncios</h1>
</div>
<div class="col-md-10 ofsset-md-1 dashbord-announcements-container">
@if(count($announcement) > 0)
@foreach($announcement as $announcement)
{{$announcement->model}}
@endforeach
    @else
    <p>Voce Ainda Nao Tem Anuncios <a href="">crie seu anuncio</a></p>
    @endif
</div>

@endsection  





