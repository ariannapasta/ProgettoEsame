<html>
<?php
    require_once "boostrap.php";
?>
   

<body style="background-color:#E32D7D">
    <form action="index.php" method="post">

        <div style="text-align:center; color:white; margin-left:20px; margin-top: 20px; width: 100%;">
            <h1> Accedi </h1>
        </div>
        <div align="center" class="container-fluid" style=" color:white; margin-left:20px; margin-top: 20px; width: 100%;">
            <div class="form-group col-md-6">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
            </div>
            <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
            </div>
            <div align="center" style="width: 100%;">
                <button type="submit" name="submit" class="btn btn-info" >Accedi</button>
            </div>
        </div>
    </form>

</body>

</html>