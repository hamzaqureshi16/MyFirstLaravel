<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">  
<style>
    .center{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }
    
    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
    
    tr:nth-child(even) {
        background-color: #dddddd;
    }
    tr:hover {
        background-color: #07f417;
    }
    //style the botton pagination
    .pagination {
        display: inline-block;
    }   


    
</style>
 
<body class="bg-primary">
    <a href={{ route('home') }} class="nav-link"><button  class="btn btn-success m-1 rounded bi bi-arrow-90deg-left" > Go Back Home </button></a>
    <div class="center container">
        <h1>List of users:</h1>
        <table>
            <tr>
                <th>Id</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Avatar</th>
            </tr>
            @foreach ($data as $item )
                <tr>
                    
                    <td><a href="profile/{{ $item->id }}" class="nav-link text-dark"><u>{{ $item->id }}</u></a></td>
                    <td>{{ $item->first_name }}</td>
                    <td>{{ $item->last_name }}</td>
                    <td>{{ $item->email }}</td>
                    <td><img src="{{ $item->avatar }}" alt="avatar" class="img-fluid rounded-circle" width="45px" height="45px"></td>
                    
                    <td>{{ 
                 !session()->has('user')
                 }}</td>
                        
                    
                </tr>
                
            @endforeach
        </table>
       
    </div>
    {{-- <div class="pagination" >
        
        {{ $data->links() }}
   </div> --}}
    
</body>