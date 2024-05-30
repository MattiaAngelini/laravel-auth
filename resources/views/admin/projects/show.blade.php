@extends('layouts.admin')

@section('content')

    <section>
        <h1>{{$project->name}}</h1>
        <h2>SLUG: {{$project->slug}}</h2>
        <div>
            <h3>Descrizione:</h3>{{$project->summary}}
        </div>   
    </section>
    
@endsection