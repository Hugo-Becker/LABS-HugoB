@extends('adminlte::page')

@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Email</th>

        
      </tr>
    </thead>
    <tbody>
        @foreach ($subs as $sub)

            <tr>
                <th scope="row">1</th>
                <td>{{$sub->email}}</td>
            </tr>
        @endforeach

    </tbody>
  </table>



    
@endsection