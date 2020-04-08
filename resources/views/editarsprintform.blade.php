@extends('Template.template')

@section('root')


 <div class="container">
    <h2>Editar Sprint</h2>
    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight">
            <a href="{{ route('sprintfunc',['id'=>$res->id]) }}" class="btn btn-secondary">Volta</a>
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
    <form action="{{ route('updatesprint',['id'=>$res->id]) }}" method="POST">
        @csrf
        @method('PUT')
        @include('Components.formSprint')

      <button type="submit" class="btn btn-success">Salva</button>
    </form>
  </div>



@endsection