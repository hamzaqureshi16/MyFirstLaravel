<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">  
<style>
    .center {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        font-family: 'Open Sans', sans-serif;
    }

    .row {
        margin-bottom: 20px;
    }

    img {
        max-width: 200px;
        border-radius: 50%;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        border: 5px solid #fff;

    }

    label {
        font-size: 18px;
        color: #fff;
        border: 1px solid #fff;
        border-radius: 5px;
        padding: 5px;
        margin: 5px;
        

    }
</style>
<body class="bg-primary">
    
    <div class="center container">
        <h1 class="text-center"><u>Your Profile</u></h1>
        <div class="row">
            <div class="col-4">
                <img src="{{ $user->avatar }}" class="rounded-circle" alt="avatar">
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <label for="name">Name</label>
            </div>
            <div class="col-8">
                <label for="name">{{$user->first_name}} {{ $user->last_name }}</label>
            </div>
        </div>
        
        <div class="row">
            <div class="col-4">
                <label for="email">Email</label>
            </div>
            <div class="col-8">
                <label for="email">{{$user->email}}</label>
            </div>
        </div>
        <div class="row">
            <a href="/updatepage/{{ $user->id }}" class="nav-link"><button class="btn btn-warning rounded">Update Profile</button></a> 
        </div>

</body>   