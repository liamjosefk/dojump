<div class="modal fade mt-5" id="addEmailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{route('lead.subscribe')}}" method="post">
            @csrf
            @method('POST')

            <div class="form-group">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Add Email</h3>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <label for="email">Email <span class="text-red">*</span></label>
                                <input type="text" class="form-control" name="email" required>
                            </div>
                            <div class="col-6">
                                <label for="first_name" class="mt-2">First Name</label>
                                <input type="text" name="first_name" class="form-control">
                            </div>
                            <div class="col-6">
                                <label for="last_name" class="mt-2">Last Name</label>
                                <input type="text" name="last_name" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row width-100">
                            <div class="col-6">
                                <button class="btn btn-secondary btn-100" type="button" data-dismiss="modal">Cancel</button>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-primary btn-100" type="submit">Submit Email</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>