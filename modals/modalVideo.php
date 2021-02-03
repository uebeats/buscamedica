<!-- Modal -->
<div class="modal fade" id="videoconsulta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Formulario Reserva de Hora para Video Consulta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="formVideo" id="formVideo" method="POST">
                    <div id="videoconsulta-step">
                        <h3>Buscador de Hora</h3>
                        <section>
                            <input name="idTipoV" id="idTipoV" type="hidden" value="3">
                            <div class="form-row">
                                <div class="col-md-12 form-group">
                                    <label for="prevSaludV" class="label-reserva">Seleccione su previsión <span class="text-danger ml-auto">*</span></label>
                                    <select name="prevSaludV" id="prevSaludV" class="form-control" required="required">
                                        <?php
                                        /**
                                         * Consulta SQL para listar las previsiones
                                         */
                                        $v_tipo = filter_var('3', FILTER_SANITIZE_NUMBER_INT);
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
                                    <label for="espeMedicaV" class="label-reserva">Seleccione la especialidad<span class="text-danger ml-auto">*</span></label>
                                    <select name="espeMedicaV" id="espeMedicaV" class="form-control" required="required">
                                        <select>
                                </div>

                            </div>
                        </section>
                        <h3>Información Personal</h3>
                        <section>
                            <div class="form-row">

                                <div class="col-md-12 form-group">
                                    <label for="nameUserV" class="label-reserva">Nombre Completo <span class="text-danger ml-auto">*</span></label>
                                    <input name="nameUserV" id="nameUserV" class="form-control" placeholder="Ingrese su nombre completo" required="required">
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="rutUserV" class="label-reserva">R.U.T. <span class="text-danger ml-auto">*</span></label>
                                    <input name="rutUserV" id="rutUserV" class="form-control" placeholder="Ingrese R.U.T." required="required">
                                </div>
                            </div>

                            <div class="form-row">

                                <div class="col-md-12 form-group">
                                    <label for="phoneUserV" class="label-reserva">Teléfono <span class="text-danger ml-auto">*</span></label>
                                    <input name="phoneUserV" id="phoneUserV" class="form-control" placeholder="Ingrese su Teléfono" required="required">
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="emailUserV" class="label-reserva">Correo Electrónico <span class="text-danger ml-auto">*</span></label>
                                    <input type="email" name="emailUserV" id="emailUserV" class="form-control" placeholder="Ingrese su correo electrónico" required="required">
                                </div>

                            </div>

                            <div class="form-row">

                                <div class="col-md-6 form-group">
                                    <label for="dateAtencionV" class="label-reserva">Fecha Atención <span class="text-danger ml-auto">*</span></label>
                                    <input type="datetime" name="dateAtencionV" id="dateAtencionV" class="form-control datepicker" placeholder="DD/MM/AA" required="required">
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="hourAtencionV" class="label-reserva">Hora Atención <span class="text-danger ml-auto">*</span></label>
                                    <input type="time" name="hourAtencionV" id="hourAtencionV" class="form-control timepicker" required="required">
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