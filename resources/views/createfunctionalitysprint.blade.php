@extends('Template.template')

@section('root')


 <div class="container">
    <h2>Cria Funcionalidade</h2>
    
    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight">
            <a href="{{ route('sprintfunc',['id'=>$sprint->id]) }}" class="btn btn-secondary">Volta</a>
        </div>
        <div class="p-2 bd-highlight">
            <a href="{{ route('listafunctionalitysemsprint',['idsprint'=>$sprint->id]) }}" class="btn btn-info">Ver Lista de Funcionalidade Sem Sprint</a>
        </div>
    </div>
   
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('success') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
    @endif
    <form action="{{ route('insertfunctionalitysprint',['id'=>$sprint->id]) }}" method="POST">

        @csrf
        <input type="hidden" name="id_sprint" value="{{ $sprint->id }}">
        @include('Components.formfunctionality')
        
        <button type="submit" class="btn btn-success">Cadastra</button>

    </form>
  </div>



@endsection