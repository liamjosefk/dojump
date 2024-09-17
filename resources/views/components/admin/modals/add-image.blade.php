<div class="modal fade mt-5" id="addImageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="#" method="post">
            @csrf
            @method('POST')

            <div class="form-group">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Add Image</h3>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title">
                            </div>
                            <div class="col-12">
                                <label for="description">Description</label>
                                <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="col-12">
                                <label for="image">Image</label>
                                <input type="image" name="image" class="form-control-file">
                            </div>
                            <div class="col-12">
                                <label for="link">Link</label>
                                <input type="image" name="link" class="form-control-file">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row width-100">
                            <div class="col-6">
                                <button class="btn btn-secondary btn-100" type="button" data-dismiss="modal">Cancel</button>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-primary btn-100" type="submit">Submit Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>