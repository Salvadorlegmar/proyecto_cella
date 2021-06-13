new Vue({
    el: '#crud',
    data: {
        cases:[],
        newTraza:'',
        errors:[],
        models:[],
        stls:[]
    },
    created: function() {
        this.getCases();
        //this.getModels();
        this.getStls();
    },
    methods: {
        getCases: function() {
            var urlCases = 'casos';
            axios.get(urlCases).then(response =>{
                this.cases = response.data
            });
        },
  
        deleteCase: function(caso) {
            /*alert(caso.ID_CASO);*/
            var url = 'casos/' + caso.ID_CASO;
            axios.delete(url).then(response => {
                this.getCases(); 
                toastr.success('Caso eliminado correctamente'); //mensaje           
            });
        },

        createCase: function() {
            var url = 'casos'
            var m = new Date();
            var dateString = m.getUTCFullYear() +"/"+ (m.getUTCMonth()+1) +"/"+ m.getUTCDate() + " " + 
            (m.getUTCHours()+2) + ":" + m.getUTCMinutes() + ":" + m.getUTCSeconds();
            axios.post(url, {
                Trazabilidad_hospital: this.newTraza,
                Fecha_hora_de_alta: dateString
            }).then(response => {
                this.getCases();
                this.newTraza = '';
                this.errors = [];
                $('#addcaso').modal('hide');
                toastr.success('Nueva Caso creado con éxito');
            }).catch(error => {
                this.errors = 'Corrija para poder crear con éxito';
            });
        },
  
        loadModels: function(caso) {
            var idCaso = caso.ID_CASO;
            this.getModels(idCaso);
        },

        getModels: function(idCaso){
            var urlModels = 'modelos';
            axios.get(urlModels).then(response =>{
                this.models = response.data
            });
        },

        deleteModel: function(modelo) {
            /*alert(caso.ID_CASO);*/
            var url = 'modelos/' + modelo.ID_MODELO;
            axios.delete(url).then(response => {
                this.getModels();
                toastr.success('Modelo eliminado correctamente'); //mensaje             
            });
        },


        getStls: function(){
            var urlStls = 'modelos';
            axios.get(urlStls).then(response =>{
                this.stls = response.data
            });
        },

        deleteStl: function(stl) {
            /*alert(caso.ID_CASO);*/
            var url = 'stls/' + stl.STL;
            axios.delete(url).then(response => {
                this.getStls();
                toastr.success('Elemento STL eliminado correctamente'); //mensaje          
            });
        }

    }
});
