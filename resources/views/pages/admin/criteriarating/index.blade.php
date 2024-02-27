@extends('layouts.admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><b>Criteria</b> <b><font color="FF7B7B">Rating</font></b></h1>
                    <span>Santai Dulu Gak Sih 🥦</span>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <div class="col text-right">
                        <a href="{{route('criteriaratings.create')}}" class='btn btn-primary'> <span
                            class='fa fa-plus'></span> Add Criteria Rating</a>
                        {{-- <button class="btn btn-primary lihat d-none d-md-block">
                            <i class="fas fa-list me-1"></i> Show More
                        </button>
                        <a href="{{route('criteriaratings.create')}}" class='btn btn-primary lihat d-none d-md-block'> <span
                            class='fa fa-plus'></span> Add Criteria Rating</a> --}}
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
                                        <th>Criteria ID</th>
                                        <th>Rating</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($criteriaratings as $c)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $c->name}}</td>
                                        <td>{{ $c->rating}}</td>
                                        <td>{{ $c->description}}</td>
                                        <td>
                                            <form action="{{ route('criteriaratings.destroy',$c->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <span data-toggle="tooltip" data-placement="bottom" title="Edit Data">
                                                    <a href="{{ route('criteriaratings.edit',$c->id) }}"
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
            // scrollY : '250px',
            dom : 'Bfrtip',           
            buttons : [
                {
                    extend : 'pdf',
                    orientation: 'potrait',
                    pageSize : 'Legal',
                    title : 'Data Criteria Rating',
                    download : 'open'
                },
                {
                    extend : 'excel',
                    orientation: 'landscape',
                    title : 'Data Criteria Rating',
                },
                {
                    extend : 'print',
                    orientation: 'landscape',
                    title : 'Data Criteria Rating',
                },
                'csv', 'copy'
            ],
        });
    });

</script>
@endsection
