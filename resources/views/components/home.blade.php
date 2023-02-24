<div>  
<body class="bg-primary">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<link rel="stylesheet" href="./CSS/main.css">
<style>
    .center{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    
    .center input[button]{
        margin-left: 40%;
    }
    .center input[button]:hover{
        background-color: #000;
        color: #fff;

    }
    

</style>
<link rel="favicon" href="https://static.vecteezy.com/system/resources/previews/000/377/806/original/home-vector-icon.jpg">
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
      
      window.location.href = '/home/' + id+'/'+@json($name); 
    }
  </script> 

</body>


    

</div>