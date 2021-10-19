<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<style>
    table {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        width: 60%;
        height: 70%;
        overflow: hidden;
        border-radius: 30px;        
    }

    .dados {
        background-color: gainsboro;
    }

    table tr {
        background-color: whitesmoke;
        transition: all .3s ease-in-out;
    }

    table td {
        text-align: center;
    }

    table td p{
        margin: 5px;
        padding: 5px;
        line-height: 1px;
        text-align: left;
    }

    table tr:hover {
        background-color: white;
        cursor: pointer;
    }


</style>


<body>


    <?php
    $conexao = mysqli_connect("localhost", "root", "", "tcc");
    $id_usuario = 1;
    $sql = "SELECT * FROM texto WHERE id_usuario= '$id_usuario'";
    $response = mysqli_query($conexao, $sql);
    ?>

    <table>

        <tr class="dados">
            <th>ID</th>
            <th>ID-USER</th>
            <th>TEXTO</th>
        </tr>


        <?php
        if (mysqli_num_rows($response) > 0) :

            while ($dados = mysqli_fetch_array($response)) :
        ?>

                <tr>
                    <td><?php echo $dados['id_text']; ?></td>
                    <td><?php echo $dados['id_usuario']; ?></td>
                    <td><?php echo $dados['texto']; ?></td>
                </tr>
            <?php endwhile;
        else : ?>
        <?php
        endif;
        ?>

    </table>

</body>



</html>