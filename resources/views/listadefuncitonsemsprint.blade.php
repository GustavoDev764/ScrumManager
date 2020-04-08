@extends('Template.template')

@php
    
    function createStyle($color, $background_color){
        return "style=color:".$color.";background-color:".$background_color.";border-color:".$background_color;
    }

@endphp

@section('root')
    

    <div class="container">
        <h2>Lista de Funcionalide Sem Sprint</h2>
        
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
                <a href="{{ route('sprintfunc',['id'=>$id_sprint]) }}" class="btn btn-primary">Volta</a>
            </div>
            
        </div>
        <table class="table table-hover">
        <thead>
            <tr>
            <th>Prioridade</th>
           
            <th>Nome do Split</th>
            <th>Ação</th>
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
                        <form action="{{ route('addlistafunctionalitysemsprint') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $item->id }}">
                            <input type="hidden" name="id_sprint" value="{{ $id_sprint }}">
                            <button type="submit" class="btn btn-success">
                                Adiciona
                            </button>
                        </form>
                        
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
@endsection