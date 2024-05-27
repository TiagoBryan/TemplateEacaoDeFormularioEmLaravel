@extends('Components.layout')

@section('titulo', "HOME")

@section('conteudo')
<div class="container fundo-cont"> 
<div class="row">
    <div class="col text-center">
      <br><br><br><br><br><br>
        <strong >Is Watching You!</strong>
    </div>
</div>
<br><br><br><br>
<div class="row text-center">
    <div class="col text-center">
        <img width="210px" src="{{ asset('img/tri.png') }}" alt="triangulo">
        <div > <div > <a class="btn-tri" href="">? </a></div></div>
    </div>
    <div class="col text-center">
        <img width="210px" style="transform: scaleY(-1);" src="{{ asset('img/tri.png') }}" alt="triangulo">
        <div > <div > <a class="btn-tri" href="">? </a></div></div>
    </div>
    <div class="col text-center">
        <img width="210px" src="{{ asset('img/tri.png') }}" alt="triangulo">
        <div > <div > <a class="btn-tri" href="">? </a></div></div>
    </div>
</div>
<br><br><br><br><br>
<div class="row text-center">
    <div class="col text-center">
        <img width="210px" src="{{ asset('img/tri.png') }}" alt="triangulo">
        <div > <div > <a class="btn-tri" href="">? </a></div></div>
    </div>
    <div class="col text-center">
        <img width="210px" style="transform: scaleY(-1);" src="{{ asset('img/tri.png') }}" alt="triangulo">
        <div > <div > <a class="btn-tri" href="">? </a></div></div>
    </div>
    <div class="col text-center">
        <img width="210px" src="{{ asset('img/tri.png') }}" alt="triangulo">
        <div > <div > <a class="btn-tri" href="">? </a></div></div>
    </div>
</div>
<br><br>
<hr class="linha-separate">
<br><br>
<div class="row g-2">
    <div class="col" >
    <div class="alinhar-cards">
        <div class="card" style="width: 18rem; background-color: #200B0B; border: 2px solid black">
        <img src="{{ asset('img/livro1.avif') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text" style="color: #650000">SY8ABPiV2x_Qjz1IuC7mixpKzsbSC-g9tX6KTlcRPMmAHVc7sQp60ygtiHg6cjryyGQq4pQ1_zyNe1EotddHxg</p>
        </div>
        </div>
    </div>
    </div>
    <div class="col " >
    <div class="alinhar-cards">
        <div class="card" style="width: 18rem; background-color: #200B0B; border: 2px solid black">
        <img src="{{ asset('img/livro2.avif') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text" style="color: #650000">SY8ABPiV2x_Qjz1IuC7mixpKzsbSC-g9tX6KTlcRPMmAHVc7sQp60ygtiHg6cjryyGQq4pQ1_zyNe1EotddHxg</p>
        </div>
        </div>
    </div>
    </div>
    <div class="col" >
    <div class="alinhar-cards">
        <div class="card" style="width: 18rem; background-color: #200B0B; border: 2px solid black">
        <img src="{{ asset('img/livro3.avif') }}" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text" style="color: #650000">SY8ABPiV2x_Qjz1IuC7mixpKzsbSC-g9tX6KTlcRPMmAHVc7sQp60ygtiHg6cjryyGQq4pQ1_zyNe1EotddHxg</p>
        </div>
        </div>
    </div>
    </div>
</div>
<br><br><br><br><br><br>
</div>

@endsection