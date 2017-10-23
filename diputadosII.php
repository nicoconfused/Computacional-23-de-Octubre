<?php include('header.php')?>

<div class="container">
<div class="row">
<div class="col-sm-12 py-5">
<?php
$csv = array_map('str_getcsv', file('data/eleccion_diputados.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
?>

<hr id="tabla">



<h3>Chile Vamos</h3>

      <table class="table table-bordered table-striped table-responsive">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Genero</th>
            <th>Partido</th>

          </tr>
        </thead>
        <tbody>
          <?php for($a = 0; $a < $total = count($csv); $a++){?>
                <?php if(($csv[$a]["Lista/Pacto"])=="Chile Vamos"){?>
          <tr>
            <td>
                        <?php echo($csv[$a]["Candidato Nombre"])?>
                  <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                  <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                  <td><?php echo($csv[$a]["Genero"])?></td>
            </td>
                    <td><?php echo($csv[$a]["Partido Politico"])?></td>

          </tr>
                <?php };?>
          <?php };?>
        </tbody>
      </table>

        <hr>

        <h3>La Fuerza de la Mayoría</h3>

              <table class="table table-bordered table-striped table-responsive">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Genero</th>
                    <th>Partido</th>

                  </tr>
                </thead>
                <tbody>
                  <?php for($a = 0; $a < $total = count($csv); $a++){?>
                        <?php if(($csv[$a]["Lista/Pacto"])=="La fuerza de la Mayoria"){?>
                  <tr>
                    <td>
                                <?php echo($csv[$a]["Candidato Nombre"])?>
                          <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                          <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                          <td><?php echo($csv[$a]["Genero"])?></td>
                    </td>
                            <td><?php echo($csv[$a]["Partido Politico"])?></td>

                  </tr>
                        <?php };?>
                  <?php };?>
                </tbody>
              </table>

                <hr>

                <h3>Sumemos</h3>

                      <table class="table table-bordered table-striped table-responsive">
                        <thead>
                          <tr>
                            <th>Nombre</th>
                            <th>Genero</th>
                            <th>Partido</th>

                          </tr>
                        </thead>
                        <tbody>
                          <?php for($a = 0; $a < $total = count($csv); $a++){?>
                                <?php if(($csv[$a]["Lista/Pacto"])=="Sumemos"){?>
                          <tr>
                            <td>
                                        <?php echo($csv[$a]["Candidato Nombre"])?>
                                  <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                                  <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                                  <td><?php echo($csv[$a]["Genero"])?></td>
                            </td>
                                    <td><?php echo($csv[$a]["Partido Politico"])?></td>

                          </tr>
                                <?php };?>
                          <?php };?>
                        </tbody>
                      </table>

                        <hr>

                        <h3>Unión Patriótica</h3>

                              <table class="table table-bordered table-striped table-responsive">
                                <thead>
                                  <tr>
                                    <th>Nombre</th>
                                    <th>Genero</th>
                                    <th>Partido</th>

                                  </tr>
                                </thead>
                                <tbody>
                                  <?php for($a = 0; $a < $total = count($csv); $a++){?>
                                        <?php if(($csv[$a]["Lista/Pacto"])=="Unión Patriótica"){?>
                                  <tr>
                                    <td>
                                                <?php echo($csv[$a]["Candidato Nombre"])?>
                                          <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                                          <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                                          <td><?php echo($csv[$a]["Genero"])?></td>
                                    </td>
                                            <td><?php echo($csv[$a]["Partido Politico"])?></td>

                                  </tr>
                                        <?php };?>
                                  <?php };?>
                                </tbody>
                              </table>

                                <hr>

                                <h3>Convergencia Democrática</h3>

                                      <table class="table table-bordered table-striped table-responsive">
                                        <thead>
                                          <tr>
                                            <th>Nombre</th>
                                            <th>Genero</th>
                                            <th>Partido</th>

                                          </tr>
                                        </thead>
                                        <tbody>
                                          <?php for($a = 0; $a < $total = count($csv); $a++){?>
                                                <?php if(($csv[$a]["Lista/Pacto"])=="Convergencia Democrática"){?>
                                          <tr>
                                            <td>
                                                        <?php echo($csv[$a]["Candidato Nombre"])?>
                                                  <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                                                  <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                                                  <td><?php echo($csv[$a]["Genero"])?></td>
                                            </td>
                                                    <td><?php echo($csv[$a]["Partido Politico"])?></td>

                                          </tr>
                                                <?php };?>
                                          <?php };?>
                                        </tbody>
                                      </table>

                                        <hr>

                                        <h3>Trabajadores Revolucionarios</h3>

                                              <table class="table table-bordered table-striped table-responsive">
                                                <thead>
                                                  <tr>
                                                    <th>Nombre</th>
                                                    <th>Genero</th>
                                                    <th>Partido</th>

                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <?php for($a = 0; $a < $total = count($csv); $a++){?>
                                                        <?php if(($csv[$a]["Lista/Pacto"])=="Trabajadores revolucionarios"){?>
                                                  <tr>
                                                    <td>
                                                                <?php echo($csv[$a]["Candidato Nombre"])?>
                                                          <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                                                          <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                                                          <td><?php echo($csv[$a]["Genero"])?></td>
                                                    </td>
                                                            <td><?php echo($csv[$a]["Partido Politico"])?></td>

                                                  </tr>
                                                        <?php };?>
                                                  <?php };?>
                                                </tbody>
                                              </table>

                                                <hr>
                                                <h3>Independiente</h3>

                                                      <table class="table table-bordered table-striped table-responsive">
                                                        <thead>
                                                          <tr>
                                                            <th>Nombre</th>
                                                            <th>Genero</th>
                                                            <th>Partido</th>

                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <?php for($a = 0; $a < $total = count($csv); $a++){?>
                                                                <?php if(($csv[$a]["Lista/Pacto"])=="Independiente"){?>
                                                          <tr>
                                                            <td>
                                                                        <?php echo($csv[$a]["Candidato Nombre"])?>
                                                                  <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                                                                  <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                                                                  <td><?php echo($csv[$a]["Genero"])?></td>
                                                            </td>
                                                                    <td><?php echo($csv[$a]["Partido Politico"])?></td>

                                                          </tr>
                                                                <?php };?>
                                                          <?php };?>
                                                        </tbody>
                                                      </table>

                                                        <hr>
                                                        <h3>Por todo Chile</h3>

                                                              <table class="table table-bordered table-striped table-responsive">
                                                                <thead>
                                                                  <tr>
                                                                    <th>Nombre</th>
                                                                    <th>Genero</th>
                                                                    <th>Partido</th>

                                                                  </tr>
                                                                </thead>
                                                                <tbody>
                                                                  <?php for($a = 0; $a < $total = count($csv); $a++){?>
                                                                        <?php if(($csv[$a]["Lista/Pacto"])=="Por Todo Chile"){?>
                                                                  <tr>
                                                                    <td>
                                                                                <?php echo($csv[$a]["Candidato Nombre"])?>
                                                                          <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                                                                          <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                                                                          <td><?php echo($csv[$a]["Genero"])?></td>
                                                                    </td>
                                                                            <td><?php echo($csv[$a]["Partido Politico"])?></td>

                                                                  </tr>
                                                                        <?php };?>
                                                                  <?php };?>
                                                                </tbody>
                                                              </table>

                                                                <hr>

                                                                <h3>Coalición Regionalista Verde</h3>

                                                                      <table class="table table-bordered table-striped table-responsive">
                                                                        <thead>
                                                                          <tr>
                                                                            <th>Nombre</th>
                                                                            <th>Genero</th>
                                                                            <th>Partido</th>

                                                                          </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                          <?php for($a = 0; $a < $total = count($csv); $a++){?>
                                                                                <?php if(($csv[$a]["Lista/Pacto"])=="Coalición Regionalista Verde"){?>
                                                                          <tr>
                                                                            <td>
                                                                                        <?php echo($csv[$a]["Candidato Nombre"])?>
                                                                                  <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                                                                                  <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                                                                                  <td><?php echo($csv[$a]["Genero"])?></td>
                                                                            </td>
                                                                                    <td><?php echo($csv[$a]["Partido Politico"])?></td>

                                                                          </tr>
                                                                                <?php };?>
                                                                          <?php };?>
                                                                        </tbody>
                                                                      </table>

                                                                        <hr>

                                                                        <h3>Frente Amplio</h3>

                                                                              <table class="table table-bordered table-striped table-responsive">
                                                                                <thead>
                                                                                  <tr>
                                                                                    <th>Nombre</th>
                                                                                    <th>Genero</th>
                                                                                    <th>Partido</th>

                                                                                  </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                  <?php for($a = 0; $a < $total = count($csv); $a++){?>
                                                                                        <?php if(($csv[$a]["Lista/Pacto"])=="Frente Amplio"){?>
                                                                                  <tr>
                                                                                    <td>
                                                                                                <?php echo($csv[$a]["Candidato Nombre"])?>
                                                                                          <?php echo($csv[$a]["Candidato Apellido Paterno"])?>
                                                                                          <?php echo($csv[$a]["Candidato Apellido Materno"])?>
                                                                                          <td><?php echo($csv[$a]["Genero"])?></td>
                                                                                    </td>
                                                                                            <td><?php echo($csv[$a]["Partido Politico"])?></td>

                                                                                  </tr>
                                                                                        <?php };?>
                                                                                  <?php };?>
                                                                                </tbody>
                                                                              </table>

                                                                                <hr>








</div>
</div>
</div>
<?php include('footer.php')?>
