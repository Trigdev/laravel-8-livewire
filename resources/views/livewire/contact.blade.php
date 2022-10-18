<div>
    <section>
        <div class="container mt-5">
            <div class="row mt-5">
                <div class="col-md-6 col-lg-6 offset-md-3 offset-lg-3">
                    <div class="card border border-2 shadow bg-light">
                        <div class="card-header">
                            <h3> Contact Form </h3>
                        </div>
                        <div class="card-body">
                            <form role="form" wire:submit.prevent="submitForm">
                                <div class="form-group">
                                    <label for="name"> Name </label> 
                                    <input type="text" name="name" class="form-control" wire:model="name" />
                                    @error('name')
                                        <span class='text-danger'>{{$message}}</span> 
                                    @enderror 
                                </div>
                                <div class="form-group">
                                    <label for="email"> Email </label> 
                                    <input type="text" name="email" class="form-control" wire:model="email" />
                                    @error('email')
                                        <span class='text-danger'>{{$message}}</span> 
                                    @enderror                                 
                                </div>
                                <div class="form-group">
                                    <label for="phone"> Phone </label> 
                                    <input type="text" name="phone" class="form-control" wire:model="phone" />
                                    @error('phone')
                                        <span class='text-danger'>{{$message}}</span> 
                                    @enderror                                 
                                </div>
                                <div class="form-group">
                                    <label for="msg"> Message </label> 
                                    <textarea name="msg" class="form-control" wire:model="msg"></textarea>
                                    @error('msg')
                                        <span class='text-danger'>{{$message}}</span> 
                                    @enderror                                 
                                </div>
                                <button type="submit" class="btn btn-success btn-md m-2"> Submit </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
