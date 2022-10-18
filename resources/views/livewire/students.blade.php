<div>
    @include('livewire.create')
    @include('livewire.update')
    <section class="container mt-5">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                @if(session()->has('message'))
                    <div class="alert alert-success" role="alert">
                        {{session('message')}}
                    </div>
                @endif 
                <div class="card shadow">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-8 col-lg-8">                    
                                <h3 class="h3"> All Students
                                    <a href="#addStudent" class="btn btn-md btn-primary" data-bs-toggle="modal"> Add Student </a>
                                </h3>
                            </div>
                            <div class="col-md-4 col-lg-4">
                                <input type="text" class="form-control" placeholder="Search ..." wire:model="searchTerm" />
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-white">
                            <thead>
                                <tr>
                                    <th> First Name </th>
                                    <th> Last Name </th>
                                    <th> Email </th>
                                    <th> Phone </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student)
                                <tr>
                                    <td> {{ $student->firstname }}
                                    </td>
                                    <td> {{ $student->lastname }}
                                    </td>
                                    <td> {{ $student->email }}
                                    </td>
                                    <td> {{ $student->phone }}
                                    </td>
                                    <td>
                                        <a href="#updateStudent" class="btn btn-warning btn-sm" data-bs-toggle="modal" wire:click.prevent="edit({{ $student->id }})">
                                            Edit 
                                        </a>
                                        <button type="button" class="btn btn-danger btn-sm" wire:click.prevent="delete({{ $student->id }})">
                                            Delete 
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$students->links()}}
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>