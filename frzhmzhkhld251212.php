<?php

    // allow the config
    define('__CONFIG__', true);
    // require the config
    require_once "inc/config.php";

    ForceLogin();
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="/assets/style.css">
    <title>Perguruan Budaya</title>


</head>
<body>
    <nav>
        <h4>Dashboard</h4>
    </nav>

    <div class="container mt-4 con-profile">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="avatar-ctn">
                        <img src="/assets/img/logohero.png" class="avatar" alt="user profile picture"/>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Perguruan Budaya</h5>
                        <p class="card-text"></p>
                        <a href="/" class="btn btn-primary">Website Budaya</a>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="card text-center">
                    <div class="card-header">
                        <h4>Ubah Password</h4>
                    </div>
                    <div class="card-body">
                        <form class="uk-form-stacked js-change">
                            <div class="mb-2">
                                <label for="password" class="form-label"></label>
                                <div class="form-controls">
                                    <input type="Password" required id="password" name="password" placeholder="Password" class="form-control">
                                </div>
                            </div>

                            <div class="uk-margin">
                                <button type="submit" class="btn btn-primary mb-2">Ubah</button>
                            </div>

                            <div class="uk-margin uk-alert uk-alert-danger js-error" style="display: none;"></div>
                            
                        </form>
                    </div>
                    <div class="card-footer text-muted">
                        Perguruan Budaya
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <?php require_once "inc/footer.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>