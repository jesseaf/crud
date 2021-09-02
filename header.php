<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - AJAX</title>

    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/dataTables/datatables.min.css" rel="stylesheet">
    <link href="assets/css/toastr/toastr.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    
    <!--teste-->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .footer {
            
            border-top: 1px solid #e7eaec;
            bottom: 0;
            left: 0;
            padding: 10px 20px;
            position: fixed;
            right: 0;
        }
        a{
            text-transform:uppercase;
        }
        center{
            text-transform:uppercase;
        }
        small{
            font-size: 10px;
        }
        center#countPessoa, #countBancos, #countProfissoes {
            font-weight: bold;
            font-size: 25px;
        }
        .dados{
            display:none;
        }
        #dadosTable > .form-horizontal .form-group {
            margin-right: 0 !important;
            margin-left: 0 !important;
        }
    </style>

</head>
<body>
    
<header>
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">CRUD</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <!-- <li><a href="#">Arquivo</a></li> -->
                    <li><a href="index.php">Home</a></li>
                    <!-- <li><a href="usuario.php?id=usuario">Pessoas</a></li>
                    <li><a href="banco.php?id=banco">Bancos</a></li> -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastros <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="usuario.php?id=usuario">Pessoas</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="banco.php?id=banco">Bancos</a></li>                            
                        </ul>
                    </li>
                </ul>                                    
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>
<input type="hidden" id="idUrl" value="<?=$_GET['id']?>" />