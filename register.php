<?php 
    
    // allow the config
    define('__CONFIG__', true);
    // require the config
    require_once "inc/config.php";

    ForceDashboard();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perguruan Budaya</title>

    <base href="/" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
    <nav>   
        <h4>Perguruan Budaya</h4>
    </nav>

    <div class="container-sm align-self-center">
        <div class="card">
            <div class="card-header">
                <h4>Authentication</h4>  
            </div>
            <div class="card-body">
                <form class="uk-form-stacked js-register">
                    <div class="mb-2">
                        <label for="username" class="form-label"></label>
                        <div class="uk-form-controls">
                            <input type="text" required id="username" name="username" placeholder="Username" class="form-control">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="password" class="form-label"></label>
                        <div class="form-controls">
                            <input type="Password" required id="password" name="password" placeholder="Password" class="form-control">
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label"></label>
                        <div class="form-controls">
                            <input type="Password" required id="password" name="password" placeholder="Confirm Password" class="form-control">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <button type="submit" class="btn btn-primary mb-2">Register</button>
                    </div>

                    <div class="uk-margin uk-alert uk-alert-danger js-error" style="display: none;"></div>
                    
                </form>
            </div>
        </div>
    </div>

    <div class="uk-section uk-container">
        <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>
            
        </div>
    </div>

    <?php require_once "inc/footer.php"; ?>

    
    
</body>
</html>