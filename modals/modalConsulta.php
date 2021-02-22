<!-- Modal -->
<div class="modal fade" id="consulta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="horaConsulta">Reserva de hora para Consulta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="formConsulta" id="formConsulta" method="POST">
                    <div id="consulta-step">
                        <h3>Información para búsqueda</h3>
                        <section>
                            <input name="idTipoC" id="idTipoC" type="hidden" value="1">
                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label for="prevSaludC" class="label-reserva">Seleccione su previsión <span class="text-danger ml-auto">*</span></label>
                                    <select name="prevSaludC" id="prevSaludC" class="form-control" required="required">
                                        <option value="0">Selecciona una opción </option>
                                        <?php
                                        /**
                                         * Consulta SQL para listar las previsiones
                                         */
                                        $v_tipo = filter_var('1', FILTER_SANITIZE_NUMBER_INT);
                                        /*
                                        1 = Consulta, 
                                        2 = Examen, 
                                        3 = Video Consulta, 
                                        4 = Higienización 
                                        */

                                                        $stmt_prev = $con->prepare(
                                                            "
                                        SELECT prevision.nombreprevision, prevision.idprevision FROM prevision, medicoprevision 
                                        WHERE prevision.idprevision = medicoprevision.idprevision 
                                        AND SUBSTRING(medicoprevision.tipo, " . $v_tipo . ", 1) <> '0' 
                                        AND medicoprevision.tipo <> '' 
                                        GROUP BY prevision.nombreprevision, prevision.idprevision"
                                        );

                                        $stmt_prev->execute();
                                        $previsiones = $stmt_prev->fetchAll();

                                        foreach ($previsiones as $prevision) { ?>
                                            <option value="<?php echo $prevision['idprevision']; ?>"><?php echo $prevision['nombreprevision']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="espeMedicaC" class="label-reserva">Seleccione la especialidad <span class="text-danger ml-auto">*</span></label>
                                    <select name="espeMedicaC" id="espeMedicaC" class="form-control" required="required">
                                    <select>
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="comunasC" class="label-reserva">Seleccione la comuna <span class="text-danger ml-auto">*</span></label>
                                    <select name="comunasC" id="comunasC" class="form-control" required="required">
                                    <select>
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="centroMedicoC" class="label-reserva">Seleccione el centro médico <span class="text-danger ml-auto">*</span></label>
                                    <select name="centroMedicoC" id="centroMedicoC" class="form-control" required="required">
                                    <select>
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="medicoC" class="label-reserva">Seleccione el médico <span class="text-danger ml-auto">*</span></label>
                                    <select name="medicoC" id="medicoC" class="form-control" required="required">
                                    <select>
                                </div>
                            </div>
                        </section>
                        <h3>Información Personal</h3>
                        <section>
                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label for="nameUser" class="label-reserva">Nombre Completo <span class="text-danger ml-auto">*</span></label>
                                    <input name="nameUserC" id="nameUser" class="form-control" placeholder="Ingrese su nombre completo" required="required">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="rutUser" class="label-reserva">R.U.T. <span class="text-danger ml-auto">*</span></label>
                                    <input name="rutUserC" id="rutUser" class="form-control" placeholder="Ingrese R.U.T." required="required">
                                    <span id="validateRut1"></span>
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="phoneUser" class="label-reserva">Teléfono <span class="text-danger ml-auto">*</span></label>
                                    <input name="phoneUserC" id="phoneUser" class="form-control" placeholder="Ingrese su Teléfono" required="required">
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="emailUser" class="label-reserva">Correo Electrónico <span class="text-danger ml-auto">*</span></label>
                                    <input name="emailUserC" id="emailUser" class="form-control" placeholder="Ingrese su correo electrónico" required="required">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label for="dateAtencion" class="label-reserva">Fecha Atención <span class="text-danger ml-auto">*</span></label>
                                    <input type="datetime" name="dateAtencionC" class="form-control datepicker" id="dateAtencion" placeholder="DD/MM/AA" required="required">
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="hourAtencion" class="label-reserva">Hora Atención <span class="text-danger ml-auto">*</span></label>
                                    <input type="time" name="hourAtencionC" class="form-control timepicker" id="hourAtencion" required="required">
                                </div>

                            </div>
                        </section>
                    </div>
                    <p class="text-center mt-3"><small>Los campos con (<span class="text-danger ml-auto">*</span>) son obligatorios.</small></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary mr-auto" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary" id="btnConsulta">Solicitar Hora</button>
            </div>
        </div>
        </form>
        
    </div>
</div>
<!-- /Modals -->