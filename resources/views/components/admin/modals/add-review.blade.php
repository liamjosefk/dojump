<div class="modal fade mt-5" id="addReviewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{route('review.add_new')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Add Review</h3>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <label for="author">Author</label>
                                <input type="text" class="form-control" name="author">
                            </div>
                            <div class="col-12">
                                <label for="title" class="mt-3">Title <span class="text-red">*</span></label>
                                <input type="text" class="form-control" name="title" required>
                            </div>
                            <div class="col-12">
                                <label for="content" class="mt-3">Review Content <span class="text-red">*</span></label>
                                <textarea name="content" cols="30" rows="10" class="form-control" required></textarea>
                            </div>
                            <div class="col-12">
                                <label for="image" class="mt-3">Image</label>
                                <input type="file" name="image" class="form-control-file">
                            </div>
                            <div class="col-12">
                                <label for="link" class="mt-3">Link</label>
                                <input type="text" name="link" class="form-control">
                            </div>
                            <div class="col-12">
                                <label for="critic" class="mt-3">Critic Review?</label>
                                <select name="critic" class="form-control">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row width-100">
                            <div class="col-6">
                                <button class="btn btn-secondary btn-100" type="button" data-dismiss="modal">Cancel</button>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-primary btn-100" type="submit">Submit Review</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>