
new Vue({
    el: '#crud',
    data: {
        keeps:[]
    },
   
    created: function() {
        this.getKeeps();
    },
    methods: {
        getKeeps: function() {
            var urlKeeps = 'casos';
            axios.get(urlKeeps).then(response =>{
                this.keeps = response.data
            });
        }
    }
});
