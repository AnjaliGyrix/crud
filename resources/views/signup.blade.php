
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>Sign up</title>

        <style>
            h3{
                text-align:center;
            }
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
                    <h2 class="display"><strong>Signup</strong></h2>
                </div>
            </div>
            <div class='col-sm-4'></div> 
            <div class='col-sm-4' id="form">
                <form action="submit" class="form-group" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="username">Username </label>
                    <input type="text" class="form-control" name="username" placeholder="Username" required/>
                    <br>
                    <label for="email">Email </label> 
                    <input type="email" class="form-control" name="email" placeholder="Email" required/>
                    <br>
                    <label for="gender" class="form-check-label" >Gender</label> &nbsp;
                    <input type="radio" class="form-check-input" name="gender" value="male"/>Male &nbsp;&nbsp;
                    <input type="radio" class="form-check-input" name="gender" value="female"/>Female
                    <br><br>
                    <label for="dob"> Date of Birth </label> 
                    <input type="date" class="form-control" name="dob" required/>
                    <br>
                    <label for="password">Password </label> 
                    <input type="password" class="form-control" name="password" placeholder="password" required/>
                    <br>
                    <button type="submit" class="btn btn-primary" name="submit"> Submit</button>
                </form>
            </div>
            <div class='col-sm-4'></div> 

        </div>
    </body>
</html>
