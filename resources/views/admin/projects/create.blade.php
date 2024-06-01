@extends('layouts.admin')

@section('content')
    <section>
        <div class="container">
            <h1 class="p-3">NEW PROJECT</h1>
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
                  <label for="name class="form-label">New project</label>
                  <input type="text" class="form-control" id="name" name="name">
                </div>

                <div class="mb-3">
                    <label for="summary" class="form-label">Summary</label>
                    <textarea class="form-control" id="summary" rows="10" name="summary"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">SAVE NEW PROJECT</button>
            </form>

        
        </div>
    </section>
@endsection