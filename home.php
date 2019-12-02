<div class="container">
    <div class="row">
    <?php
        $sql = "select id , placa , modelo, valor
        from select id , placa , modelo, valor
        from veiculo
        order by rand()";

        $result = mysqli_query($con, $sql);

        while ($row =  mysqli_fetch_array($result)){
            $id     = $row ["id"];
            $placa  = $row ["placa"];
            $modelo = $row ["modelo"];
            $valor  = $row ["valor"];
            $modelo = utf8_encode($modelo);
            $valor = number_format($valor,2,",",".");

            echo"<div class='row container'>
            <div class='col-sm-3 m-4'> 
            $id <br>
            $placa <br>
            $modelo <br>
            $valor<br>
            </div>
            <p class='text-center'>
                <a href='veiculo/$id' class='btn btn-success'>nsdfkjs</a>         
            </p>
            
            </div>";
            

        }
    ?>
    </div>
</div>