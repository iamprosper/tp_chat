<html>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
        <title>Untitled</title>
        <link rel="stylesheet" href="ressources/css/bootstrap.min.css" />
        <link rel="stylesheet" href="ressources/css/index.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" />
    </head>
    
    <body>
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div style="" class="col-lg-5">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Login</h4>
                            </div>

                            <span style="display:none;" class="alert alert-danger" id="connexion_error"></span>

                            <form class="user" action="javascript:void(0);">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input id="username" type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Username" name="login" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="password" type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Password" name="password" />
                                    </div>
                                </div>
                                
                                <button id="login_btn" class="btn btn-primary btn-block text-white btn-user">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ajax.js"></script>
</html>