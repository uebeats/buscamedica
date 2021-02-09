<!-- Modal -->
<div class="modal fade" id="higienizacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Reserva Higienización Rayos UV-C</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form name="formHigienizacion" id="formHigienizacion" method="POST">
                    <div id="higienizacion-step">
                        <h3>Información Personal</h3>
                        <section>
                            <div class="form-row">

                                <div class="col-md-12 form-group">
                                    <label for="nameUserH" class="label-reserva">Nombre Completo <span class="text-danger ml-auto">*</span></label>
                                    <input name="nameUserH" id="nameUserH" class="form-control" placeholder="Ingrese su nombre completo" required="required">
                                </div>

                                <div class="col-md-12 form-group">
                                    <label for="rutUserH" class="label-reserva">R.U.T. <span class="text-danger ml-auto">*</span></label>
                                    <input name="rutUserH" id="rutUserH" class="form-control" placeholder="Ingrese R.U.T." required="required">
                                </div>
                            </div>

                            <div class="form-row">

                                <div class="col-md-6 form-group">
                                    <label for="phoneUserH" class="label-reserva">Teléfono <span class="text-danger ml-auto">*</span></label>
                                    <input name="phoneUserH" id="phoneUserH" class="form-control" placeholder="Ingrese su Teléfono" required="required">
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="emailUserH" class="label-reserva">Correo Electrónico <span class="text-danger ml-auto">*</span></label>
                                    <input type="email" name="emailUserH" id="emailUserH" class="form-control" placeholder="Ingrese su correo electrónico" required="required">
                                </div>

                            </div>

                            <div class="form-row">

                                <div class="col-md-6 form-group">
                                    <label for="addressH" class="label-reserva">Dirección <span class="text-danger ml-auto">*</span></label>
                                    <input name="addressH" id="addressH" class="form-control" placeholder="Ingrese su dirección" required="required">
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="comunasH" class="label-reserva">Seleccione la comuna<span class="text-danger ml-auto">*</span></label>
                                    <select name="comunasH" id="comunasH" class="form-control" required="required">
                                        <?php
                                        /**
                                         * Consulta SQL para listar todas las comunas
                                         */

                                        $stmt_comuna = $con->prepare("
                                        SELECT * FROM comuna"
                                        );

                                        $stmt_comuna->execute();
                                        $comunas = $stmt_comuna->fetchAll();

                                        foreach ($comunas as $comuna) { ?>
                                            <option></option>
                                            <option value="<?php echo $comuna['idcomuna']; ?>"><?php echo $comuna['nombrecomuna']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                            </div>

                            <div class="form-row">

                                <div class="col-md-6 form-group">
                                    <label for="dateAtencionH" class="label-reserva">Fecha Atención <span class="text-danger ml-auto">*</span></label>
                                    <input type="datetime" name="dateAtencionH" id="dateAtencionH" class="form-control datepicker" placeholder="DD/MM/AA" required="required">
                                </div>

                                <div class="col-md-6 form-group">
                                    <label for="hourAtencionH" class="label-reserva">Hora Atención <span class="text-danger ml-auto">*</span></label>
                                    <input type="time" name="hourAtencionH" id="hourAtencionH" class="form-control timepicker" required="required">
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
</div>
<!-- /Modals -->