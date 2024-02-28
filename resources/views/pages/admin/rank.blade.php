@extends('layouts.admin')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> <b>Rank</b> </h1>
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
                            <a href="/downloadpdf" target="_blank">
                                {{-- {{url('download-rank-pdf')}} --}}
                                {{-- <button class="btn btn-success">Download PDF</button> --}}
                            </a>
                            <table id="mytable" class="display nowrap table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Alternative</th>
                                        @foreach ($criteriaweights as $c)
                                        <th>{{$c->name}}</th>
                                        @endforeach
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($alternatives as $a)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{$a->name}}</td>
                                        @php
                                        $scr = $scores->where('ida', $a->id)->all();
                                        $total = 0;
                                        @endphp
                                        @foreach ($scr as $s)
                                        @php
                                        $total += $s->rating;
                                        @endphp
                                        <td>{{$s->rating}}</td>
                                        @endforeach
                                        <td>{{$total}}</td>
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
            // pageLength : 25,
            // responsive : true,
            // dom : '<"html5buttons"B>lTfgitp',
            // buttons : [
            //     {extends : 'copy'},
            //     {extends : 'csv'},
            //     {extends : 'excel', title : 'Data Perankingan'},
            //     {extends : 'pdf', title : 'Data Perankingan'},

            //     {extends : 'print',
            //         customize : function (win){
            //             $(win.document.body).addClass('white-bg');
            //             $(win.document.body).css('font-size', '10px');

            //             $(win.document.body).find('table')
            //             .addClass('compact')
            //             .css('font-size', 'inherit');

            //         }
            //     }

            // ],
            // scrollY : '250px',
            dom : 'Bfrtip',
            buttons : [
                {
                    extend : 'pdf',
                    orientation : 'potrait',
                    pageSize : 'Legal',
                    title : 'Data Perankingan',
                    download : 'open'
                },
                {
                    extend : 'excel',
                    orientation: 'landscape',
                    // pageSize : 'Legal',
                    title : 'Data Perankingan',
                    // download : 'open'
                },
                {
                    extend : 'print',
                    orientation: 'landscape',
                    // pageSize : 'Legal',
                    title : 'Data Perankingan',
                    // download : 'open'
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
