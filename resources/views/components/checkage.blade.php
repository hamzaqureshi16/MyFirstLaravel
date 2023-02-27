    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">  

<style>

   .center{
    margin: auto;
    width: 50%;
    padding: 10px;
    text-align: center;
    

   }
   
    label{
         font-size: 20px;
         font-weight: bold;
    }

    input{
        width: 100%;
        height: 50px;
        font-size: 20px;
    }
    
    .bg-primary{
        background-color: #007bff;
    }
    
    input[type=button]{
        background-color: #00ff48;
        color: white;
        margin: 2%;
        font-size: 20px;
        font-weight: bold;
        border: none;
        border-radius: 5px;
        width: 20%;
        cursor: pointer;
    }


</style>
<body class="bg-primary">
    <a href={{ route('home') }} class="nav-link bg-gray-100 dark:bg-gray-900"><button  class="btn btn-success m-1 rounded bi bi-arrow-90deg-left" > Go Back Home </button></a>
    <div class="center">
        <label for="age" class="bi bi-arrow-right bg-success rounded p-2">Enter your age</label>
        <br>
        <input type="number" name="age" id="age" class="rounded">
        <input type="button" value="Submit" onclick="sendage()">
    </div>
    <script>
        function sendage(){
            let age = document.getElementById('age').value;
            window.location.href = "?age=" + age;
        }
    </script>
</body>