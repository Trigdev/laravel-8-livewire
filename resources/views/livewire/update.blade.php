<!-- Edit Student Modal HTML -->
<div wire:ignore.self id="updateStudent" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Student</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <input type="hidden" name="id" wire:model="ids" />
                    <div class="form-group">
                        <label for="firstname"> First Name </label> 
                        <input type="text" name="firstname" placeholder="Enter First Name" class="form-control" wire:model="firstname" />
                        @error('firstname')
                            <span class="text-danger"> {{$message}} </span>
                        @enderror 
                    </div>
                    <div class="form-group">
                        <label for="lastname"> Last Name </label> 
                        <input type="text" name="lastname" placeholder="Enter Last Name" class="form-control" wire:model="lastname" />
                        @error('lastname')
                            <span class="text-danger"> {{$message}} </span>
                        @enderror                     
                    </div>
                    <div class="form-group">
                        <label for="email"> Email </label> 
                        <input type="text" name="email" placeholder="someone@example.com" class="form-control" wire:model="email" />
                        @error('email')
                            <span class="text-danger"> {{$message}} </span>
                        @enderror                     
                    </div>
                    <div class="form-group">
                        <label for="phone"> Phone </label> 
                        <input type="text" name="phone" placeholder="xxxx-xxx-xxxx" class="form-control" wire:model="phone" />
                        @error('phone')
                            <span class="text-danger"> {{$message}} </span>
                        @enderror                     
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" wire:click.prevent="update()">Update Student</button>
            </div>
        </div>
    </div>
</div>