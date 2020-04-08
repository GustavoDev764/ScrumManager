@extends('Template.template')

@section('root')


 <div class="container">
    <h2>Cria Sprint</h2>
    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight">
            <a href="{{ route('homePage') }}" class="btn btn-secondary">Volta</a>
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
    <form action="{{ route('insertsprint') }}" method="POST">
        @csrf
        @include('Components.formSprint')
      <button type="submit" class="btn btn-success">Cadastra</button>
    </form>
  </div>



@endsection