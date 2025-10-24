<?php

require_once ("conn.php");

$resultado = mysqli_query($conn,"select * from tbFilme"); 


    echo"</br></br>";

     echo"<Table border=1>";
     echo"<tr>";
     echo"<td>Código</td><td>Nome</td><td>Código Gênero</td><td>Gênero</td><td>Código Diretor</td><td>Diretor</td>";
     echo"</tr>";

     while($linha = mysqli_fetch_array($resultado)) 
    { 
            echo"<tr>";
                echo"<td>";
                    echo $linha['codFilme'];
                echo"</td>";
            echo"<td>";
                echo $linha['ator'];
                echo"</td>";
            echo"</tr>";    
    }
    echo"</table>";
?>