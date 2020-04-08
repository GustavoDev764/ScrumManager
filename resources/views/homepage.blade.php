@extends('Template.template')

@php
    
    function converteDate($data1){
       
        $data2 = date("Y/m/d");
        // converte as datas para o formato timestamp
        $d1 = strtotime($data1); 
        $d2 = strtotime($data2);
        // verifica a diferença em segundos entre as duas datas e divide pelo número de segundos que um dia possui
        $dataFinal = ($d2 - $d1) /86400;
                            
        // caso a data 2 seja menor que a data 1
        if($dataFinal < 0)
        $dataFinal = $dataFinal * -1;

        return $dataFinal;
    }

    function createStyle($color, $background_color){
        return "style=color:".$color.";background-color:".$background_color.";border-color:".$background_color;
    }

@endphp

@section('root')


    <div class="container">
        <h2>Lista de Sprint</h2>
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
                <a href="{{ route('createsprint') }}" class="btn btn-primary">Cadastrar Sprint</a>
            </div>
            
        </div>
        <table class="table table-hover">
        <thead>
            <tr>
            <th>Prioridade</th>
            <th>Dias Restantes</th>
            <th>Nome do Split</th>
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
                    <td>
                       {{ converteDate($item->expires_in)  }}
                    </td>
                    <td>{{ $item->name }}</td>
                    <td>
                        <a href="{{ route('sprintfunc', ['id' => $item->id]) }}" class="btn btn-info">
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