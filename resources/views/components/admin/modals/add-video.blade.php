<div class="modal fade mt-5" id="addVideoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{ route('project.add_video') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div class="form-group">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Add Video</h3>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <label for="title">Title <span class="text-red">*</span></label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required>
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="link" class="mt-3">Link <span class="text-red">*</span></label>
                                <input type="text" name="link" class="form-control @error('link') is-invalid @enderror" value="{{ old('link') }}" required>
                                @error('link')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="description" class="mt-3">Description</label>
                                <textarea name="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="image" class="mt-3">Image</label>
                                <input type="file" name="image" class="form-control-file @error('image') is-invalid @enderror">
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row width-100">
                            <div class="col-6">
                                <button class="btn btn-secondary btn-100" type="button" data-dismiss="modal">Cancel</button>
                            </div>
                            <div class="col-6">
                                <button class="btn btn-primary btn-100" type="submit">Submit Video</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>