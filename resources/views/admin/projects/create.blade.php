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
                  <label for="title" class="form-label">Titolo</label>
                  <input type="text" class="form-control" id="title" name="title">
                </div>


                <div class="mb-3">
                    <label for="series" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="series" name="series">
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">Data di creazione</label>
                    <input type="date" class="form-control" id="sale_date" name="sale_date">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Sommarioi</label>
                    <textarea class="form-control" id="description" rows="5" name="description"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        
        </div>
    </section>
@endsection