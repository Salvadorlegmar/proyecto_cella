
new Vue({
    el: '#crud',
    data: {
        cases:[],
        models:[],
        stls:[]
    },
    created: function() {
        this.getCases();
        this.getModels();
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
  

        getModels: function(){
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
