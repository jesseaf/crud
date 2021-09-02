<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - LOGIN</title>

    <!-- Bootstrap -->
    <link href="painel/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="painel/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="painel/assets/dataTables/datatables.min.css" rel="stylesheet">
    <link href="painel/assets/css/toastr/toastr.min.css" rel="stylesheet">
    <link href="painel/assets/css/animate.css" rel="stylesheet">

    <style>
        .text-center {
            text-align: center;
        }
        .login{
            border:1px solid #f3f3f3;
            border-radius:5px;
            padding:15px;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                <h3 class="text-center">Painel de login</h3>
            </div>

            <div class="col-md-offset-4 col-md-4 login">
                <form action="javascript:void(0)">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Informe o email">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" id="senha" placeholder="Informe a senha">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" id="entrar">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="painel/assets/js/jquery-3.1.1.min.js"></script>
    <script src="painel/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="painel/assets/js/toastr/toastr.min.js"></script>
    
    <script>

    $(document).on('click', '#entrar', function (e) {
        var email = $('#email').val();
        var password = $('#senha').val();
            
        console.log(email +" "+ password);
        toastr.success('Tabela atualizada', 'Sucesso!');
    }); 
    
    </script>

</body>
</html>