<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">

        <title>coder utils</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?php echo base_url("assets/css/style.css"); ?> rel="stylesheet">

        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script>
        <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="<?php echo base_url("assets/js/ie10-viewport-bug-workaround.js"); ?>"></script>
        <script src="<?php echo base_url("assets/js/scripts.js"); ?>"></script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        </head>

        <body>

        <!-- Static navbar -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="."></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <?php $current_url=end($this->uri->segment_array()); ?>
                
                <li <?php if(strcmp('/',$current_url) == 0) echo "class='active'"; ?> >
                    <a href="<?php echo FCPATH."/"; ?>">Home</a>
                </li>
                <li <?php if(strcmp('color',$current_url) == 0) echo "class='active'"; ?> >
                    <a href="<?php echo FCPATH."/index.php?color"; ?>">Color</a>
                </li>
                <li <?php if(strcmp('json',$current_url) == 0) echo "class='active'"; ?> >
                    <a href="<?php echo FCPATH."/index.php?json"; ?>">Json</a>
                </li>
                <li <?php if(strcmp('code_formatter',$current_url) == 0) echo "class='active'"; ?> >
                    <a href="<?php echo FCPATH."/index.php?code_formatter"; ?>">Code Prettifier</a>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
        </div>
        </nav>
