<?php require("../includes/header.php"); ?>
<?php require("../includes/navbar4.php"); ?>
<div class="container">
        <div class="row justify-content-md-center">
            <div class="col-sm-6 mt-5">
               <?php 
               
               foreach($lista as $candidato)
               {
            
                   echo "<div class='shadow-lg p-3 mb-5 bg-body rounded'>";
                        echo"<h1 class='text-center'>Candidato</h1>";
                           echo" <p class='text-center'>Numero identificacion: " .$candidato['numeroIdentificacion']. "</p>";
                           echo" <p class='text-center'>Nombre:" .$candidato['nombre']. " </p>";
                           echo" <p class='text-center'>Direccion: " .$candidato['direccion']. "</p>";
                           echo" <p class='text-center'>Telefono: " .$candidato['telefono']. "</p>";
                           echo" <p class='text-center'>Numero de hijos: " .$candidato['cantidadHijos']. "</p>";
                           echo" <p class='text-center'>Genero: " .$candidato['genero']. "</p>";
                           echo" <p class='text-center'>Estado civil: " .$candidato['estadoCivil']. "</p>";
                           echo" <p class='text-center'>Numero de mascotas: " .$candidato['cantidadMascotas']. "</p>";
                           echo" <p class='text-center'>Nivel de escolaridad: " .$candidato['nivelEscolaridad']. "</p>";
                    echo"</div>";
               }

               foreach($listar as $respuesta)
               {
                   
                    echo "<div class='shadow-lg p-3 mb-5 bg-body rounded'>";
                    echo "<div class='col-12'>";
                        echo "<label for='telefono' class='form-label'>1.Hago amigos fácilmenteecho </label>";
                        echo "<input type='text' class='form-control' id='respuesta1' name='respuesta1' value=" .$respuesta['pregunta1']. ">";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='shadow-lg p-3 mb-5 bg-body rounded'>";
                    echo "<div class='col-12'>";
                        echo "<label for='telefono' class='form-label'>2.Me intereso rápidamente por los demásecho </label>";
                        echo "<input type='text' class='form-control' id='respuesta1' name='respuesta1' value=" .$respuesta['pregunta2']. ">";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='shadow-lg p-3 mb-5 bg-body rounded'>";
                    echo "<div class='col-12'>";
                        echo "<label for='telefono' class='form-label'>3.Me siento a gusto estando con otras personasecho </label>";
                        echo "<input type='text' class='form-control' id='respuesta1' name='respuesta1' value=" .$respuesta['pregunta3']. ">";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='shadow-lg p-3 mb-5 bg-body rounded'>";
                    echo "<div class='col-12'>";
                        echo "<label for='telefono' class='form-label'>4.Me comporto como soy con los demásecho </label>";
                        echo "<input type='text' class='form-control' id='respuesta1' name='respuesta1' value=" .$respuesta['pregunta4']. ">";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='shadow-lg p-3 mb-5 bg-body rounded'>";
                    echo "<div class='col-12'>";
                        echo "<label for='telefono' class='form-label'>5.Animo a los demásecho </label>";
                        echo "<input type='text' class='form-control' id='respuesta1' name='respuesta1' value=" .$respuesta['pregunta5']. ">";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='shadow-lg p-3 mb-5 bg-body rounded'>";
                    echo "<div class='col-12'>";
                        echo "<label for='telefono' class='form-label'>6.Es difícil llegar a conocermeecho </label>";
                        echo "<input type='text' class='form-control' id='respuesta1' name='respuesta1' value=" .$respuesta['pregunta6']. ">";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='shadow-lg p-3 mb-5 bg-body rounded'>";
                    echo "<div class='col-12'>";
                        echo "<label for='telefono' class='form-label'>7.A menudo me siento incómodo con los demásecho </label>";
                        echo "<input type='text' class='form-control' id='respuesta1' name='respuesta1' value=" .$respuesta['pregunta7']. ">";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='shadow-lg p-3 mb-5 bg-body rounded'>";
                    echo "<div class='col-12'>";
                        echo "<label for='telefono' class='form-label'>8.Evito el contacto con los demásecho </label>";
                        echo "<input type='text' class='form-control' id='respuesta1' name='respuesta1' value=" .$respuesta['pregunta8']. ">";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='shadow-lg p-3 mb-5 bg-body rounded'>";
                    echo "<div class='col-12'>";
                        echo "<label for='telefono' class='form-label'>9.No me interesan demasiado los demásecho </label>";
                        echo "<input type='text' class='form-control' id='respuesta1' name='respuesta1' value=" .$respuesta['pregunta9']. ">";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='shadow-lg p-3 mb-5 bg-body rounded'>";
                    echo "<div class='col-12'>";
                        echo "<label for='telefono' class='form-label'>10.Mantengo la distancia con los demássecho </label>";
                        echo "<input type='text' class='form-control' id='respuesta1' name='respuesta1' value=" .$respuesta['pregunta10']. ">";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='shadow-lg p-3 mb-5 bg-body rounded'>";
                     echo "<div class='col-12'>";
                        echo "<label class='form-label'>11.Me encantan las fiestas grandes </label>";
                        echo "<input type='text' class='form-control'   value=" .$respuesta['pregunta11']. ">";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='shadow-lg p-3 mb-5 bg-body rounded'>";
                    echo "<div class='col-12'>";
                        echo "<label class='form-label'>12.Hablo con mucha gente diferente en las fiestas </label>";
                        echo "<input type='text' class='form-control'   value=" .$respuesta['pregunta12']. ">";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='shadow-lg p-3 mb-5 bg-body rounded'>";
                    echo "<div class='col-12'>";
                        echo "<label class='form-label'>13.Disfruto de ser parte de un grupo </label>";
                        echo "<input type='text' class='form-control'    value=" .$respuesta['pregunta13']. ">";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='shadow-lg p-3 mb-5 bg-body rounded'>";
                    echo "<div class='col-12'>";
                        echo "<label class='form-label'>14.Involucro a los demás en lo que hago </label>";
                        echo "<input type='text' class='form-control'   value=" .$respuesta['pregunta14']. ">";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='shadow-lg p-3 mb-5 bg-body rounded'>";
                    echo "<div class='col-12'>";
                        echo "<label class='form-label'>15.Me encantan las fiestas sorpresa </label>";
                        echo "<input type='text' class='form-control'   value=" .$respuesta['pregunta15']. ">";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='shadow-lg p-3 mb-5 bg-body rounded'>";
                    echo "<div class='col-12'>";
                        echo "<label class='form-label'>16.Prefiero estar solo </label>";
                        echo "<input type='text' class='form-control'   value=" .$respuesta['pregunta16']. ">";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='shadow-lg p-3 mb-5 bg-body rounded'>";
                    echo "<div class='col-12'>";
                        echo "<label class='form-label'>17.Quiero que me dejen en paz. </label>";
                        echo "<input type='text' class='form-control'   value=" .$respuesta['pregunta17']. ">";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='shadow-lg p-3 mb-5 bg-body rounded'>";
                    echo "<div class='col-12'>";
                        echo "<label for='telefono' class='form-label'>18.No me gustan los eventos multitudinarios </label>";
                        echo "<input type='text' class='form-control'   value=" .$respuesta['pregunta18']. ">";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='shadow-lg p-3 mb-5 bg-body rounded'>";
                    echo "<div class='col-12'>";
                        echo "<label for='telefono' class='form-label'>19.Evito las multitudes. </label>";
                        echo "<input type='text' class='form-control'   value=" .$respuesta['pregunta19']. ">";
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='shadow-lg p-3 mb-5 bg-body rounded'>";
                    echo "<div class='col-12'>";
                        echo "<label class='form-label'>20.Busco la tranquilidad. </label>";
                        echo "<input type='text' class='form-control'    value=" .$respuesta['pregunta20']. ">";
                    echo "</div>";
                    echo "</div>";

               }
               
               ?>
               
            </div>
        </div>
    </div>

<?php require("../includes/footer.php"); ?>

