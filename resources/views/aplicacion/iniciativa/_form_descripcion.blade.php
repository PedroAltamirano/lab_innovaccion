<div class="panel-heading">
    <h3 class="panel-title">Información de la Iniciativa de Innovación</h3>
</div>
<div class="panel-body">
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <label class="control-label">* Nombre de la Iniciativa</label>
                <input type="text" required="required" class="form-control" placeholder="Nombre de la Iniciativa"
                       name="nombre_iniciativa"/>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label class="control-label">* Año de inicio</label>
                <input type="number" min="1900" max="<?php echo date('Y') ?>" required="required" class="form-control"
                       name="anio"/>
            </div>
        </div>
        <div class="col-8">
            <div class="form-group">
                <label class="control-label">* ¿Esta vigente?</label>
                <input type="text" required="required" class="form-control" placeholder="Nombre de la Iniciativa"
                       name="nombre_vigencia"/>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-7">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label class="control-label">* Población objetivo de la Iniciativa</label>
                        <select style="width:100%;" id="tipo_poblacion" name="tipo_poblacion"
                                class="form-control select2"
                                data-ajax--url="{{route('api.tipo-poblacion.select2')}}"
                                data-ajax--data-type="json"
                                data-ajax--cache="true"
                                data-close-on-select="false"
                                required="required" multiple>
                            {{--<option value="">Seleccione al menos un tipo</option>--}}
                            {{--<option value="1">Tipo 1</option>--}}
                            {{--<option value="2">Tipo 2</option>--}}
                            {{--<option value="3">Tipo 3</option>--}}
                            {{--<option value="4">Tipo 4</option>--}}
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label class="control-label">* Trabajo de la Iniciativa por ODS</label>
                        <select id="ods_categorias" class="form-control select2" name="ods_categorias"
                                data-ajax--url="{{route('api.ods-categoria.select2')}}"
                                data-ajax--data-type="json"
                                data-ajax--cache="true"
                                data-close-on-select="false"
                                required="required" multiple>
                            {{--<option value="">Seleccione al menos un tipo</option>--}}
                            {{--<option value="1">Tipo 1</option>--}}
                            {{--<option value="2">Tipo 2</option>--}}
                            {{--<option value="3">Tipo 3</option>--}}
                            {{--<option value="4">Tipo 4</option>--}}
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label class="control-label">* Componente Innovador</label>
                        <input type="text" required="required" class="form-control" placeholder=""
                               name="componente_innovador"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label class="control-label">* Descripción de la Iniciativa (max.100 palabras) </label>
                        <textarea class="form-control" name="descripcion_iniciativa" id="descripcion_iniciativa"
                                  rows="20" required="required"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="evento_img">* Logotipo</label>
                        <input type="file" class="dropify" name="logo" id="logo" required
                                {{--data-default-file="http://placehold.it/300x300/?text=Imagen%20Destacada"--}}
                        >
                        {{--<input type="file" onchange="loadFile(event)" accept="image/gif, image/jpeg, image/png"--}}
                        {{--id="evento_img" value="" name="iniciativa_img" required="required">--}}
                        {{--<div class="evento-image-placeholder mt-3">--}}
                        {{--<div id="evento-image-box" class="necesidad-image-box">--}}
                        {{--<img id="output" class="img-fluid"--}}
                        {{--src="http://placehold.it/300x300/?text=Imagen%20Destacada">--}}
                        {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
            <div class="form-group">
                <span>Redes Sociales</span>
                <div class="form-group">
                    <label for="iniciativa_facebook">Facebook</label>
                    <input class="form-control" type="url" id="url_facebook" value="" name="url_facebook">
                </div>
                <div class="form-group">
                    <label for="iniciativa_instagram">Instagram</label>
                    <input class="form-control" type="url" id="url_instagram" value=""
                           name="url_instagram">
                </div>
                <div class="form-group">
                    <label for="iniciativa_twitter">Twitter</label>
                    <input class="form-control" type="url" id="url_twitter" value="" name="url_twitter">
                </div>
                <div class="form-group">
                    <label for="iniciativa_linkedin">LinkedIn</label>
                    <input class="form-control" type="url" id="url_linkedin" value="" name="url_linkedin">
                </div>
                <div class="form-group">
                    <label for="iniciativa_youtube">Youtube</label>
                    <input class="form-control" type="url" id="url_youtube" value="" name="url_youtube">
                </div>
            </div>
        </div>
    </div>
    <button class="btn btn-primary nextBtn pull-right" type="button">Siguiente</button>
</div>