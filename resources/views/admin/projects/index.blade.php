@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h2>Progetti</h2>
    <a href="{{route("admin.projects.create")}}" class="btn btn-primary mt-5">aggiungi un nuovo progetto</a>
    <div class="row g-3 mt-5">
        <table class="table table-striped-columns">

        <thead>
            <tr>
                <th scope="col"> </th>
                <th scope="col">Title</th>
                <th scope="col">Language</th>
                <th scope="col">url</th>
            </tr>
        </thead>

         <tbody>
          @forelse ($projects as $project )
          <tr>
            <th scope="row">{{ $project->id }}</th>
            <td>{{ $project->title }}</td>
          </tr>
          @empty
          <tr>
             <h2>Non ci sono piante in catalogo....</h2>
          </tr>
        @endforelse
        </tbody>

        </table>
    </div>
    </div>
@endsection
