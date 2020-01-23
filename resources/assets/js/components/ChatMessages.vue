
<style >

    .no-message {
        height: 200px;
        display: flex;
        align-items: center;
    }
    #chat{
        overflow-y: scroll;
        height: 350px;
    }
    .chat
    {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .chat li
    {
        margin-bottom: 10px;
        padding-bottom: 5px;
        border-bottom: 1px dotted #B3A9A9;
    }

    .chat li.left .chat-body
    {
        background-color: goldenrod;
        padding:10px;
        color:#fff;
        margin-left: 60px;
    }

    .chat li.right .chat-body
    {
        margin-right: 60px;
        background-color: #0b2e13;
        padding:10px;
        color:#fff;
    }


    .chat li .chat-body p
    {
        margin: 0;
        color: #777777;
    }

    .panel .slidedown .glyphicon, .chat .glyphicon
    {
        margin-right: 5px;
    }



</style>

<template>
    <!--Chat view-->

        <div class="chat" v-if="messages.length != 0" >
        <ul class="chat" id="chat"  v-chat-scroll>
            <div v-for="message in messages">
            <li  v-if="message.user_id == userid"  class="left clearfix">
                <span class="chat-img pull-left">
                    <img v-if="message.avatar==undefined" style="height: 50px;width: 50px;"  :src="'/storage/cover_images/default.png'" alt="User Avatar" class="img-circle" />
                    <img v-else style="height: 50px;border-radius:50%;width: 50px;"  :src="'/storage/cover_images/'+ message.avatar" alt="Avatar" class="img-circle" />
                        </span>
                <div  class="chat-body clearfix">
                    <div class="header">
                        <strong class="primary-font">You</strong> <small class="pull-right text-muted">
                        <span class="glyphicon glyphicon-time"></span>{{message.time_posted}}</small>
                    </div>
                    <p style="color: #efefef">
                        {{message.chat}}
                    </p>
                </div>
            </li>
                <li v-else class="right clearfix"><span class="chat-img pull-right" >

                                     <img v-if="message.avatar==undefined" style="height: 50px;width: 50px;"  :src="'/storage/cover_images/default.png'" alt="User Avatar" class="img-circle" />
<img v-else style="height: 50px;border-radius:50%;width: 50px;"  :src="'/storage/cover_images/'+ message.avatar" alt="User Avatar" class="img-circle" />
                        </span>
                    <div class="chat-body clearfix">
                        <div class="header">
                            <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>{{message.time_posted}}</small>
                            <small><a href=""><strong class="pull-right primary-font">{{message.names}}</strong></a></small>
                        </div>
                        <p style="color: #efefef">
                            {{message.chat}}
                        </p>
                    </div>
                </li>
            </div>
        </ul>
    </div>

        <div v-else class="no-message">
            There are no messages
        </div>

    <!--end of chat view-->











</template>
<script>
    const userId = $('meta[name="userId"]').attr('content');

    export default {
        props: ['messages','avatar','user','userid','friendid']
    };
</script>