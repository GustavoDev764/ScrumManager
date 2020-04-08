@extends('Template.template')

@section('root')


 <div class="container">
    <h2>Editar Funcionalidade</h2>
    <div class="d-flex justify-content-between">

        <div class="p-2 bd-highlight">
            <a href="{{ route('sprintfunc',['id'=>$sprint->id]) }}" class="btn btn-secondary">Volta</a>
        </div>
        <div class="p-2 bd-highlight">
            <form action="{{ route('deletafunctionalitysprint',
            ['idsprint'=>$sprint->id, 'idfunc'=>$res->id]) }}" method="POST">
                @method("delete")
                @csrf
                <input type="hidden" name="id_sprint" value="{{ $sprint->id }}">
                <input type="hidden" name="id" value="{{ $res->id }}">

                <button type="submit" class="btn btn-danger">Deleta</button>
            </form>
           
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
    <form action="{{ route('updatefunctionalitysprint') }}" method="POST">

        @method('put')
        @csrf
        <input type="hidden" name="id_sprint" value="{{ $sprint->id }}">
        <input type="hidden" name="id" value="{{ $res->id }}">
        @include('Components.formfunctionality')
        <button type="submit" class="btn btn-success">Salvar</button>
        

    </form>
  </div>



@endsection