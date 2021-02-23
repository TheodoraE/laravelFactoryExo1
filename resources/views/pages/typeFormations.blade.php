@extends('template.main')

@section('content')
    <div class="container mt-2">
        <div>
            <h1>Formations Types</h1>
        </div>
        <table class="table mt-5">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($typeFormations as $typeFormation)
                    <tr>
                        <th scope="row">{{$typeFormation->id}}</th>
                        <td>{{$typeFormation->name}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection