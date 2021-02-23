@extends('template.main')

@section('content')
    <div class="container mt-2">
        <div>
            <h1>Students</h1>
        </div>
        <table class="table mt-5">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Lastname</th>
                <th scope="col">Firstname</th>
                <th scope="col">Age</th>
                <th scope="col">State</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <th scope="row">{{$student->id}}</th>
                        <td>{{$student->lastame}}</td>
                        <td>{{$student->firstname}}</td>
                        <td>{{$student->age}}</td>
                        <td>{{$student->state}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection