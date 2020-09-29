<?php echo form_open_multipart('Inicio/save');?>
<div class="accordion accordion-hover" id="accordion">
    <div class="card">
        <div class="card-header">
            <a href="#" class="card-title collapsed bg-primary text-white"  data-target="#pest1" aria-expanded="false"><br>
                <i class="fas fa-file width-2"></i> Incidencia
            </a>
        </div>
        <div id="pest1" class="collapse show" data-parent="#accordion">
            <div class="card-body bg-gray-dark">
                <div class="row m-t-10">
                    <div class="col-md-2 offset-md-10">
                        <label class="form-label" for="fechareporte">Fecha de Reporte</label>
                        <input class="form-control text-center" type="text"  name="fecha_reporte"value="<?php echo date("Y-m-d");?> " readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label class="form-label" for="num_inc">Numero de Incidencia</label>
                        <input type="text" class="form-control"  readonly name="id" >
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="cve_ent">Clave Ent</label>
                        <input type="text" class="form-control" readonly name="cve_ent" maxlength="10">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label" for="nombre_ent">Nombre Ent</label>
                        <input type="text" class="form-control" readonly name="nombre_ent">
                    </div>
                </div>
                <div class="row m-t-10">
                <div class="col-md-2">
                    <label for="cve_municipio">Clave Municipio</label>
                    <input type="text" class="form-control" readonly name="cve_municipio">
                </div>
                <div class="col-md-4">
                    <label for="nombre_municipio">Nombre Municipio</label>
                    <input type="text" class="form-control" readonly name="nombre_municipio">
                </div>
                <div class="col-md-2">
                    <label for="cve_localidad">Clave Localidad</label>
                    <input type="text" class="form-control" readonly name="cve_localidad">
                </div>
                <div class="col-md-4">
                    <label for="nombre_localidad">Nombre Localidad</label>
                    <input type="text" class="form-control" readonly name="nombre_localidad">
                </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-3">
                        <label class="form-label" for="altitud">Altitud</label>
                        <input  class="form-control" name="altitud" readonly>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label" for="latitud">Latitud</label>
                        <input  class="form-control" name="latitud" readonly>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-12">
                        <label for=""><b>Observaciones:</b></label>
                        <textarea name="nota" class="form-control" rows="10"></textarea>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-12">
                        <label for=""><b>Documento Adjunto</b>:</label>
                        <iframe name="oficio_pdf" src="#" width="100%" height="300"></iframe>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div id ="mostrarOcultar"class="col-md-12" style="display:none">
                        <label for=""><b>Archivo 1</b>:</label>
                        <iframe name="archivo1" src="#" width="100%" height="300"></iframe>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div id ="mostrarOcultar2"class="col-md-12" style="display:none">
                        <label for=""><b>Archivo 2</b>:</label>
                        <iframe name="archivo2" src="#" width="100%" height="300"></iframe>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div id ="mostrarOcultar3"class="col-md-12" style="display:none">
                        <label for=""><b>Archivo 3</b>:</label>
                        <iframe name="archivo3" src="#" width="100%" height="300"></iframe>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-12 text-right">
                        <button type="button" class="btn btn-danger btx_regresar"><i class="fa fa-reply"></i> Regresar</button>
                    </div>
                </div>         
            </div>
        </div>
    </div>
</div>