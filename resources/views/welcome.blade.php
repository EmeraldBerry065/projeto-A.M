@extends('layouts.app')
@section('content')
<head>
    <style>
        body{
            
        }
        #search-container{
            background-image:url("/img/bg-masthead.jpg");
            padding-bottom:300px;
            margin-bottom:10px;
            padding-top:300px;
            padding-left:300px;
            padding-right:300px;
        }
        h1{
            padding-left:380px;
            color:white;
        }
        ion-icon {
            font-size: 240px;
        }
    </style>
</head>
<div id="search-container" class="col-md-12">
    <h1>Busque Seu Próximo Veículo</h1>
    <form action="/" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Busque aqui . . . ">
    </form>
</div>

<!-- icons -->
<section class="features-icons text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                            <h3>Segurança</h3>
                            <p class="lead mb-0" >Com a A.M motors você compra seu próximo veículo com máxima segurança e garantia</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <ion-icon name="cash-outline"></ion-icon>
                            <h3>Financiamento</h3>
                            <p class="lead mb-0" >Faça o seu financiamento conosco direto no anuncio desejado</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                        <ion-icon name="car-sport-outline"></ion-icon>
                            <h3>Carros novos e seminovos </h3>
                            <p class="lead mb-0"> na A.M motors voce encontra carros com a mior qualidade do mercado </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end icons -->
        @if($search)
        <h2>Buscando Por: {{$search}}</h2>
        <p>Veja todos os anúncios disponíveis<a href="/">Clique Aqui!</a>
        </p>
        @else
        <h2>Carros Disponíveis</h2>
        <p>Veja os modelos a venda</p>
        @endif

    
            <!-- cards -->
        @foreach($announcement as $announcement)
            <div class="card col-md-3">
                <img src="/img/fotos/{{$announcement->photo}}" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{$announcement->model}}</h5>
                    <p class="info">Fabricante:{{$announcement->mark}} 
                        <br>Ano:{{$announcement->year}} 
                        <br>Cor:{{$announcement->color}}
                        <br>KM:{{$announcement->km}}
                        <br>Multimidia:{{$announcement->multimedia}}
                        <br>Preço:{{$announcement->price}} R$</p>
                    <a href="/Announcement/{{$announcement->id}}" class="btn btn-primary">compre</a>
                </div>
            </div>
        @endforeach
        <!-- end cards -->
        
    



    
        

@endsection     