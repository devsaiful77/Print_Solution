<meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card-body d-flex flex-row justify-content-start">
                            <h5>All List</h5>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12 mt-3 mb-2 text-right">
                            <a href="{{route('seed.list.pdf')}}" class="btn btn-sm btn-secondary my-2" title="View">Download PDF</a>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Seeder List</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered" id="contactUs">
                                    <thead>
                                        <th>SL</th>
                                        <th>Title</th>
                                        <th>Body</th>
                                        <th>Footer</th>
                                    </thead>
                                    <tbody>
                                        @foreach($lists as $k=>$seedList)
                                            <tr>
                                                <td>{{$k + 1}}</td>
                                                <td>{{$seedList->title}}</td>
                                                <td>{{$seedList->body}}</td>
                                                <td>{{$seedList->footer}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


