var eventBus = new Vue();

Vue.component('autorisation', {
    template: '#autorisation',
    data: function(){
        return{
            name: "",         
            password: ""         
        }
    }
});

Vue.component('kabinet', {
    template: '#kabinet',
    data: function(){
        return{
            name: "",         
            password: ""         
        }
    }
});

let cabinet = new Vue({
    el:"#main_cabinet",
    
    data:{
        state:"",            
        showAutorize:true,
        showRegistration:false,
        showPassRec:false,
        showKabinet:false
    },
    
    created: function() {
        
    },

    methods:{
        
    }
});