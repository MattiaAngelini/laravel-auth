@extends('layouts.admin')

@section('content')
    <h1>Tutti i progetti</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Created at</th>
                <th>Actions</th>
            
            </tr>
        </thead>

        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->slug }}</td>
                    <td>{{ $project->created_at }}</td>
                    <td>
                        <div>
                            <button><a href="{{ route('admin.projects.show', ['project' => $project->id]) }}">View</a></button>
                            <button><a href="{{ route('admin.projects.edit', ['project' => $project->id]) }}">Modifica</a></button>
                            <form action="{{route('admin.projects.destroy',['project' => $project->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger mt-2">ELIMINA</button>
                              </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection