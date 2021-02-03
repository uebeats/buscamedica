<!-- Modal -->
<div class="modal fade" id="examen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Reserva de Hora para Exámen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="formExamen" id="formExamen" method="POST">
                    <div id="examen-step">
                        <h3>Buscador de Hora</h3>
                        <section>
                            <input name="idTipoE" id="idTipoE" type="hidden" value="2">
                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label for="prevSaludE" class="label-reserva">Seleccione su previsión <span class="text-danger ml-auto">*</span></label>
                                    <select name="prevSaludE" id="prevSaludE" class="form-control" required="required">
                                        <?php
                                        /**
                                         * Consulta SQL para listar las previsiones
                                         */
                                        $v_tipo = filter_var('2', FILTER_SANITIZE_NUMBER_INT);
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
                                            <option></option>
                                            <option value="<?php echo $prevision['idprevision']; ?>"><?php echo $prevision['nombreprevision']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="tipoExamenE" class="label-reserva">Seleccione el exámen<span class="text-danger ml-auto">*</span></label>
                                    <select name="tipoExamenE" id="tipoExamenE" class="form-control" required="required">
                                        <option></option>
                                    <select>
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="comunasE" class="label-reserva">Seleccione la comuna<span class="text-danger ml-auto">*</span></label>
                                    <select name="comunasE" id="comunasE" class="form-control" required="required">
                                        <option></option>
                                    <select>
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="centroMedicoE" class="label-reserva">Seleccione el centro médico <span class="text-danger ml-auto">*</span></label>
                                    <select name="centroMedicoE" id="centroMedicoE" class="form-control" required="required">
                                        <option></option>
                                    <select>
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="medicosE" class="label-reserva">Seleccione el médico <span class="text-danger ml-auto">*</span></label>
                                    <select name="medicosE" id="medicosE" class="form-control" required="required">
                                        <option></option>
                                    <select>
                                </div>

                            </div>
                        </section>
                        <h3>Información Personal</h3>
                        <section>
                            <div class="form-row">

                                <div class="col-md-12 form-group">
                                    <label for="nameUserE" class="label-reserva">Nombre Completo <span class="text-danger ml-auto">*</span></label>
                                    <input name="nameUserE" id="nameUserE" class="form-control" placeholder="Ingrese su nombre completo" required="required">
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="rutUserE" class="label-reserva">R.U.T. <span class="text-danger ml-auto">*</span></label>
                                    <input name="rutUserE" id="rutUserE" class="form-control" placeholder="Ingrese R.U.T." required="required">
                                </div>
                            </div>

                            <div class="form-row">

                                <div class="col-md-12 form-group">
                                    <label for="phoneUserE" class="label-reserva">Teléfono <span class="text-danger ml-auto">*</span></label>
                                    <input name="phoneUserE" id="phoneUserE" class="form-control" placeholder="Ingrese su Teléfono" required="required">
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="emailUserE" class="label-reserva">Correo Electrónico <span class="text-danger ml-auto">*</span></label>
                                    <input name="emailUserE" id="emailUserE" class="form-control" placeholder="Ingrese su correo electrónico" required="required">
                                </div>

                            </div>

                            <div class="form-row">

                                <div class="col-md-6 form-group">
                                    <label for="dateAtencionE" class="label-reserva">Fecha Atención <span class="text-danger ml-auto">*</span></label>
                                    <input type="datetime" name="dateAtencionE" id="dateAtencionE" class="form-control datepicker" placeholder="DD/MM/AA" required="required">
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="hourAtencionE" class="label-reserva">Hora Atención <span class="text-danger ml-auto">*</span></label>
                                    <input type="time" name="hourAtencionE" id="hourAtencionE" class="form-control timepicker" required="required">
                                </div>

                            </div>
                        </section>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary mr-auto" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Solicitar Hora</button>
            </div>
        </div>
        </form>
    </div>
</div>
<!-- /Modals -->