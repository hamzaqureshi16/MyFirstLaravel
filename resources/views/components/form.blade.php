<body class="bg-primary">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">  
    <title>Form</title>
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
        form input[type=text]:focus, form input[type=email]:focus, form input[type=password]:focus{
            border: 2px solid #000;
            outline: none;
        }

    </style>
    <a href={{ route('home') }} class="nav-link"><button  class="btn btn-success m-1 rounded bi bi-arrow-90deg-left" > Go Back Home </button></a>
    <form action="/submit" method="POST" class="center" autocomplete="off" onsubmit="submit()">
        @csrf
        <input type="text" name="name" class="rounded" placeholder="Enter your name">
        <br>
        @error('name')<span class="bg-danger rounded">{{ $message }}</span> @enderror
        <br>
        <input type="email" name="email" class="rounded" placeholder="Enter your email">
        <br>
        @error('email')<span class="bg-danger rounded">{{ $message }}</span> @enderror
        <br>
        <input type="password" name="password" class="rounded" placeholder="Enter your password">
        <br>
        @error('password')<span class="bg-danger rounded">{{ $message }}</span> @enderror
        <br>
        <input type="submit" value="Submit" class="rounded btn btn-success">
    </form>

</body>