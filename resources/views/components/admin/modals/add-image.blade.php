<div class="modal fade mt-5" id="addImageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{route('image.add_new')}}" method="post" enctype="multipart/form-data">
            @csrf

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
                                <label for="image">Image <span class="text-red">*</span></label>
                                <input type="file" name="image" class="form-control-file" required>
                            </div>
                            <div class="col-12">
                                <label for="image_thumb" class="mt-4">Thumbnail Image <span class="text-red">*</span> <small>(max-width: 400px)</small></label>
                                <input type="file" name="image_thumb" class="form-control-file" required>
                            </div>
                            <div class="col-12">
                                <label for="alt" class="mt-4">Alt Text <span class="text-red">*</span></label>
                                <input type="text" class="form-control" name="alt" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row width-100">
                            <div class="col-6">
                                <button class="btn btn-secondary btn-100" type="button" data-dismiss="modal">Cancel</button>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-primary btn-100" type="submit">Submit Image</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>