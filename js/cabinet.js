var eventBus = new Vue();

Vue.component('autorisation', {
    template: '#autorisation',
    data: function(){
        return{
            name: "",         
            password: ""         
        }
    }, 
    methods:{ 
       toRegister() {
        eventBus.$emit("chenge-state","register");
       },
       
       toPasRec() {
        eventBus.$emit("chenge-state","passrec");
       }
    }
});

Vue.component('registration', {
    template: '#registration',
    data: function(){
        return{
            name: "", 
            nameNotEnter:false,        
            nameorg: "",
            nameorgNotEnter:false,         
            inn: "",         
            email: "",
            emailNotEnter:false,         
            tel: "",         
            password: "",
            
            messageText:"",
            showMsgBlk:false,
            msgOk:true
        }
    }, 
    methods:{ 
       toAutorization() {
        eventBus.$emit("chenge-state","autorization");
       },
       
       registerUser () {
            if (this.name == "") this.nameNotEnter = true;
            if (this.nameorg == "") this.nameorgNotEnter = true;
            if (this.emailNotEnter == "") this.emailNotEnter = true;

            var params = new URLSearchParams();
            params.append('action', 'user_register');
            params.append('nonce', allAjax.nonce);
            params.append('name', this.name);
            params.append('nameorg', this.nameorg);
            params.append('inn', this.inn);
            params.append('email', this.email);
            params.append('tel', this.tel);
            params.append('password', this.password);

            

            axios.post(allAjax.ajaxurl, params)
              .then((response) => {
                this.messageText = "Вы успешно зарегистрировались. На емейл указанный при регистрации отправленно письмо с подтверждением регистрации, для использования личного кабинета перейдите по ссылке из письма.";
                this.showMsgBlk = true;
                this.msgOk = true;
              })
              .catch((error)  => {
                console.log("background-color: #1dc17b;");
                this.messageText = "Во время регистрации произошла ошибка возможно пользователь с таким e-mail уже зарегистрирован в системе!";
                this.showMsgBlk = true;
                this.msgOk = false;
              });
       }
    }
});

Vue.component('passrec', {
    template: '#passrec',
    data: function(){
        return{
            name: "",         
            password: ""         
        }
    }, 
    methods:{ 
       toAutorization() {
        eventBus.$emit("chenge-state","autorization");
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
        eventBus.$on("chenge-state", (state)=>{
            this.chengeState(state); 
        }); 
    },

    methods:{
        chengeState(state) {
            console.log(state);
            this.showAutorize = false;
            this.showRegistration = false;
            this.showPassRec = false;
            this.showKabinet = false;

            if (state == "register") this.showRegistration = true;
            if (state == "autorization") this.showAutorize = true;
            if (state == "passrec") this.showPassRec = true;
        }
    }
});