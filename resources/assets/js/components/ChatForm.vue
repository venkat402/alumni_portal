<template>

    <div  class="input-group">
        <input style="height:35px;" id="btn-input" type="text" name="chat" class="form-control input-lg" placeholder="Type your message here..." v-model="newMessage" @keyup.enter="sendMessage">

        <span class="input-group-btn">
            <button style="height:35px;border-radius:0px !important;background-color:goldenrod" class="btn btn-primary btn-sm" id="btn-chat" @click="sendMessage">
                Send
            </button>
        </span>
    </div>

</template>

<script>
    export default {
        props: ['user','names','avatar','mTime','userid', 'friendid'],

        data() {
            return {
                newMessage: ''
            }
        },
        watch:{
            newMessage(){
                const userId = $('meta[name="userId"]').attr('content');
                const friendId = $('meta[name="friendId"]').attr('content');
                Echo.private('Chat.' + friendId + '.' + userId)
                    .whisper('typing', {
                        name: this.newMessage
                    })
            }
        },
        methods: {
            sendMessage() {

                this.$emit('messagesent', {
                    user: this.user,
                    friend_id: this.friendid,
                    user_id: this.user.id ,
                    chat: this.newMessage,
                    time_posted:this.getTime()

                });
                this.newMessage = ''
            },
            getTime(){
                let time = new Date();

                return time.getDate()+'/'+time.getMonth()+'/'+','+time.getHours()+':'+time.getMinutes();
            },

        }
    }
</script>