<table id="userTable" class="table table-bordered table-responsive display d-inline">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Email</th>
        <th scope="col">Is Admin</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->email}}</td>
            @if($user->role_id==1)
                <td><i class="fa fa-check text-info"></i></td>
                <td>
                    <button class="btn-info"><i class="fa fa-info" style="width: 14px"></i></button>
                </td>
            @else
                <td><i class="fa fa-times text-danger"></i></td>
                <td>
                    <button class="btn-info"><i class="fa fa-info" style="width: 14px"></i></button>
                    <button class="btn-success"><i class="fa fa-edit" style="width: 14px"></i></button>
                    <button class="btn-danger"><i class="fa fa-remove" style="width: 14px"></i></button>
                </td>
            @endif
        </tr>
    @endforeach
    </tbody>
</table>
