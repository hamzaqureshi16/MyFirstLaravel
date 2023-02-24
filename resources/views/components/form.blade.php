<body class="bg-primary">
    <link rel="favicon" href="https://static.vecteezy.com/system/resources/previews/000/377/806/original/home-vector-icon.jpg">
    <title>Form</title>
    <style>
        form{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

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

    <form action="/home" method="POST" class="center" autocomplete="off">
        @csrf
        <input type="text" name="name" class="rounded" placeholder="Enter your name">
        <br>
        <input type="email" name="email" class="rounded" placeholder="Enter your email">
        <br>
        <input type="password" name="password" class="rounded" placeholder="Enter your password">
        <br>
        <input type="submit" value="Submit" class="rounded btn btn-success">
    </form>

</body>