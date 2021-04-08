@extends('adminlte::page')

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Poste</th>
        <th scope="col">Mail</th>
        <th scope="col">Validate</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($users as $user)

            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->postes->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <form action="/validateUser/{{$user->id}}" method="POST">
                        @csrf
                        <button class="btn btn-primary" type="submit">Validate User</button>
                    </form>
                </td>
                
            </tr>


            
        @endforeach
    </tbody>
  </table>
    
@endsection