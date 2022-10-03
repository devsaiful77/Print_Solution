<style type="text/css">
    #client0rder{
        display: table;
        width: 100%;
        font-size: 11px;
        border-collapse: collapse;
        margin: 2px;
    }
    #client0rder, td, th {
        border: 1px solid black;
        font-size: 11px;
    }
    .text-bold {
        font-weight: bold;
    }
    .center{
    text-align: center;
    }
    .colspan{
        text-align: right;
    }
</style>
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="row">
                            <div class="col-sm-6 col-6">
                                <div class="card-body d-flex flex-row justify-content-end">
                                    <h4 class="text-bold center">Seeder List Report</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <form method="post" action="{{ route('seed.list.pdf') }}" enctype="multipart/form-data">
                                @csrf
                                <table class="table table-bordered table-striped" id="client0rder">
                                    <thead>
                                    <tr>
                                    <th>SL</th>
                                    <th>Title</th>
                                    <th>Body</th>
                                    <th>Footer</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(isset($lists))
                                        @foreach($lists as $k=>$seedList)
                                            <tr>
                                            <td>{{$k + 1}}</td>
                                                <td>{{$seedList->title}}</td>
                                                <td>{{$seedList->body}}</td>
                                                <td>{{$seedList->footer}}</td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
