@extends('layouts.admin')

@section('content')
    <section>
        <div class="container">
            <h1>Crea un nuovo progetto</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.projects.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="name class="form-label">Nome Progetto</label>
                  <input type="text" class="form-control" id="name" name="name">
                </div>

                <div class="mb-3">
                    <label for="summary" class="form-label">Sommario</label>
                    <textarea class="form-control" id="summary" rows="20" name="summary"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">SALVA PROGETTO</button>
            </form>

        
        </div>
    </section>
@endsection