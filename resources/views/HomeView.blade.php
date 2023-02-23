<!-- resources/views/home.blade.php -->

@extends('Navbar');

@section('content')
  <title>Home</title>
  <div class="center d-inline">
    <h1 class="text-light p-2 rounded bg-danger ">This is my First View {{ 
      //check if $name is undefined
      isset($id) ? $id : '' 
      }}
      
    </h1>
    <input type="number" class="rounded" name="id" id="id">
    <br>
    <input type="button" value="Send ID" class="btn bg-danger m-1 p-1 rounded-pill" onclick='sendID()'> 
  </div>
  <script>
    function sendID(){
      var id = document.getElementById('id').value;
      document.getElementById('id').value = '';
      window.location.href = '/home/' + id; 
    }
  </script>
@endsection



    
