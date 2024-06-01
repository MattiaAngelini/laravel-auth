@extends('layouts.admin')

@section('content')
    <h2>EDIT PROJECT: "{{ $project->name }}"</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('admin.projects.update', ['project' => $project->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">TITLE:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $project->name) }}">
        </div>

        <div class="mb-3">
            <label for="summary" class="form-label">CONTENT:</label>
            <textarea class="form-control" id="summary" rows="10" name="summary">{{ old('summary', $project->summary) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">EDIT</button>
    </form>
@endsection