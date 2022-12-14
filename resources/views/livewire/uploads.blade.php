<div>
    <section style="padding-top: 60px;">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                @if(session()->has('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                    </div>
                @endif 
                <div class="card">
                    <div class="card-header">
                        File Upload 
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="fileUpload" id="form-upload" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="title"> Title </label> 
                                <input type="text" name="title" class="form-control" wire:model="title" /> 
                                @error('title')
                                    <span class="text-danger">{{$message}}</span> 
                                @enderror 
                            </div>
                            <div class="form-group">
                                <label for="filename"> File </label> 
                                <input type="file" name="filename" class="form-control" wire:model="filename" /> 
                                @error('filename')
                                    <span class="text-danger">{{$message}}</span> 
                                @enderror 
                            </div>
                            <button type="submit" class="btn btn-success btn-md float-right m-2">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
