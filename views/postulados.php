<?php require("../includes/header.php"); ?>
<?php require("../includes/navbar2.php"); ?>
<div class="container">
        <div class="row justify-content-md-center">
            <div class="col-sm-6 mt-5">
               <?php 

                    if($lista)
                    {
                        foreach($lista as $candidato)
                        {
                            echo "<div class='shadow-lg p-5 mb-5 bg-body rounded'>";
                                echo "<form method='post'>";
                                echo "<h5 class='text-center'>Presentado por:</h5>";
                                echo "<input name='id' type='hidden' value=" .$candidato['id']. ">";
                                echo "<h4 class='text-center'>" .$candidato['nombre']. "</h4>";
                                echo "<h4 class='text-center'>" .$candidato['numeroIdentificacion']. "</h4>";
                                echo "<div class='text-center mt-4'>";
                                echo "<a class='btn btn-danger active mx-3' type='submit' href='C_eliminar.php?id=".$candidato['id']."' >Eliminar candidato</a>";
                                    echo "<a class='btn btn-info ms-3' type='submit' href='C_respuestas.php?numeroIdentificacion=".$candidato['numeroIdentificacion']."' >Ver respuestas</a>";
                                echo "</div>";
                                echo"</form>";
                            echo "</div>";
                        }
                    }
                       
                    
                    else{
                        echo "<div class='shadow-lg p-5 mb-5 bg-body rounded'>";
                              
                              
                        echo "<h4 class='font-monospace ms-5'>Usted no tiene Candidatos </h4>";
                        echo "<h4 class='font-monospace ms-5'>Hasta el momento</h4>";
                   
                    echo "</div>";
                    }
                  
               ?>
            </div>
        </div>
    </div>
<?php require("../includes/footer.php"); ?>