<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/coding.css">
</head>
<header>
    <h1>Administration Page</h1>
    <nav>
        <ul class="menu">
        </ul>
    </nav>
</header>
<main>
    <body>
    <div class="container">
        <img class="img-fluid mx-auto d-block" src="CODING_LOGO.png" alt="Logo epitech">
    </div>

    <div>
        <p><?php echo "Welcome on the administration side."; ?></p>
    </div>


    <div class="row">
        <div class="col-sm-4">



<!--Formulaire pour créer un nouvel utilisateur-->
         <div class="d-lg-inline-block">
             <form method="POST" action="createuser.php">
                   <div class="form-row d-flex">
                       <div class="form-group col-md-6 createname">
                           <label for="username">Username</label>
                          <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                       </div>
                       <div class="form-group col-md-6 createpass">
                           <label for="password">Password</label>
                           <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                       </div>

                       <div class="form-group col-md-12 createmail">
                           <label for="email">Email</label>
                           <input type="email" class="form-control" id="email" name="email" placeholder="Email@exemple.exemple" required>
                           <input type="submit" class="btn btn-primary signin" name="CreateUser" value="CreateUser"/>
                      </div>
                   </div>
             </form>
         </div>
        </div>



<!--Formulaire pour supprimer un utilisateur-->
                <form method="POST" action="deleteuser.php">
                    <div class="form-row d-flex">
                        <div class="form-group col-md-10">
                            <label for="username">Username to Delete</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                            <input type="submit" class="btn btn-primary signin" name="DeleteUser" value="DeleteUser"/>
                        </div>
                        </div>
                </form>


        <!--Formulaire pour supprimer un utilisateur-->
                <form method="POST" action="createuser.php">
                    <div class="form-row d-flex">
                        <div class="form-group col-md-10">
                            <label for="username">Username to Edit</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                            <label for="edit">New logs</label>
                            <input type="text" class="form-control" id="newusername" name="newusername" placeholder="New Username" >
                            <input type="text" class="form-control" id="newemail" name="newemail" placeholder="New Email">
                            <input type="text" class="form-control" id="newpassword" name="newupassword" placeholder="New Password">
                            <input type="submit" class="btn btn-primary signin" name="EditUser" value="EditUser"/>
                        </div>
                        </div>
                </form>

        <!--Formulaire pour afficher un utilisateur-->
                <form method="POST" action="createuser.php">
                    <div class="form-row d-flex">
                        <div class="form-group col-md-10">
                            <label for="username">Username to Display</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                            <input type="submit" class="btn btn-primary signin" name="CreateUser" value="DisplayUser"/>
                        </div>
                    </div>
                </form>


    </div>







        <button type="logout" class="btn btn-primary signin logoutbutton" name="submit"><a href="logout.php" class="logout">Logout</a></button>
    </body>
</main>
</html>