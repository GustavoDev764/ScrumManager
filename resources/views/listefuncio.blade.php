@extends('Template.template')

@php
    
    function createStyle($color, $background_color){
        return "style=color:".$color.";background-color:".$background_color.";border-color:".$background_color;
    }

@endphp

@section('root')

    
    <div class="container">
        <h2>{{$sprint->name ?? ''}}</h2>
        <p>Lista de Funcionalidades</p>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
        @endif

        <div class="d-flex flex-row bd-highlight mb-3">
            <div class="p-2 bd-highlight">
                <a href="{{ route('homePage') }}" class="btn btn-secondary">Volta</a>
            </div>
            <div class="p-2 bd-highlight">
                <a href="{{ route('editesprint',['id'=>$sprint->id]) }}" class="btn btn-warning">Editar Sprint</a>
            </div>
            <div class="p-2 bd-highlight">
                <form action="{{ route('deletesprint', ['id'=>$sprint->id]) }}" method="POST">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Deleta Sprint</button>
                </form>
            </div>
            <div class="p-2 bd-highlight">
                <a href="{{ route('createfunctionalitysprint',['id'=>$sprint->id]) }}" class="btn btn-primary">Adiciona Nova Funcionalidade</a>
            </div>

        </div>

        <table class="table table-hover">
        <thead>
            <tr>
            <th>Prioridade</th>
            <th>Nome da Funcionalidade</th>
            <th>Detalhes</th>
            <th>Status</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($res as $item)
                <tr>
                    <td>
                        <div 
                            {{ 
                                createStyle(
                                    $item->color_priority, 
                                    $item->background_color_priority
                                )
                            }} class="alert">
                            <strong>{{ $item->name_priority }}</strong>
                        </div>
                        
                    </td>
                   
                    <td>{{ $item->name }}</td>
                    <td>
                        <a href="{{ route('editarfunctionalitysprint', ['idsprint'=>$sprint->id, 'idfunc' => $item->id]) }}" class="btn btn-info">
                            Informação
                        </a>
                    </td>
                    <td>

                        <div 
                            {{ 
                                createStyle(
                                    $item->color_status, 
                                    $item->background_color_status
                                )
                            }} class="alert">
                            <strong>{{ $item->name_status }}</strong>
                        </div>
                        
                    </td>
                </tr>
            @endforeach

        </tbody>
        </table>
    </div>

@endsection