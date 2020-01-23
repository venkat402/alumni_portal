<h5>List of alumni members</h5>
<p>Click on  the member to start chatting</p>
<hr>
<ul class="list-group">
    @foreach($lists as $list)
        <a href="/Messenger/chat/{{$list->id}}/user">
            <li class="list-group-item">
                {{$list->First_Name}}&nbsp;{{$list->Middle_name}}
            </li>
            <onlineuser v-bind:friend="{{ $list }}" v-bind:onlineusers="onlineUsers"></onlineuser>
        </a>

    @endforeach
</ul>