<div class="modal fade mt-5" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('admin.user.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Add User</h3>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="col-12">
                                <label for="email" class="mt-3">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="col-12">
                                <label for="password" class="mt-3">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <div class="col-12">
                                <label for="password_confirmation" class="mt-3">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row width-100">
                            <div class="col-6">
                                <button class="btn btn-secondary btn-100" type="button" data-dismiss="modal">Cancel</button>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-primary btn-100" type="submit">Submit User</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>

    </div>
</div>