@extends('vendor.backpack.base.layout')
@section("before_styles")
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/') }}/select2/select2.min.css">
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/plugins/') }}/datepicker/datepicker3.css">

@stop

@section('content')
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(['url' => 'admin/report/licensePayments','method'=>'get']) !!}

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">License Payment Report</h3>
                </div>
                <div class="box-body ">
                    <!-- load the view from the application if it exists, otherwise load the one in the package -->
                    <!-- load the view from the application if it exists, otherwise load the one in the package -->
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>From</label>
                            <input type="text" name="from" value="" class="form-control date">
                        </div>
                        <div class="form-group col-md-6">
                            <label>To</label>
                            <input type="text" name="to" value="" class="form-control date">
                        </div>


                    </div>




                </div><!-- /.box-body -->
                <div class="box-footer">
                    <input type="submit" value="Search" class="btn btn-success" name="search">
                </div><!-- /.box-footer-->

            </div><!-- /.box -->
            {!! Form::close() !!}
        </div>

    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Result</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered datatable">
                        <thead>
                        <tr>
                            <td>Date</td><td>License</td><td>Tons</td><td>Amount</td>
                        </tr>
                        </thead>
                        @if(isset($payments))
                        <tbody>

                            <? //$total_fish_1=0;?>
                            @foreach($payments as $payment)
                                <tr>
                                    <td>{{$payment->date}}</td>
                                    <td>{{$payment->license->licenseOwner}}</td>
                                    <td>{{$payment->tons}}</td>
                                    <td>{{$payment->amount}}</td>
                                </tr>
                            @endforeach



                        <tfoot>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>{{$total_tons}}</td>
                            <td>{{$total_amount}}</td>
                        </tr>
                        </tfoot>

                        </tbody>
                        @endif

                    </table>
                </div>
                <!-- /.box-body -->

            </div>


            <!-- /.box -->
        </div>

    </div>
@stop
@section("after_scripts")

    <script src="{{ asset('vendor/adminlte/plugins/') }}/select2/select2.min.js"></script>
    <script src="{{ asset('vendor/adminlte/plugins/') }}/datepicker/bootstrap-datepicker.js"></script>

    <script type="text/javascript">
        $('.date').datepicker({
            format: "dd/mm/yyyy"
        });
        $(document).ready(function() {
            $(".select2").select2();
        });
        var table=$(".datatable").DataTable({
            dom: 'Bfrtip',
            buttons: [
                {
                    extend: 'copyHtml5',
                    exportOptions: {
                        columns: [ 0, ':visible' ]
                    }
                },
                {
                    extend: 'excelHtml5',
                    exportOptions: {
                        columns: ':visible'
                    }
                },
                {
                    extend: 'pdfHtml5',
                    exportOptions: {
                        columns: [ 0, 1, 2, 5 ]
                    }
                },
                'colvis'
            ]
        });
    </script>


@stop