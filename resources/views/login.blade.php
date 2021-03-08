@extends('layouts.app')
@section("content")
<!--<div class="container custom-login">
        <div class="col-sm-4">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>-->
<div class="container custom-login">
    <section class="formRegister"><h2 style="text-align: center">Sign In</h2></section>
    <form name="myForm" action="lib/register.php" method="post" onsubmit="return checkForBlank()">
        <div class ='form-group'>
            <label for="task">E-mail:</label>
            <input type="email" class="form-control" placeholder="Enter email address" name="email">
        </div>
        <div class ='form-group'>
            <label for="task">Password:</label>
            <input type="password" class="form-control" placeholder="Enter password" name="pwd">
        </div>
        <br>
        <div class="row">
            <div class="col-6"><button type="submit" class="btn btn-primary">Login</button></div>
            <div class="col-6"><a class="registerBtn" href="register.php">Register</a></div>
        </div>
    </form>
</div>
</div>
@endsection
