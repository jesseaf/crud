var dataTableUsuario = $('#usuario').DataTable({
    "lengthMenu": [[5, 10, 25, 50, 100, 1000], [5, 10, 25, 50, 100, "total"]],
    "responsive": true,
    "processing": true,
    "serverSide": true,
    /* "pagingType": "numbers", */
    "ajax": {
        url: "dataTables/usuarios.php",
        type: "post"
    },
    "oLanguage": {
        "sLengthMenu": "Mostrar _MENU_ registros por pagina",
        "sZeroRecords": "Nenhum registro encontrado",
        "sInfo": "Mostrando _START_ / _END_ de _TOTAL_ registro(s)",
        "sInfoEmpty": "Mostrando 0 / 0 de 0 registros",
        "sInfoFiltered": "(filtrado de _MAX_ registros)",
        "sSearch": "Pesquisar: ",
        "sProcessing": "procurando, aguarde... ",
        "oPaginate": {
            "sFirst": "Inicio",
            "sPrevious": "Anterior",
            "sNext": "Proximo",
            "sLast": "Ultimo"
        }
    },
    "aaSorting": [[4, 'desc']]
});

$('#usuario tbody').on('click', 'tr', function () {
    
    $('.teste').removeClass('dados');    
    $('.teste').addClass('animated bounceInRight');
    

    var data = dataTableUsuario.row( this ).data();
    $("#idTable").val(data[0]);
    $("#nameTable").val(data[1]);
    $("#emailTable").val(data[3]);
    $("#sexoTable").val(data[2]);
    $("#situacaoTable").val(data[6]);
    $("#dtCadastroTable").val(data[5]);
    $("#dtAlteracaoTable").val(data[4]);
    console.log(data);
    console.log( 'You clicked on '+data[0]+'\'s row' );
} );

var dataTable = $('#bancos').DataTable({
    "lengthMenu": [[5, 10, 25, 50, 100, 1000], [5, 10, 25, 50, 100, "total"]],
    "responsive": true,
    "processing": true,
    "serverSide": true,
    "ajax": {
        url: "dataTables/bancosDataTable.php",
        type: "post"
    },
    "oLanguage": {
        "sLengthMenu": "Mostrar _MENU_ registros por pagina",
        "sZeroRecords": "Nenhum registro encontrado",
        "sInfo": "Mostrando _START_ / _END_ de _TOTAL_ registro(s)",
        "sInfoEmpty": "Mostrando 0 / 0 de 0 registros",
        "sInfoFiltered": "(filtrado de _MAX_ registros)",
        "sSearch": "Pesquisar: ",
        "sProcessing": "procurando, aguarde... ",
        "oPaginate": {
            "sFirst": "Inicio",
            "sPrevious": "Anterior",
            "sNext": "Proximo",
            "sLast": "Ultimo"
        }
    },
    "aaSorting": [[4, 'desc']]
});

$(document).on('click', '#editarUsuario', function (e) {
    e.preventDefault();
    var per_id = $(this).data('id');
    var per_name = $(this).attr('name');
    console.log(per_id + " NOME: " + per_name);
    $('#content-data').html('');
    $.ajax({
        url: 'modal/usuario.php',
        type: 'POST',
        data: {
            id: per_id,
            name: per_name
        },
        dataType: 'html'
    }).done(function (data) {
        $('#content-data').html('');
        $('#content-data').html(data);
    });
});

$(document).on('click', '#editarBanco', function (e) {
    e.preventDefault();
    var per_id = $(this).data('id');
    var per_name = $(this).attr('name');
    console.log(per_id + " NOME: " + per_name);
    $('#content-data').html('');
    $.ajax({
        url: 'modal/banco.php',
        type: 'POST',
        data: {
            id: per_id,
            name: per_name
        },
        dataType: 'html'
    }).done(function (data) {
        $('#content-data').html('');
        $('#content-data').html(data);
    });
});

$(document).on('click', '#novoUsuario', function (e) {
    e.preventDefault();
    var per_id = $(this).data('id');
    var per_name = $(this).attr('name');
    console.log(per_id + " NOME: " + per_name);
    $('#content-data').html('');
    $.ajax({
        url: 'modal/usuario.php',
        type: 'POST',
        data: {
            id: ""
        },
        dataType: 'html'
    }).done(function (data) {
        $('#content-data').html('');
        $('#content-data').html(data);
    });
});

$(document).on('click', '#novoBanco', function (e) {
    e.preventDefault();
    var per_id = $(this).data('id');
    var per_name = $(this).attr('name');
    console.log(per_id + " NOME: " + per_name);
    $('#content-data').html('');
    $.ajax({
        url: 'modal/banco.php',
        type: 'POST',
        data: {
            id: ""
        },
        dataType: 'html'
    }).done(function (data) {
        $('#content-data').html('');
        $('#content-data').html(data);
    });
});

$(document).on('click', '#cadastrarUsuario', function (e) {
    e.preventDefault();     
    $('#modalUsuario').modal('hide');


//                        toastr.options = {
//                            closeButton: true,
//                            progressBar: true,
//                            positionClass: "toast-top-center",
//                            showMethod: 'slideDown',
//                            timeOut: 4000
//                        };
//                        toastr.success('Responsive Admin Theme', 'Welcome to INSPINIA');
    
    
    $.ajax({
        url: 'controller/PessoaController.php',
        type: 'POST',
        data: {
            nome: $('#txtname').val(),
            email: $('#txtemail').val(),       
            sexo: $('#sexo').val()
        },
    }).done(function (data) {
        dataTableUsuario.ajax.reload();
        console.log(data);
    });          
});

$(document).on('click', '#cadastrarBanco', function (e) {
    e.preventDefault();     
    $('#modalBanco').modal('hide');


//                        toastr.options = {
//                            closeButton: true,
//                            progressBar: true,
//                            positionClass: "toast-top-center",
//                            showMethod: 'slideDown',
//                            timeOut: 4000
//                        };
//                        toastr.success('Responsive Admin Theme', 'Welcome to INSPINIA');
    
    
    $.ajax({
        url: 'controller/BancoController.php',
        type: 'POST',
        data: {
            nome: $('#txtname').val(),
            email: $('#txtemail').val(),       
            sexo: $('#sexo').val()
        },
    }).done(function (data) {
        dataTableUsuario.ajax.reload();
        console.log(data);
    });          
});

$(document).on('click', '#refresh', function (e) {
    e.preventDefault();  
    dataTableUsuario.ajax.reload();     
    
    toastr.options = {
        closeButton: true,
        progressBar: true,
        positionClass: "toast-top-center",
        showMethod: 'slideDown',
        timeOut: 3000
    };
    toastr.success('Tabela atualizada', 'Sucesso!');
    
});

//CONTADORES
$.ajax({
    dataType: 'json',
    type: 'POST',
    url: 'classes/Count.class.php',
    success: function (response) {
        console.log(response);
        $('#countPessoa').html(response[0][0]['pessoas']);                                                                                                                     
        $('#countBancos').html(response[0][0]['bancos']);      
        $('#countProfissoes').html(response[0][0]['profissoes']);     
    },
    error: function(response){
        console.log(response);
    }
});