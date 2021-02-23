@extends('template.main')

@section('content')
    <div class="container mt-2">
        <div>
            <h1>Batiments</h1>
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
                @foreach ($batiments as $batiment)
                    <tr>
                        <th scope="row">{{$batiment->id}}</th>
                        <td>{{$batiment->name}}</td>
                        <td>{{$batiment->description}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection