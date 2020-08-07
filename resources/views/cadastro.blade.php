@extends('templates.base')

@section('content')

    <h1 class="text-center mt-4 mb-4">
        Agenda de Contatos
    </h1>
    <hr/>

    <div class="text-center mt-3 mb-4">
        <h4 class="text-center mt-4 mb-4">
            Criar Novo Contato
        </h4>
    </div>

    <div class="col-8 m-auto">
        <form name="formCad" id="formCad" action="{{url('agenda')}}" method="post">
            @csrf
            <input required type="text" class="form-control" name="contato" id="contato" placeholder="Nome do Contato"><br>
            <input required type="text" class="form-control" name="email" id="email" placeholder="email@email.com"><br>
            <input required type="text" class="form-control" name="telefone" id="telefone" placeholder="11 00000-0000"><br>
            <input type="text" class="form-control" name="empresa" id="empresa" placeholder="Função do Contato"><br>
            <select required class="form-control" name="id_user" id="id_user">
                <option value="">Selecione o Contato de</option>
                @foreach ($user as $users)
                    <option value="{{$users->id}}">{{$users->name}}</option>
                @endforeach
            </select><br>
            <input type="submit" class="btn btn-success" value="Cadastrar">
        </form>
        <br>
        <a href="{{url('agenda')}}">
            <button class="btn btn-danger">Cancelar</button>
        </a>
    </div>

@endsection
