@extends('adminlte::page')

@section('content')


    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Mail</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>

            @foreach ($users as $user)

                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a class="btn btn-success" href="/users/{{$user->id}}/edit">Edit</a>
                    </td>
                    <td>
                        <form action="users/{{$user->id}}" method="POST" >
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form> 
                    </td>
                    
                </tr>


                
            @endforeach
        </tbody>
    </table>

    
    
@endsection