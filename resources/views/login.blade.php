
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>Login</title>
        <style>
            .jumbotron{
                padding:3px;
                text-align:center;
            }
        </style>
    </head>
    <body>
        <div class='row'>
            <div class="jumbotron">
                <div class="container">
                    <h2 class="display"><strong>Login</strong></h2>
                </div>
            </div>
            <div class='col-sm-4'></div> 
            <div class='col-sm-4' id="form">
                <form action="logging" class="form-group" method="POST">
                    @csrf
                    <label for="email">Email </label> <br>
                    <input type="email" class="form-control" name="email" placeholder="Email" required/>
                    <br><br>
                    <label for="password">Password </label> <br>
                    <input type="password" class="form-control" name="password" placeholder="password" required/>
                    <br><br>
                    <input type="submit" class="btn btn-primary" name="submit" value="Submit"/>
                </form>
            </div>
            <div class='col-sm-4'></div> 
        </div>
    </body>
</html>
