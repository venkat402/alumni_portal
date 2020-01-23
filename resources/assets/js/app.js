
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue'
import VueChatScroll from 'vue-chat-scroll'
import Toaster from 'v-toaster'
import 'v-toaster/dist/v-toaster.css'
Vue.use(Toaster, {timeout: 5000})
Vue.use(VueChatScroll)
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */



Vue.component('chat-messages', require('./components/ChatMessages.vue'));
Vue.component('chat-form', require('./components/ChatForm.vue'));
Vue.component('onlineuser', require('./components/OnlineUser.vue'));
Vue.component('communicaton', require('./components/Communication.vue'));
const app = new Vue({
    el: '#app',

    data: {
        messages: [],
        chat:{
            message:[],
            user:[],
            color:[],
            time:[]
        },
        message:'',
        typing:'',
        onlineUsers: '',
        numberOfUsers:0
    },
    mounted() {
        const userId = $('meta[name="userId"]').attr('content');
        const friendId = $('meta[name="friendId"]').attr('content');
        this.fetchMessages();
        Echo.private('Chat.' + friendId + '.' + userId)
            .listen('MessageSent', (e) => {
            document.getElementById('ChatAudio').play();
            this.messages.push({
            chat: e.message.chat,
            names:e.message.names,
            avatar:e.message.avatar,
            time_posted:e.message.time_posted,
            user: e.user
               });
              });
        Echo.private('Chat.' + userId + '.' + friendId)
            .listenForWhisper('typing', (e) => {
            if (e.name != '') {
            this.typing = 'typing...'
        }else{
            this.typing = ''
        }
    });

        if (userId != 'null') {
            Echo.join('Online')
                .here((users) => {
                this.onlineUsers = users;
                    })
                .joining((user) => {
                        this.onlineUsers.push(user);
                })
                .leaving((user) => {
                        this.onlineUsers = this.onlineUsers.filter((u) => {u != user});
                });
        }



        //=====================================================




        this.getOldMessages();
        Echo.private('forum')
            .listen('ChatEvent', (e) => {
            this.chat.message.push(e.message);
        this.chat.user.push(e.user);
        this.chat.color.push('warning');
        this.chat.time.push(this.getTime());
        axios.post('/saveToSession',{
            chat : this.chat
        })
            .then(response => {
        })
    .catch(error => {
            console.log(error);
    });
        // console.log(e);
    })
    .listenForWhisper('typing', (e) => {
            if (e.name != '') {
            this.typing = 'typing...'
        }else{
            this.typing = ''
        }
    })

        Echo.join(`forum`)
            .here((users) => {
            this.numberOfUsers = users.length;
    })
    .joining((user) => {
            this.numberOfUsers += 1;
        // console.log(user);
        this.$toaster.success(user.name+' joined the chat room');
    })
    .leaving((user) => {
            this.numberOfUsers -= 1;
        this.$toaster.warning(user.name+' left the chat room');
    });


    },
    watch:{
        message(){
            Echo.private('forum')
                .whisper('typing', {
                    name: this.message
                });
        }
    },
    methods: {
        send(){
            if (this.message.length != 0) {
                this.chat.message.push(this.message);
                this.chat.color.push('success');
                this.chat.user.push('you');
                this.chat.time.push(this.getTime());
                axios.post('/send', {
                    message : this.message,
                    chat:this.chat
                })
                    .then(response => {
                    console.log(response);
                this.message = ''
            })
            .catch(error => {
                    console.log(error);
            });
            }
        },
        getTime(){
            let time = new Date();
            return time.getHours()+':'+time.getMinutes();
        },
        getOldMessages(){
            axios.post('/getOldMessage')
                .then(response => {
                console.log(response);
            if (response.data != '') {
                this.chat = response.data;
            }
        })
        .catch(error => {
                console.log(error);
        });
        },
        deleteSession(){
            axios.post('/deleteSession')
                .then(response=> this.$toaster.success('Chat history is deleted') );
        },


























        fetchMessages() {
            const friendId = $('meta[name="friendId"]').attr('content');
            axios.get('/messages/'+ friendId).then(response => {
                this.messages = response.data;
        });
        },

        addMessage(message) {


            this.messages.push(message);

            axios.post('/messages', message).then(response => {
                console.log(response.data);
        });
        },







    },

});