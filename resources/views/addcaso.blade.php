<form method="POST" v-on:submit.prevent="createCase">
<div class="modal fade" id="addcaso">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span>×</span>
                </button>
                <h4>Nuevo Caso</h4>
            </div>
            <div class="modal-body">

                <label for="traza">Trazabilidad</label>
                <input type="text" name="Trazabilidad_hospital" class="form-control" v-model="newTraza">                       <span v-for="error in errors" class="text-danger">@{{ error }}</span>
                <!--<span v-for="error in errors" class="text-danger">@{{ error }}</span>-->
            </div>
                

            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Guardar">
            </div>
        </div>
    </div>
</div>
</form>
