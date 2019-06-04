<html>
<?php

require_once "connect.php";
require_once "boostrap.php";
require_once "read.php";
?>

<body style="background-color:#E32D7D" onload="hideTITLE(null)">

    <div style="width:100%; text-align:center;">
        <?php
        global $conn;

        if (isset($_POST['submit'])) {
            $username = $_POST["username"];
            $password = $_POST["password"];


            $sql = "SELECT * FROM utente WHERE Username='$username' AND Password='$password'";
            $userpass = $conn->query($sql);

            if ($userpass->num_rows > 0) {
                while ($row = $userpass->fetch_assoc()) {
                    echo "<h1 style='color:white'>" . $row['Nome'] . " " . $row['Cognome'] . "</h1>";
                }
            }
        }
        ?>
    </div>
    <div id="r" style="clear:both; text-align:center; margin-top: 20px; width: 100%;">
        <div style="width: 20%; float:left; margin-top: 10%;">
            <b><button type="button" id="titleAPPUNTAMENTO" class="btn btn-info btn-block" onclick="hideTITLE('APPUNTAMENTO')" style="font-size:20px; display:inline;margin-left:10px;margin-right:10px; margin-bottom:20px">APPUNTAMENTO</b></button><br><br>
            <b><button type="button" id="titleSERVIZI" class="btn btn-info btn-block" onclick="hideTITLE('SERVIZI')" style="font-size:20px; display:inline;margin-left:10px;margin-right:10px; margin-bottom:20px">SERVIZI</b></button><br><br>
            <b><button type="button" id="titleORARI" class="btn btn-info btn-block" onclick="hideTITLE('ORARI')" style="font-size:20px; display:inline;margin-left:10px;margin-right:10px; margin-bottom:20px">ORARI</b></button><br><br>
        </div>


        <div class="c" style="height:100%; width: 80%; float:right; ">

            <!--APPUNTAMENTO-->
            <div class="div" id="APPUNTAMENTO">
                <form action="appuntamento.php" method="post">
                    <?php
                    $lunedi = array(null);
                    $martedi = array("8:00", "19:00");

                    echo "<h1>" . date("d/m/Y") . "</h1>";

                    echo "
                    <table class='table table-striped' style='margin-top:30px; width:100%'>
                        <thead>
                            <tr>
                                <th scope='col'>Orario</th>
                                <th scope='col'>Appuntamento</th>
                            </tr>
                        </thead>
                        <tbody>";
                    $data = date("d/m/Y");
                    $giorno = giorno($data);

                    if ($giorno == "martedì") {
                        $orainizio=mktime(8,0,0,0,0,0);
                        $mezzOra = 1800;
                        $d=$orainizio+$mezzOra;
                        echo $d;
                        
                        while ($orainizio < $orafine) {
                            echo "<tr>
                                <td> </td>";
                            echo "</tr>";
                        }
                    }


                    echo "  <tr>
                                  <th> </th>
                                <td></td>

                            </tr>
                            <tr>
                                <th scope='row'></th>
                                <td></td>

                            </tr>
                            <tr>
                                <th scope='row'></th>
                                <td></td>

                            </tr>
                        </tbody>
                </table>";

                    ?>

                    <!--Creo la tabella con php e conrollo che giorno è in base a quello l'output deve essere
                    gli orari di quel determinato giorno-->
                    <table class="table table-striped" style="margin-top:30px; width:100%">
                        <thead>
                            <tr>
                                <th scope="col">Orario</th>
                                <th scope="col">Appuntamento</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <td>Mark</td>

                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>

                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>

                            </tr>
                        </tbody>
                    </table>

                </form>
            </div>
            <!--SERVIZI-->
            <div class="div" id="SERVIZI">
                <h1>SERVIZI</h1>
                <table class="table table-striped" style="margin-top:30px; width:100%">
                    <thead>
                        <tr class="table-active">
                            <th scope="col">Servizio</th>
                            <th scope="col">Descrizione</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Colore Zer035 Color Hair Tech</td>
                            <td>Trattamento con ABC OLIGOMIN 5. Cinque minerali essenziali: Silicio, Magnesio, Rame, Ferro e Zinco.</td>
                        </tr>
                        <tr>
                            <td>Colore Zer035 Color Ammonia Free</td>
                            <td>Trattamento colore capelli in crema SENZA AMMINIACA con sistema NPS. Zer035 Color Ammonia Free copre al 100% i capelli bianchi.</td>
                        </tr>
                        <tr>
                            <td>Mineral Color Oil</td>
                            <td>Trattamento colore capelli IN OLIO con oli essenziali: Argan biologico, calendula, camomilla. Senza Ammoniaca, nichel e iodio.</td>
                        </tr>
                        <tr>
                            <td>Illumia Color Mask </td>
                            <td> Trattamento cosmetico che unisce l’azione colorante a quella condizionante e ristrutturante.
                                La sua formulazione a PH acido scalda, armonizza e ammorbidisce i capelli ravvivando
                                il colore o ottenendo pigmentazioni differenti che gradualmente si eliminano con lo shampoo.
                                Illumia Color Mask contiene lo speciale Olio di Nyamplung dalle straordinarie proprietà benefiche:
                                <ul>
                                    <li>AZIONE ILLUMINANTE</li>
                                    <li>AZIONE ANTIOSSIDANTE e PROTETTIVA protegge da raggi ultravioletti e da radicali liberi</li>
                                    <li>AZIONE RIGENERANTE e RINVIGORENTE rafforza i capelli donando un aspetto sano e vitale</li>
                                    <li>AZIONE SETIFICANTE, AMMORBIDENTE e VOLUMIZZANTE dona estrema morbidezza e setosità senza appesantire i capelli, grazie al suo potere emolliente non grasso</li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Taglio</td>
                            <td>Prenditi cura di te! Valorizza e rendi unico il tuo look. Capriccio acconciature è a tua disposizione per creare il taglio giusto per te per uno stile in grado
                                di esaltare la tua bellezza in ogni occasione speciale.</td>
                        </tr>
                        <tr>
                            <td>Lisciante alla Keratina</td>
                            <td>Avete i capelli crespi oppure ricci e non sempre riuscite a tenerli a bada? Oltre ai rimedi più classici e quindi phon e piastra lisciante potete ricorrere
                                anche a dei trattamenti liscianti alla cheratina. I liscianti alla Keratina sono trattamenti senza formaldeide, totalmente privi di sostanze pericolose
                                quali glutaraldeide, paraffine ed altri derivati del petrolio. La cheratina rende il capello più luminoso, elimina il crespo e protegge il capello dalle aggressioni esterne.</td>
                        </tr>
                        <tr>
                            <td>Colpi di sole, Shatoush</td>
                            <td>C’è un’ottima soluzione per chi vuole cambiare look senza stravolgerlo, chi desidera dare una ‘rinfrescata’ alla capigliatura ma non osa tingere: lo SHATOUSH è una
                                tecnica di schiaritura che dona l’effetto “sole” in modo naturale, o i COLPI DI SOLE creati su misura per ogni singola cliente .
                                I colpi di sole sono un’ottima soluzione per tutte le donne che amano essere sempre a posto e prendersi cura della propria bellezza. Grazie ai colpi di sole
                                di Capriccio acconciature avrete la possibilità di trovare la giusta sfumatura in modo da avere una chioma trendy personalizzata.</td>
                        </tr>
                        <tr>
                            <td>Acconciature</td>
                            <td>Acconciature per essere sempre più belle. Scopri le nostre proposte per creare insieme a voi il look che maggiormente rispecchia la vostra voi e meglio rispecchia
                                la vostra personalità L’acconciatura rappresenta infatti un elemento fondamentale per il vostro look, sia con capelli lunghi che corti. Acconciature da sposa, cerimonia, sera. </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!--ORARI-->
            <div class="div" id="ORARI">
                <h1>ORARI</h1>
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <th scope="row">Lunedì</th>
                            <td>CHIUSO</td>
                        </tr>
                        <tr>
                            <th scope="row">Martedì</th>
                            <td>8:00-12:00</td>
                        </tr>
                        <tr>
                            <th scope="row">Mercoledì</th>
                            <td>14:00-19:00</td>
                        </tr>
                        <tr>
                            <th scope="row">Giovedì</th>
                            <td>8:00-12:00 / 14:00-19:00</td>
                        </tr>
                        <tr>
                            <th scope="row">Venerdì</th>
                            <td>8:00-12:00 / 14:00-19:00</td>
                        </tr>
                        <tr>
                            <th scope="row">Sabato</th>
                            <td>8:00-19:00 <br> ORARIO CONTINUATO</td>
                        </tr>

                    </tbody>
                </table>
            </div>


        </div>




    </div>
</body>

</html>