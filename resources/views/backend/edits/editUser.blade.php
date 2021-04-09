@extends('adminlte::page')

@section('content')



    <form action="/users/{{$user->id}}" method="POST" class="container">
        @csrf
        @method('PUT')

        

        <h1 class="title">Edit User</h1>
        @if ($errors->any()) 
        <div class="alert alert-danger"> 
        <ul> @foreach ($errors->all() as $error) 
        <li>{{ $error }}</li> 
        @endforeach </ul> 
        </div> 
        @endif
        <div class="form-group">
            <img width="200px" src="{{asset('img/avatar/'.$user->img)}}" alt="">
            <div class="input-group my-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">Change Avatar</span>
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="inputGroupFile01">
                  <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
              </div>

        </div>

        <div class="form-group">
            <label for="">Name</label>
            <input class="form-control" value="{{$user->name}}" type="text" name="name" id="">
        </div>

        <div class="form-group">
            <label for="">Email</label>
            <input class="form-control" value="{{$user->email}}" type="text" name="email" id="">
        </div>

        

        <div class="form-group">
            <label for="">Description</label>
            <textarea class="form-control" name="description" id="" cols="10" rows="3">{{$user->description}}</textarea>
 
        </div>

        <div class="form-group">
            <label for="">Poste</label> <br>
            <select class="custom-select" name="poste_id" id="">
                @foreach ($postes as $poste)
                    <option @if ($user->poste_id==$poste->id)
                        selected
                        
                    @endif value="{{$poste->id}}">{{$poste->name}}</option>
                @endforeach
            </select>
        </div>
        @can('isAdmin')

            <div  class="form-group">
                <label for="">Role</label> <br>
                <select class="custom-select" name="role_id" id="">
                    @foreach ($roles as $role)
                        <option @if ($user->role_id==$role->id)
                            selected
                            
                        @endif value="{{$role->id}}">{{$role->name}}</option>
                    @endforeach
                </select>
            </div>
            
        @endcan


        {{-- <div class="form-group">
            <label for="">Password</label>
            <input class="form-control" value="{{$user->password}}" type="text" name="password" id="">
        </div> --}}

        <a class="btn btn-danger" href="">Change password</a>


        <button type="submit" class="btn btn-success btn-lg btn-block mt-3">Save</button>

      

    </form>
    
@endsection