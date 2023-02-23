<!-- resources/views/home.blade.php -->

@extends('Navbar');

@section('content')
  <link rel="icon" href="https://static.vecteezy.com/system/resources/previews/000/377/806/original/home-vector-icon.jpg">
  <title>Home</title>
  <div class="center d-inline">
    <h1 class="text-light p-2 rounded bg-danger ">This is my First View {{ 
      //check if $name is undefined
      isset($id) ? $id : '' 
      }}
      
    </h1>
    <input type="text" class="rounded" name="id" id="id">
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



    
