<form method="POST" v-on:submit.prevent="createModel">
<div class="modal fade" id="addmodelo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span>×</span>
                </button>
                <h4>Nuevo Modelo</h4>
            </div>
            <div class="modal-body">

                <label for="traza">Nombre</label>
                <input type="text" name="Nombre_del_modelo" class="form-control" v-model="newName">
                <span v-for="error in errors" class="text-danger">@{{ error }}</span>
                <!--<span v-for="error in errors" class="text-danger">@{{ error }}</span>-->
                <br/>
                <div>
                <label for="traza">Tipo</label>
                <select name="Tipo" id="tipo_id" v-model="newTipo">
                    <option value="otro">Otro</option>
                    <option value="hepatico">Hepático</option>
                    <option value="pancreatico">Pancreático</option>
                    <option value="colorrectal">colorrectal</option>
                    <option value="tiroides">Tiroides</option>
                </select>
                </div>
                <!--<input type="text" name="Tipo" class="form-control" v-model="newTipo">
                <span v-for="error in errors" class="text-danger">@{{ error }}</span>-->
            </div>
                

            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Guardar">
            </div>
        </div>
    </div>
</div>
</form>