<!-- Modal -->
<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="addToCartModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-white" style="background: #4bbd7e;">
                <h5 class="modal-title text-uppercase font-weight-bold" id="addToCartModalLabel">Thêm vào giỏ hàng</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="addUserForm" class="form-horizontal" method="POST" action="{{ route('admin.users.store') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                               required autofocus>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <label class="mr-2">Admin?</label>
                        <input type="checkbox" name="isAdmin">
                    </div>
                </form>

            </div>
            <div class="modal-footer" style="background: #4bbd7e;">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" form="addUserForm" class="btn btn-primary">ADD</button>
            </div>
        </div>
    </div>
</div>
