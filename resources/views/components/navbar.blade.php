
<div>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    
    <nav class="navbar navbar-expand-lg navbar-light bg-primary ">
        <img src="https://image.freepik.com/free-vector/cool-monkey-logo-design-vector-illustrator_56473-421.jpg" width="50" height="50" class="m-2 rounded-circle d-inline-block align-top" alt="">
        <a class="navbar-brand font-weight-bold " href="#">Monkey Box</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href={{ route('about') }}>About</a>
            </li>
          
            
            @if ($name != '')
            <li class="nav-item">
              <a class="nav-link"  ><b>{{ $name }}</b></a>
            </li>    
            @endif
            
            
            
             <li class="nav-item">
              <a href="{{ route('checkage') }}" class="nav-link">Check age</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('request') }}" class="nav-link">View Data</a>
            </li>
            @if($name != '')
            <li class="nav-item">
              <a href='{{ route('logout') }}' class="nav-link btn btn-danger rounded">Logout</a>
            </li>
            @else
            <li class="nav-item">
              <a href="{{ route('login') }}" class="nav-link btn btn-danger rounded m-1">Login</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('register') }}" class="nav-link btn btn-success rounded m-1">Register</a>
            </li>
            @endif
            
            
             
          </ul>
        </div>
      </nav> 

</div>
<script>
  function logout(){
    {{ session()->flush() }}
    
    window.location.href = '/form';
  }
</script>
