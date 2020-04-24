<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SDrive</title>
    <?php $this->load->view("includes/includes_styles.php") ?>
</head>
<body>
    <div class="container">
        <h1 class="font-4 head text-center">SDrive</h1>
    </div>
    <div class="container text-center">
        <form action="<?php echo base_url("homepage/upload") ?>" method="post" class="dropzone" id="fileupload"></form>
        <hr>
    </div>
    <div class="container">
        <?php foreach ($files as $file){ ?>
        <div class="file text-center">
            <div class="trash">
                <form method="get" action="<?php echo base_url("homepage/delete") ?>">
                    <input type="hidden" value="<?php echo $file ?>" name="filename">
                    <button class="btn btn-outline-danger my-2"><i class="fa fa-trash"></i></button>
                </form>
            </div>
            <a href="<?php echo base_url("uploads") . "/" . $file ?>">
                <img class="file-image" src="<?php echo base_url("assets") ?>/file.png" alt="file">
            </a>
            <h1 class="lead"><?php echo $file ?></h1>
        </div>
        <?php } ?>
    </div>


    <?php $this->load->view("includes/includes_scripts.php") ?>
</body>
</html>