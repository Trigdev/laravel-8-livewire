<div>
    <section class="container mt-5">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card shadow">
                    <div class="card-header">
                        <h3 class="h3"> All Users </h3> 
                    </div>
                    <div class="card-body">
                        <table class="table table-white">
                            <thead>
                                <tr>
                                    <th> ID </th>
                                    <th> Name </th>
                                    <th> Email </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td> {{ $user->id }} <td>
                                        <td> {{ $user->name }} <td>
                                        <td> {{ $user->email }} <td>
                                    </tr> 
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
