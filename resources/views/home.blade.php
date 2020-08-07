@extends('templates.base')

@section('content')

    <h1 class="text-center mt-4 mb-4">
        Agenda de Contatos
    </h1>


    <div class="text-center mt-3 mb-4">
        <h4 class="text-center mt-4 mb-4">
            Bem Vindos ao Projeto Agenda em Laravel
        </h4>
        <p class="text-center">Feito por Erisvaldo Correia</p>
        <div class="col-8 m-auto">
            <a href="{{url('agenda')}}">
                <button class="btn btn-success">Acessar</button>
            </a>
        </div>
    </div>



@endsection
