<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Oficina NET</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="vendor/datatables/select.dataTables.min.css" rel="stylesheet">
    <link href="vendor/datatables/buttons.dataTables.min.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet"> </head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav"> <a class="navbar-brand" href="index.php">Oficina NET</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                    <a class="nav-link" href="index.php?page=1"> <i class="fa fa-fw fa-table"></i> <span class="nav-link-text">Clientes</span> </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion"> <i class="fa fa-fw fa-wrench"></i> <span class="nav-link-text">Components</span> </a>
                    <ul class="sidenav-second-level collapse" id="collapseComponents">
                        <li> <a href="navbar.html">Navbar</a> </li>
                        <li> <a href="cards.html">Cards</a> </li>
                    </ul>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion"> <i class="fa fa-fw fa-file"></i> <span class="nav-link-text">Example Pages</span> </a>
                    <ul class="sidenav-second-level collapse" id="collapseExamplePages">
                        <li> <a href="login.html">Login Page</a> </li>
                        <li> <a href="register.html">Registration Page</a> </li>
                        <li> <a href="forgot-password.html">Forgot Password Page</a> </li>
                        <li> <a href="blank.html">Blank Page</a> </li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                    <a class="nav-link text-center" id="sidenavToggler"> <i class="fa fa-fw fa-angle-left"></i> </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <form class="form-inline my-2 my-lg-0 mr-lg-2">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Search for..."> <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span> </div>
                    </form>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#exampleModal"> <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="content-wrapper">
        <div class="container-fluid">
            <div class="card mb-3">
                <?php
                        if(isset($_GET['page'])) {
                        $redireciona = $_GET['page'];
                        } else {
                        $redireciona = '';
                        }

                        if($redireciona == 0 || $redireciona == ""){
                            echo "Inicio";
                        }elseif ($redireciona == 1) {
                            include("pages/Cliente.php");
                        }elseif ($redireciona == 2) {
                            
                        }elseif ($redireciona == 3) {
                            
                        }elseif ($redireciona == 4) {
                            
                        }elseif ($redireciona == 5) {
                            
                        }elseif ($redireciona == 6) {
                            
                        }
                    ?>
            </div>
        </div>
        <!-- /.container-fluid-->
        <!-- /.content-wrapper-->
        <footer class="sticky-footer">
            <div class="container">
                <div class="text-center"> <small>Copyright © Your Website 2017</small> </div>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top"> <i class="fa fa-angle-up"></i> </a>
        <!-- Logout Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button> <a class="btn btn-primary" href="login.html">Logout</a> </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <!-- Page level plugin JavaScript-->
        <script src="vendor/chart.js/Chart.min.js"></script>
        <script src="vendor/datatables/jquery.dataTables.js"></script>
        <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

        <script src="vendor/datatables/dataTables.buttons.min.js"></script>
        <script src="vendor/datatables/dataTables.select.min.js"></script>
        <script src="vendor/datatables/dataTables.editor.min.js"></script>
        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin.min.js"></script>
        <!-- Custom scripts for this page-->
        <script src="js/sb-admin-datatables.min.js"></script>
        <script src="js/sb-admin-charts.min.js"></script>
         <script src="js/notify.min.js"></script>
        <script type="text/javascript" language="javascript">
            $(document).ready(function () {
                $('#add_button').click(function () {
                    $('#user_form')[0].reset();
                    $('.modal-title').text("Adicionar Cliente");
                    $('#action').val("btnSalvarCliente");
                    $('#operation').val("Add");
                });

                $(document).on('submit', '#user_form', function (event) {
                    event.preventDefault();
                    $.ajax({
                        url: "pages/insertClientes.php"
                        , method: 'POST'
                        , data: new FormData(this)
                        , contentType: false
                        , processData: false
                        , success: function (data) {
                            $('#user_form')[0].reset();
                            $('#modalAddCliente').modal('hide');
                            $.notify("Cliente Adicionado com Sucesso", "success");
                            dataTable.ajax.reload();
                        }
                    });
                });

                var dataTable = $('#dataTableCliente').DataTable({
                    "processing": true,
                    "serverSide": true,
                    //"select":true,
                    "ajax": {
                        url: 'pages/BuscaCliente.php',
                        type: 'POST'
                    },
                    "columns": [
                        {"data": "cod_cli"},
                        {"data": "nome"},
                        {"data": "tel_fixo"},
                        {"data": "tel_cel"},
                        {"data": "email"},
                        {"data": "uf"},
                        {
                            sortable: false,
                            "render": function ( data, type, full, meta ) {
                                var buttonID = full.cod_cli;
                                 return '<button type="button" id='+buttonID+' data-toggle="modal" data-target="#modalAddCliente" class="fa fa-pencil-square-o btn btn-info"></button>'  
                        }
             },
                    ]
                });

                $('#example').on('click', 'a.editor_remove', function (e) {
                    alert(1);
                    e.preventDefault();
                    
                    editor.remove( $(this).closest('tr'), {
                        title: 'Delete record',
                        message: 'Are you sure you wish to remove this record?',
                        buttons: 'Delete'
                    } );
                } );

                

            });
        </script>
    </div>
</body>

</html>