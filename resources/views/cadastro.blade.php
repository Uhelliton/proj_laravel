@extends('templates.base')

@section('content')

    <h1 class="text-center mt-4 mb-4">
        Agenda de Contatos
    </h1>
    <hr/>

    <div class="text-center mt-3 mb-4">
        <h4 class="text-center mt-4 mb-4">
            @if (isset($contato))
                Editar Contato
            @else
                Criar Novo Contato
            @endif
        </h4>
    </div>

    <div class="col-8 m-auto">
        @if(isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach ($errors->all() as $error)
                    {{$error}}<br>
                @endforeach
            </div>
        @endif

        @if (isset($contato))
            <form name="formEdit" id="formEdit" action="{{url("agenda/$contato->id")}}" method="post">
                @method('PUT')
        @else
            <form name="formCad" id="formCad" action="{{url("agenda")}}" method="post">
        @endif
            @csrf
            <input value="{{$contato->contato ?? ''}}" required type="text" class="form-control" name="contato" id="contato" placeholder="Nome do Contato"><br>
            <input value="{{$contato->email ?? ''}}" required type="text" class="form-control" name="email" id="email" placeholder="email@email.com"><br>
            <input value="{{$contato->telefone ?? ''}}" required type="text" class="form-control" name="telefone" id="telefone" placeholder="11 00000-0000"><br>
            <input value="{{$contato->empresa ?? ''}}" type="text" class="form-control" name="empresa" id="empresa" placeholder="Função do Contato"><br>
            <select required class="form-control" name="id_user" id="id_user">
                <option value="{{$contato->relUser->id ?? ''}}">{{$contato->relUser->name ?? 'Contato de Quem'}}</option>
                @foreach ($user as $users)
                    <option value="{{$users->id}}">{{$users->name}}</option>
                @endforeach
            </select><br>
            <input type="submit" class="btn btn-success" value="
                @if (isset($contato))
                    Editar
                @else
                    Cadastrar
                @endif
            ">
        </form>
        <br>
        <div class="text-center mt-3 mb-4">
            <a href="{{url('agenda')}}">
                <button class="btn btn-danger">Cancelar</button>
            </a>
        </div>
    </div>

@endsection
