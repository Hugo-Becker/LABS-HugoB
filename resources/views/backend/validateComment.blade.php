@extends('adminlte::page')

@section('content')

    <table class="table">
        <thead>
        <tr class="row">
            <th class="col-1">#</th>
            <th class="col-5">Content</th>
            <th class="col-2">From</th>
            <th class="col-2">Mail</th>
            <th class="col-1">Validate</th>
            <th class="col-1">Delete</th>
        </tr>
        </thead>
        <tbody>

            @foreach ($comments as $comment)

                <tr class="row">
                    <th class="col-1">{{$comment->id}}</th>
                    <td class="col-5" >{{$comment->content}}</td>
                    <td class="col-2" >{{$comment->fromName}}</td>
                    <td class="col-2" >{{$comment->fromMail}}</td>
                    @if ($comment->check==0)
                        <td class="col-1" >
                            <a class="btn btn-success" href="/validateCom/{{$comment->id}}">Validate</a>
                        </td>
                    @else
                        <td class="col-1 d-flex justify-content-center" >
                            <i class="fas faw fa-check"></i>
                        </td>
                    @endif
                    <td class="col-1" >
                        <form action="/validateCom/{{$comment->id}}" method="POST" >

                            @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form> 
                    </td>
                    
                </tr>


                
            @endforeach
        </tbody>
    </table>

    
@endsection