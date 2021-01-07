<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body>
        <h2> Hello {{session('email')}} </h2>
        <div>
        <a href="/logout"><button class="btn-sm btn-primary">Logout</button></a>
        <a href="/signup"><button class="btn-sm btn-primary">Add User</button></a>
        </div>
        <div class="container">
            <h2>User List</h2>
            <table class="table table-info table-bordered ">
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>    
                        <th>Username</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Date of birth</th>
                        <th>Operations</th>
                    <tr>
                </thead>
                <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user['id']}}</td>    
                    <td>{{$user['username']}}</td>
                    <td>{{$user['email']}}</td>
                    <td>{{$user['gender']}}</td>
                    <td>{{$user['dob']}}</td>
                    <td><br><a href="delete/{{$user['id']}}"><button class="btn-primary">Delete</button></a><br><br> 
                    <a href="update/{{$user['id']}}"><button class="btn-primary">Update</button></a>
                    </td>

                <tr>
            @endforeach
            </tbody>
            </table>

            <span style="text-decoration:none;"> 
                {{$users->links()}}    
            </span>
        </div>
    </body>
</html>
