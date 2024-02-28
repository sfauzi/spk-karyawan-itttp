@extends('layouts.admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><b>Criteria &</b> <b><font color="FF7B7B">Weight</font></b></h1>
                    <span>Santai Dulu Gak Sih 🥦</span>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <div class="col text-right">
                        <a href="{{route('criteriaweights.create')}}" class='btn btn-primary'> <span
                            class='fa fa-plus'></span> Add Criteria</a>
                    </div>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                            @endif

                            
                            {{-- <br> --}}
                            <table id="mytable" class="display nowrap table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Type</th>
                                        <th>Weight</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($criteriaweights as $c)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $c->name}}</td>
                                        <td>{{ $c->type}}</td>
                                        <td>{{ $c->weight}}</td>
                                        <td>{{ $c->description}}</td>
                                        <td>
                                            <form action="{{ route('criteriaweights.destroy',$c->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <span data-toggle="tooltip" data-placement="bottom" title="Edit Data">
                                                    <a href="{{ route('criteriaweights.edit',$c->id) }}"
                                                        class="btn btn-info"><span class="fa fa-edit"></span>
                                                    </a>
                                                </span>
                                                <span data-toggle="tooltip" data-placement="bottom" title="Delete Data">
                                                    <button type="submit" class="btn btn-danger">
                                                        <span class="fa fa-trash-alt"></span>
                                                    </button>
                                                </span>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col-md-6 -->

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@section('script')
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()

        $('#mytable').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            dom : 'Bfrtip',
            buttons : [
                {
                    extend : 'pdf',
                    orientation : 'potrait',
                    pageSize : 'Legal',
                    title : 'Data Criteria & Weight',
                    download : 'open'
                },
                {
                    extend : 'excel',
                    orientation: 'landscape',
                    title : 'Data Criteria & Weight',
                },
                {
                    extend : 'print',
                    orientation: 'landscape',
                    title : 'Data Criteria & Weight',
                },
                'csv','copy'
            ],
        });
    });

</script>
@endsection
