@extends('layouts.admin')

@section('content')
    
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><b>Alternative &</b> <b><font color="FF7B7B">Score</font></b></h1>
                    <span>Santai Dulu Gak Sih 🥦</span>                   
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <div class="col text-right">
                        <div>
                            <a href="{{route('alternatives.create')}}" class='btn btn-primary'> <span
                                class='fa fa-plus'></span> Add Alternative</a>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
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
                                        @foreach ($criteriaweights as $c)
                                        <th>{{$c->name}}</th>
                                        @endforeach
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($alternatives as $a)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $a->name}}</td>
                                        @php
                                        $scr = $scores->where('ida', $a->id)->all();
                                        @endphp
                                        @foreach ($scr as $s)
                                        <td>{{$s->description}}</td>
                                        @endforeach
                                        <td>
                                            <form action="{{ route('alternatives.destroy',$a->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <span data-toggle="tooltip" data-placement="bottom" title="Edit Data">
                                                    <a href="{{ route('alternatives.edit',$a->id) }}"
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
                    orientation: 'potrait',
                    pageSize : 'Legal',
                    title : 'Data Alternative & Score',
                    download : 'open'
                },
                {
                    extend : 'excel',
                    orientation: 'landscape',
                    title : 'Data Alternative & Score',
                },
                {
                    extend : 'print',
                    orientation: 'landscape',
                    title : 'Data Alternative & Score',
                },

                'csv', 'copy'
            ],
        });
    });

</script>

<!-- Script untuk menginisialisasi DataTables -->
<script>
    $(document).ready(function() {
        $('#mytable').DataTable();
    });
</script>
    
@endsection