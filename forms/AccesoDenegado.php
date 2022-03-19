<!--
/**
 * @Created_by: Intellij IDEA
 * @User: Fernando Cardona
 * @Date:  19-Oct-21
 * @Time: 11:15 AM
 * @Version: 1.0
 */-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Agenda</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        .pt-3-half {
            padding-top: 1.4rem;
        }
    </style>
</head>
<body>
    <div class="card" id="Modal">
        <div class="modal-header text-center green-grad">
            <h4 class="modal-title w-100 white-text font-weight-bold">PERMISO DENEGADO</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#Modal').fadeOut();">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <br>
        <div class="modal-body text-center">
            <h3>No cuenta con la autorizacion para acceder a este recurso.</h3>
        </div>
    </div>
</body>
</html>