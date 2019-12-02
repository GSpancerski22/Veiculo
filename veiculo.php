<div class="container">
	<?php
		$id = "";
		//pegar o id do quadrinho
		if ( isset ( $parametro[1] ) ) {
			$id = trim ( $parametro[1] );
		}

		//selecionar o quadrinho
		$sql = "select * from veiculo 
			where id = ".(int)$id." limit 1";
		//executar o sql
		$result = mysqli_query($con, $sql);

		//separar os dados
		$row = mysqli_fetch_array( $result );
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
            