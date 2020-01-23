<div>
    <a id="admin-link" class="btn btn-warning" href="/admin-dashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
    <a id="admin-link" class="link2 btn btn-warning" href="/Events"><i class="fa fa-empire"></i> Create events</a>
    <a id="admin-link" class="link2 btn btn-warning" href="/Students"><i class="fa fa-users"></i> Students</a>
    <a id="admin-link" class="link2 btn btn-warning" href="/Alumni"><i class="fa fa-user"></i> Alumni</a>
    <a id="admin-link" class="link2 btn btn-warning" href="/Admin/contribution"><i class="fa fa-credit-card"></i> Donations</a>
    <div style="margin-top: 5px; !important;" class="accordion" id="accordionExample">
        <div style="padding: 0px !important;margin-top: 0px !important;background-color: goldenrod !important;" class="card">
            <div style="padding: 0px !important;margin-top: 0px !important;" class="card-header" id="headingOne">

                    <a style="margin-top: 0px !important;"  id="admin-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="link2 btn btn-warning" ><i class="fa fa-feed"></i> Notices/News</a>

            </div>

            <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <i class="fa fa-edit"></i>&nbsp;<a href="/Notices">Create new post</a>
                    <hr>
                    <i class="fa fa-eye"></i>&nbsp;<a href="/Notices/all">View all posts</a>
                </div>
            </div>
        </div>


    </div>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
    @csrf
    <button id="admin-link" class=" link2 btn btn-warning"><i class="fa fa-unlock"></i>&nbsp;&nbsp;Logout</button>
    </form>
</div>