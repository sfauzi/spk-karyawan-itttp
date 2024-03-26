@extends('layouts.admin')

@section('content')
<!-- Content Wrapper. Contains page content -->


<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"><b>Decision</b> <b><font color="FF7B7B">Matrix</font></b></h1>
                <span>Santai Dulu Gak Sih 🥦</span>                    
            </div><!-- /.col -->
            <div class="col-sm-6"></div><!-- /.col -->
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
                        <table id="mytable" class="display nowrap table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Alternative</th>
                                    @foreach ($criteriaweights as $c)
                                    <th>{{$c->name}}</th>
                                    @endforeach
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alternatives as $a)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{$a->name}}</td>
                                    @php
                                    $scr = $scores->where('ida', $a->id)->all();
                                    @endphp
                                    @foreach ($scr as $s)
                                    <td>{{$s->rating}}</td>
                                    @endforeach
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



{{-- <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><b>Decision</b> <b><font color="FF7B7B">Matrix</font></b></h1>
                    <span>Santai Dulu Gak Sih 🥦</span>                    
                </div><!-- /.col -->
                <div class="col-sm-6">

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
                            <table id="mytable" class="display nowrap table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Alternative</th>
                                        @foreach ($criteriaweights as $c)
                                        <th>{{$c->name}}</th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($alternatives as $a)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{$a->name}}</td>
                                        @php
                                        $scr = $scores->where('ida', $a->id)->all();
                                        @endphp
                                        @foreach ($scr as $s)
                                        <td>{{$s->rating}}</td>
                                        @endforeach
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
</div> --}}
<!-- /.content-wrapper -->
@endsection

@section('script')
{{-- <script>
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
                    title : 'Data Decision Matrix',
                    download : 'open'
                },
                {
                    extend : 'excel',
                    orientation: 'landscape',
                    // pageSize : 'Legal',
                    title : 'Data Decision Matrix',
                    // download : 'open'
                },
                {
                    extend : 'print',
                    orientation: 'landscape',
                    // pageSize : 'Legal',
                    title : 'Data Decision Matrix',
                    // download : 'open'
                },
                'csv', 'copy'
            ],
        });
    });

</script> --}}

<!-- Script untuk menginisialisasi DataTables -->
{{-- <script>
    $(document).ready(function() {
        $('#mytable').DataTable();
    });
</script> --}}

<script>
    $(document).ready(function() {
        $('#mytable').DataTable({
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'copy',
                    text: '<i class="fas fa-copy"></i> Copy',
                    className: 'btn btn-secondary',
                    title: "Data Decision Matrix"
                },
                {
                    extend: 'csv',
                    text: '<i class="fas fa-file-csv"></i> CSV',
                    className: 'btn btn-secondary',
                    title: "Data Decision Matrix"
                },
                {
                    extend: 'excel',
                    text: '<i class="fas fa-file-excel"></i> Excel',
                    className: 'btn btn-success',
                    title: "Data Decision Matrix"
                },
                {
                    extend: 'pdf',
                    text: '<i class="fas fa-file-pdf"></i> PDF',
                    className: 'btn btn-danger',
                    title: "Data Decision Matrix",
                    download: 'open'
                },
                {
                    extend: 'print',
                    text: '<i class="fas fa-print"></i> Print',
                    className: 'btn btn-primary',
                    title: "Data Decision Matrix"
                },
                {
                    extend: 'collection',
                    text: 'Show',
                    buttons: ['pageLength']
                }
            ],
            select: true
        });
    });
</script>
@endsection
