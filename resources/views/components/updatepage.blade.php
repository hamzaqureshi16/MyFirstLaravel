<body class="bg-primary">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">  
    <title>Update Profile</title>
    <style>
        form{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

        }
        span{
            color: #fff;
            font-size: 20px;
            padding: 5px;
        }

        form input{
            margin: 10px;
            width: 300px;
            height: 40px;
            border: 2px solid #000;
            border-radius: 5px;
            padding: 5px;
            font-size: 20px;

        }
        form input[type=submit]:hover{
            background-color: #000;
            color: #fff;
        }
        form input[type=submit]:hover{
            background-color: #000;
            color: #fff;
        }
        body{
            background-color: #000;
        } 

        form input[type=text]:focus, form input[type=email]:focus, form input[type=password]:focus{
            border: 2px solid #000;
            outline: none;
        }

    </style>

    <form action="{{ route('update') }}" method="POST">
    
    @csrf
    <span>Update Profile</span>
    <br>
    <input type="text" name="first_name" id="first_name" placeholder="First Name" value="{{ $user->first_name }}">
    <br>
    <input type="text" name="last_name" placeholder="Last Name" id="last_name" value="{{ $user->last_name }}">
    <br>
    <input type="email" name="email" placeholder="Email" value="{{ $user->email }}" >
    <br>
    <input type="hidden" name="id" id="id" value='{{ $user->id }}'>
    <input type="submit" value="Update" class="btn-success btn">
    
</form>


</body>