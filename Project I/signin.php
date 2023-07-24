<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Login Form</h2>
                <form action="validation.php" method="post">


                    <div class="form-group">
                        <lable>UserName</lable>
                        <input type="text" name="user" class="form-control">

                    </div>

                    <div class="form-group">
                        <lable>Password</lable>
                        <input type="password" name="password" class="form-control">
                        <button type="submit" class="btn btn-primary mt-3">Login</button>

                    </div>
                </form>
            </div>

            <div class="col-lg-6">
                <h2>Sign-in Form</h2>
                <form action="registration.php" method="post">


                    <div class="form-group">
                        <lable for="user" >UserName</lable>
                        <input type="text" name="user" class="form-control">

                    </div>

                    <div class="form-group">
                        <lable for="password">Password</lable>
                        <input type="password" name="password" class="form-control">
                        <button type="submit" class="btn btn-primary mt-3">Signin</button>

                    </div>
                </form>

            </div>

        </div>
    </div>
</body>

</html>