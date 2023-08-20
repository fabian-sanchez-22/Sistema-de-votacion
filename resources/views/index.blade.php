@extends('header')

@section('content')
<h5 class="text-center">Ingrese sus datos, luego seleccione uno de los candidatos y por último haga clic en votar</h5>
<div class="container w-25 border p-4 mt-4">
    <form action="{{ route('votantes') }}" method="POST">
        @csrf

        @if (session('success'))
            <h6 class="alert alert-success">{{ session('success') }}</h6>
        @endif

        @error('documento')
            <h6 class="alert alert-danger">{{ $message }}</h6>
        @enderror

        @error('nombre')
            <h6 class="alert alert-danger">{{ $message }}</h6>
        @enderror

        @error('mesa')
            <h6 class="alert alert-danger">{{ $message }}</h6>
        @enderror

        @error('candidato_seleccionado')
            <h6 class="alert alert-danger">{{ $message }}</h6>
        @enderror

        <div class="mb-3">
            <label for="title" class="form-label">Documento</label>
            <input type="text" name="documento" class="form-control">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Mesa de votación</label>
            <input type="text" name="mesa" class="form-control">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Candidato seleccionado:</label>
            <input type="text" id="id_candidato_seleccionado" name="id_candidato_seleccionado" class="form-control" readonly>
        </div>

        <button type="submit" class="btn btn-primary">Votar</button>
    </form>
</div>

<br>
<h2 class="text-center">Candidatos</h2>
<div style="margin-left: 510px">
    @foreach ($candidatos as $candidato)
        <div class="card mt-3" style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Numero de candidato: {{ $candidato->id }}</li>
                <li class="list-group-item">Nombre: {{ $candidato->nombre }}</li>
                <li class="list-group-item">Partido: {{ $candidato->partido }}</li>
            </ul>
            <div class="card-footer">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="candidato_seleccionado" value="{{ $candidato->id }}" id="candidato_{{ $candidato->id }}" data-id="{{ $candidato->id }}" onclick="mostrarIdCandidato('{{ $candidato->id }}')">
                    <label class="form-check-label" for="candidato_{{ $candidato->id }}">
                        Seleccionar este candidato para votar
                    </label>
                </div>
            </div>
        </div>
    @endforeach

    <script>
        function mostrarIdCandidato(id) {
            document.getElementById('id_candidato_seleccionado').value = id;
        }
    </script>
</div>
@endsection
