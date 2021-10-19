<?php
session_start();
ob_start();

$id_usuario = isset($_POST["id_usuario"]) ? $_POST["id_usuario"] : '';
    
$texto = isset($_POST["texto"]) ? $_POST["texto"] : '';

if ($id_usuario <= 0 || strlen($texto) <= 0) {

}else {   
    $conexao = mysqli_connect("localhost", "root", "", "tcc");
    $sql = "INSERT INTO texto (id_usuario,texto) VALUES ('$id_usuario','$texto')";
    mysqli_query($conexao, $sql);
}
    

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="index.css"> -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="./assets/css/texto.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="form-body">

        <div class="response">

        </div>

        <div class="editor-body">
            <!-- Create the editor container -->
            <div id="editor">
            </div>
        </div>

        <!-- <form method="POST" action="texto.php"> -->
        <button id="submit" class="submit">Enviar</button>
    </div>
    <!-- </form> -->
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<!-- <script src="./assets/js/index.js"></script> -->
<script>
    var quill = new Quill('#editor', {
        theme: 'snow'
    });

    function appendRepsonse(value) {
        let respBox = document.querySelector(".response");
        respBox.innerHTML = send();
    }


    function getText() {

        document.getElementById(editor);
        let values = editor.firstChild.innerHTML;

        console.log(values);
        return values;
    }


    $(document).ready(function() {
        $("#submit").click(function() {
            $.ajax({
                url: 'enviarTexto.php', //This is the current doc
                type: "POST",
                data: ({
                    id_usuario: 1,
                    texto: getText()
                }),
                success: function(data) {
                }
            });
            $.ajax({
                url: 'enviarTexto.php',
                data: "",
                dataType: 'json',
                success: function(data1) {
                    var y1 = data1;
                }
            });
        });
    });
</script>

</html>