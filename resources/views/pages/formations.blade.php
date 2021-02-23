@extends('template.main')

@section('content')
    <div class="container mt-2">
        <div>
            <h1>Formations</h1>
        </div>
        <table class="table mt-5">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($formations as $formation)
                    <tr>
                        <th scope="row">{{$formation->id}}</th>
                        <td>{{$formation->name}}</td>
                        <td>{{$formation->description}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection