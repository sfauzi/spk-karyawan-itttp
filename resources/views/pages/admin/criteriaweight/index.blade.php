@extends('layouts.admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"><b>Criteria &</b> <b>
                                <font color="FF7B7B">Weight</font>
                            </b></h1>
                        <span>Santai Dulu Gak Sih 🥦</span>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <div class="col text-right">
                            <a href="{{ route('criteriaweights.create') }}" class='btn btn-primary'> <span
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

                                <!-- Button Container -->
                                <div class="btn-container mb-3">
                                    {{-- <button id="copyBtn" class="btn btn-secondary"><i class="fas fa-copy"></i>
                                        Copy</button>
                                    <button id="csvBtn" class="btn btn-secondary"><i class="fas fa-file-csv"></i>
                                        CSV</button>
                                    <button id="excelBtn" class="btn btn-success"><i class="fas fa-file-excel"></i>
                                        Excel</button>
                                    <button id="pdfBtn" class="btn btn-danger"><i class="fas fa-file-pdf"></i>
                                        PDF</button>
                                    <button id="printBtn" class="btn btn-primary"><i class="fas fa-print"></i>
                                        Print</button> --}}
                                    <button type="button" class="btn btn-success" data-toggle="modal"
                                        data-target="#exampleModal">
                                        <span class="fa fa-file-import"></span> Import
                                    </button>
                                </div>


                                {{-- <br> --}}
                                <table id="mytable" class="display nowrap table table-striped table-bordered">
                                    <thead>
                                        {{-- <tr>
                                            <th colspan="5" style="text-align: right;">
                                                <button type="button" class="btn btn-success" data-toggle="modal"
                                                    data-target="#exampleModal">
                                                    <span class="fa fa-file-import"></span> Import
                                                </button>
                                            </th>
                                        </tr> --}}
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
                                                <td>{{ $c->name }}</td>
                                                <td>{{ $c->type }}</td>
                                                <td>{{ $c->weight }}</td>
                                                <td>{{ $c->description }}</td>
                                                <td>
                                                    <form action="{{ route('criteriaweights.destroy', $c->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <span data-toggle="tooltip" data-placement="bottom"
                                                            title="Edit Data">
                                                            <a href="{{ route('criteriaweights.edit', $c->id) }}"
                                                                class="btn btn-info"><span class="fa fa-edit"></span>
                                                            </a>
                                                        </span>
                                                        <span data-toggle="tooltip" data-placement="bottom"
                                                            title="Delete Data">
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

                        <!-- Modal -->
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ route('criteriaweights.import') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <input type="file" name="file" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success">Import</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="{{ url('importexcelcriteriaweights') }}" method="post"
                                        enctype="multipart/form-data">
                                        <div class="modal-body">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <input type="file" name="file" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success">Import</button>
                                        </div>
                                </div>
                                </form>

                            </div>
                        </div> --}}

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
    {{-- <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()

            $('#mytable').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'pdf',
                        orientation: 'potrait',
                        pageSize: 'Legal',
                        title: 'Data Criteria & Weight',
                        download: 'open'
                    },
                    {
                        extend: 'excel',
                        orientation: 'landscape',
                        title: 'Data Criteria & Weight',
                    },
                    {
                        extend: 'print',
                        orientation: 'landscape',
                        title: 'Data Criteria & Weight',
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
                        title: "Data Criteria Weight"
                    },
                    {
                        extend: 'csv',
                        text: '<i class="fas fa-file-csv"></i> CSV',
                        className: 'btn btn-secondary',
                        title: "Data Criteria Weight"
                    },
                    {
                        extend: 'excel',
                        text: '<i class="fas fa-file-excel"></i> Excel',
                        className: 'btn btn-success',
                        title: "Data Criteria Weight"
                    },
                    {
                        extend: 'pdf',
                        text: '<i class="fas fa-file-pdf"></i> PDF',
                        className: 'btn btn-danger',
                        title: "Data Criteria Weight",
                        download: 'open'
                    },
                    {
                        extend: 'print',
                        text: '<i class="fas fa-print"></i> Print',
                        className: 'btn btn-primary',
                        title: "Data Criteria Weight"
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
