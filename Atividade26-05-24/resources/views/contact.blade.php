@extends('Components.layout')

@section('titulo', "HOME")

@section('conteudo')
<div class="container fundo-cont">
    <br><br><br>
    <div class="row">
        <div class="col ">
            <div class="text-center">
            <br><br>
        <strong >Está Pronto?</strong><br>
        </div>
            <div class="quem-cont">
            
            <div class="QuemSomos">
                <div class="text-center">
                    <img style="width: 90%; border-radius: 20px" src="{{ asset('img/Esoterismo.webp') }}" alt="QuemSomos">
                    <br><br>
                    <h1>Formulário</h1>
                </div>
                <div style="padding: 0px 50px">
                <form action="{{route('contact')}}" method="post">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="Nome" class="form-label">Nome:</label>
                        <input type="text"  name="Nome" id="Nome" class="form-control" aria-describedby="nomeHelp"> 
                    </div>
                    <div class="mb-3">
                        <label for="tel" class="form-label">Telefone:</label>
                        <input type="tel" class="form-control" name="tel" id="tel" aria-describedby="TelefoneHelp"> 
                    </div>
                    <div class="mb-3">
                        <label for="adress" class="form-label">Endereço:</label>
                        <input type="text" class="form-control" name="adress" id="adress" aria-describedby="EnderecoHelp"> 
                    </div>
                    <div class="mb-3">
                        <label for="sexo" class="form-label">Sexo:</label>
                        <select id="sexo" name="sexo" class="form-select" aria-label="Default select example">
                        <option >Selecionar</option>
                        <option>Masculino</option>
                        <option>Feminino</option>
                        <option>Outro</option>
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="submit">Enviar</button>
                    </div>

                </form></div>
                
            </div>
            </div>
        </div>
    </div>
</div>
@endsection