function validar(e) {//Botón enter
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==13){
        Login();
    }
}
function Login(){
    var user = $('#inputEmail').val()
    var pass = $('#inputPassword').val()
    console.log(user)
    console.log(pass)

    if (user == '' ||user == null || user == undefined ||pass == '' ||pass == null || pass == undefined){
        alert("Revisa tus Datos")
        return false;
    }
    var pdata = {
        "dbUser": $('#inputEmail').val(),
        "dbPass": $('#inputPassword').val()
    };


    $.ajax({
        data: pdata,
        url: 'api/v1/login.php',
        type: 'POST',
        beforeSend: function () {
            $('#response').html("<div class=\"spinner-grow text-primary\" role=\"status\">\n" +
                "  <span class=\"sr-only\">Loading...</span>\n" +
                "</div>");
        },
        success: function (response) {
            var message = response;
            //console.log("Contenido de Response");
            //console.log(message);

            var tipoAlerta = fnTipoAlerta(message.state.codstate);

            $('#response').html(tipoAlerta.concat(message.state.strstate).concat("<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\" onclick='$(\"#alert\").hide(200);'>\n" +
                "<span aria-hidden=\"true\">&times;</span></button></div>"));

            if (message.state.codstate == 1) {
                location.reload();
            }

        },
        error: function (request, status, error) {
            $('#response').html(request.responseText);
        }
    });
};

function fnTipoAlerta(codalerta) {
    if (codalerta == 1)
        return "<div id='alert' class='alert alert-success alert-dismissible fade show' role='alert'>";
    if (codalerta == 0)
        return "<div id='alert' class='alert alert-danger alert-dismissible fade show' role='alert'>";
    if (codalerta == 2)
        return "<div id='alert' class='alert alert-warning alert-dismissible fade show' role='alert'>";
    if (codalerta == 3)
        return "<div id='alert' class='alert alert-info alert-dismissible fade show' role='alert'>";

    return "<div class='alert alert-dark alert-dismissible fade show' role='alert'>";
}