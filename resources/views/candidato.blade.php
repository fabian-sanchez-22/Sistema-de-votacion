@extends('header')

@section('content')

<div class="container w-25 border p-4 mt-4"> 

    <form action="{{ route('candidatos') }}" method="POST">
        @csrf

        @if (session('success'))
            <h6 class="alert alert-success">{{ session('success') }}</h6>
        @endif

        @error('nombre')
            <h6 class="alert alert-danger">{{ $message }}</h6>
        @enderror

        @error('partido')
            <h6 class="alert alert-danger">{{ $message }}</h6>
        @enderror


        <div class="mb-3">
            <label for="title" class="form-label">Nombre del candidato</label>
            <input type="text" name="nombre" class="form-control">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Partido Politico</label>
            <input type="text" name="partido" class="form-control">
        </div>


        <button type="submit" class="btn btn-primary">Inscribirme</button>

    </form>

</div>

@endsection
