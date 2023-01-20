<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url('publics/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('publics/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('publics/css/style.css') ?>">
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 shadow p-4 border mt-5">
                <?php echo form_open("Welcome/connect",["class" => "form-group","id"=>"form-connect"]) ?>
                <input name='pseudo' type="text" class='form-control mb-2' placeholder='Pseudo'>
                <input name='passwd' type="password" placeholder='Mot de passe' class='form-control mb-2'>
                <input type="submit" class='btn btn-primary btn-block' value='Se connecter'>
                <hr>
                <span class='float-right'><a href="#">Mot de passe oublié ?</a></span>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

    

    <script src="<?= base_url('publics/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('publics/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('publics/js/all.min.js') ?>"></script>
    <script src="<?= base_url('publics/js/app.js') ?>"></script>
</body>
</html>