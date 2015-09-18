<?php
 
 $query = "SELECT idRutaG,DescripcionRuta from rutasguardadas";
 $data = mysql_query($query);
 ?>
<div class="alert alert-success" id="msg">
        <div class="row">
            <div class="col-md-1 fa fa-check" style="font-style: italic"></div>

            <div class="col-md-5">
                <p id="mensaje"></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-7"></div>

            <div class="col-md-5">
                <button class="btn btn-primary btn-md pull-right" id="new">Nuevo</button>
            </div>
        </div>
    </div>

    <section class="panel panel-default pos-rlt clearfix" id="contenido">
        <header class="panel-heading">
            <i class="fa fa-list"></i> Registro de Ruta
        </header>

        <div class="content">
            <br>

            <div class="container" id="wizard">
                <h2>Paso 1</h2>

                <section class="panel panel-default">
                    <h3 class="font-bold">Inserte lo Siguiente Datos</h3>
                    <hr>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-5">
                                <p>Identificador del Camion</p><input class="form-control" data-required="true" data-trigger="change" id="IdCamion" placeholder="Identificador" type="text"> <span class="Error" id="ErrorIdentificador"></span>

                                <p class="m-t">Nombre del Chofer</p><input class="form-control letras" data-required="true" data-trigger="change" id="NombreChofer" placeholder="Nombre" type="text"> <span class="Error" id="ErrorNombre"></span>
                            </div>

                            <div class="col-lg-5">
                                <p>Fecha de salida</p>

                                <div class="row">
                                    

                                    <div class="col-md-2">
                                            <label>Dia</label>
                                            <select class="form-control" id="dia" style="width: auto;">
                                            <option value="">
                                                </option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">0</option>
                                            <option value="11">1</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                            <label>Mes</label>
                                            <select class="form-control" id="mes" style="width: auto;">
                                            <option value="">
                                                </option>

                                            <option value="1">Ene</option>
                                            <option value="2">Feb</option>
                                            <option value="3">Mar</option>
                                            <option value="4">Abr</option>
                                            <option value="5">May</option>
                                            <option value="6">Jun</option>
                                            <option value="7">Jul</option>
                                            <option value="8">Ago</option>
                                            <option value="9">Sep</option>
                                            <option value="10">Oct</option>
                                            <option value="11">Nov</option>
                                            <option value="12">Dic</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3" style="margin-left:10px;">
                                            <label>Año</label>
                                            <select class="form-control" id="year" style="width: auto;">
                                            <option value="">
                                                </option>

                                            <option value="2015">
                                                2015
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                            <label>Horas</label>
                                            <select class="form-control" id="horas" style="width: auto;">
                                            <option value="">
                                                </option>

                                            <option value="00">00</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                        </select>
                                    </div>

                                    <div class="col-md-2">
                                            <label>Minutos</label>
                                            <select class="form-control" id="minutos" style="width: auto;">
                                            <option value="">
                                                </option>

                                            <option value="00">00</option>
                                            <option value="05">05</option>
                                            <option value="10">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                            <option value="25">25</option>
                                            <option value="30">30</option>
                                            <option value="35">35</option>
                                            <option value="40">40</option>
                                            <option value="45">45</option>
                                            <option value="50">50</option>
                                            <option value="55">55</option>
                                        </select>
                                    </div>
                                </div>
                                <span class="Error" id="ErrorFecha"></span>
                            </div>
                        </div>
                    </div>
                </section>

                <h2>Paso 2</h2>

                <section>
                    <h3 class="font-bold">Asigne la ruta</h3>
                    <hr>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="pull-left jumbotron" id="map_canvas" style="width:100%; height:350px;"></div>
                        </div>

                        <div class="col-lg-6" >
                            <div class="row">
                                <h4>Opcion 2.- Buscar la ruta</h4>
                                <hr>
                                <div class="col-lg-6">
                                    <p>Origen</p><input class="form-control" data-required="true" data-trigger="change" id="origen" name="origen" placeholder="calle, ciudad, estado..." type="text">
                                </div>
                                <div class="col-lg-6">
                                    <p>Destino</p><input class="form-control" data-required="true" data-trigger="change" id="destino" name="destino" placeholder="calle, ciudad, estado..." type="text">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button class="btn btn-primary pull-right" style="margin-top:5px;" id="buscar" type="button" value="Buscar ruta">Buscar</button>
                                </div>
                            </div>
                            <div class="row">
                                <h4>Opcion 2.- Selecciones una ruta ua existente</h4>
                                <hr>
                                <div class="col-lg-12">
                                    <select id="valorRutaEx">
                                        <?php
                                            echo "<option></option>";
                                            while ($Registro = mysql_fetch_assoc($data)) {
                                                    echo "<option value=".$Registro["idRutaG"].">".$Registro["DescripcionRuta"]."</option>";
                                             } 
                                         ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <h2>Paso 3</h2>

                <section>
                    <h3 class="font-bold">Agregue los Puntos de interes</h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-7">
                            <div id="googleMap" style="width:100%; height:350px;"></div>
                        </div>

                        <div class="col-md-5">
                            <div class="panel-body" id="divInteres">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table" id="tablaInteres">
                                            <tr>
                                                <th>Descripcion</th>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <h2>Finalizar</h2>

                <section>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="images/logo1.PNG">

                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2>Finalizar el Proceso de creacion de Ruta</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h3>Informacion de la ruta</h3>
                                </div>
                            </div>
                            <div class="row">
                                <ul>
                                    <li><span id="firstStep"></span></li>
                                    <li><span id="secondStep"></span></li>
                                    <li>
                                        <div style="overflow:scroll;">
                                            <table id="thirtStep">
                                                <th>
                                                    <td>
                                                        Puntos de interes
                                                    </td>    
                                                </th>
                                            </table>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>