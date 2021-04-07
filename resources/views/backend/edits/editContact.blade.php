@extends('adminlte::page')

@section('content')
<div class="container pb-5">

    <form action="/backContacts/0" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Desciption</label>
          <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$contacts[0]->text}}</textarea>
        </div>
    
        <div class="form-group">
          <label for="exampleFormControlInput1">Street, Number</label>
          <input name="street" value="{{$adresses[0]->street}}"  type="text" class="form-control" id="exampleFormControlInput1" >
        </div>
    
        <div class="form-group">
          <label for="exampleFormControlInput1">City</label>
          <input name="city" value="{{$adresses[0]->city}}"   type="text" class="form-control" id="exampleFormControlInput1" >
        </div>
    
    
        <div class="form-group">
          <label for="exampleFormControlInput1">Phone</label>
          <input name="number" value="{{$phones[0]->number}}"  type="text" class="form-control" id="exampleFormControlInput1" >
        </div>
    
        <div class="form-group">
          <label for="exampleFormControlInput1">Email</label>
          <input name="mail" value="{{$mails[0]->mail}}"  type="mail" class="form-control" id="exampleFormControlInput1" >
        </div>
    
        {{-- <div class="form-group">
          <label for="exampleFormControlInput1">Google map adress</label>
          <input name="google"  type="text" class="form-control" id="exampleFormControlInput1" >
        </div>
     --}}
    
        <div class="form-group">
          <label for="exampleFormControlInput1">Footer URL link</label>
          <input name="url" value="{{$footer[0]->url}}"  type="text" class="form-control" id="exampleFormControlInput1" >
        </div>
    
        <div class="form-group">
          <label for="exampleFormControlInput1">Footer title</label>
          <input name="name"  value="{{$footer[0]->name}}" type="text" class="form-control" id="exampleFormControlInput1" >
        </div>
    
        <button class="btn btn-success mt-3" type="submit">Update</button>
    
    
      </form>

</div>





    
@endsection