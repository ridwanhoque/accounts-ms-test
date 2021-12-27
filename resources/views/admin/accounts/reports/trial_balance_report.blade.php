@extends('admin.master')
@section('title','Trial Balance Report')

@section('content')

<main class="app-content">

    <div class="app-title">
        <div>
            <h1><i class="fa fa-edit"></i> @yield('title')</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">@yield('title')</a></li>
        </ul>
    </div>



    @if ($errors->any())
    <div class="alert alert-dismissible alert-danger">
        <button class="close" type="button" data-dismiss="alert">�</button>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if (Session::get('error'))
    <div class="alert alert-dismissible alert-danger">
        <button class="close" type="button" data-dismiss="alert">�</button>
        <strong>Error !</strong> {{ Session::get('error') }}
    </div>
    @endif



    <!-- <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <h3 class="tile-title"><i class="fa fa-search"></i> &nbsp; Search Your Report</h3>
                        <br>
                        <div class="tile-body">
                            <form class="row" action="{{ url('report/income-expense/filter/') }}" method="get">
                                <div class="form-group col-md-5">
                                    <label class="control-label">Start Date</label>
                                    <input class="form-control date" type="text" name="start_date" value="" placeholder="Start Date" autocomplete="off">
                                </div>
                                <div class="form-group col-md-5">
                                    <label class="control-label">End Date </label>
                                    <input class="form-control date" type="text" name="end_date" value="" placeholder="End Date" autocomplete="off">
                                </div>
                                <div class="form-group col-md-2 align-self-end">
                                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Search</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
        </div> -->


    <div class="row">

        <div class="col-md-12">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Trial balance</h3>
                        </div>
                        <div class="card-body">
                            <table class="table-hover table-bordered col-md-12">
                                <tr>
                                    <th>Particular</th>
                                    <th class="text-right">Debit</th>
                                    <th class="text-right">Credit</th>
                                </tr>
                                <tr>
                                    <td colspan="3" class="text-center"><strong>Asset</strong></td>
                                </tr>
                                @foreach ($assets as $asset)
                                <tr>
                                    <td>
                                        <a href="{{ url('/reports/trial_balance', $asset->id) }}">
                                            {{ $asset->head_name ?? '' }}
                                        </a>
                                    </td>
                                    <td class="text-right debit_amount">{{ $asset->balance > 0 ? ($asset->balance) : 0 }}</td>
                                    <td class="text-right credit_amount">{{ $asset->balance < 0 ? ($asset->balance) : 0 }}</td>
                                </tr>
                                @endforeach

                                <tr>
                                    <td colspan="3" class="text-center"><strong>Liabilities</strong></td>
                                </tr>
                                @foreach ($liabilities as $liability)
                                <tr>
                                    <td>
                                        <a href="{{ url('/reports/trial_balance', $liability->id) }}">
                                            {{ $liability->head_name ?? '' }}
                                        </a>
                                    </td>
                                    <td class="text-right debit_amount">{{ $liability->balance < 0 ? ($liability->balance) : 0 }}</td>
                                    <td class="text-right credit_amount">{{ $liability->balance > 0 ? ($liability->balance) : 0 }}</td>
                                </tr>
                                @endforeach

                                <tr>
                                    <td colspan="3" class="text-center"><strong>Incomes</strong></td>
                                </tr>
                                @foreach ($incomes as $income)
                                <tr>
                                    <td>
                                        <a href="{{ url('/reports/trial_balance', $income->id) }}">
                                            {{ $income->head_name ?? '' }}
                                        </a>
                                    </td>
                                    <td class="text-right debit_amount">{{ $income->balance < 0 ? ($income->balance) : 0 }}</td>
                                    <td class="text-right credit_amount">{{ $income->balance > 0 ? ($income->balance) : 0 }}</td>
                                </tr>
                                @endforeach

                                <tr>
                                    <td colspan="3" class="text-center"><strong>Expenses</strong></td>
                                </tr>
                                @foreach ($expenses as $expense)
                                <tr>
                                    <td>
                                        <a href="{{ url('/reports/trial_balance', $expense->id) }}">
                                            {{ $expense->head_name ?? '' }}
                                        </a>
                                    </td>
                                    <td class="text-right debit_amount">{{ $expense->balance > 0 ? ($expense->balance) : 0 }}</td>
                                    <td class="text-right credit_amount">{{ $expense->balance < 0 ? ($expense->balance) : 0 }}</td>
                                </tr>
                                @endforeach

                                <tr>
                                    <td class="text-right" style="font-weight: bold">Total</td>
                                    <td class="text-right" style="font-weight: bold" id="totalDebit"></td>
                                    <td class="text-right" style="font-weight: bold" id="totalCredit"></td>
                                </tr>
                            </table>
                        </div>

                    </div>
                  
                    
                </div>
            </div>
        </div>



    </div>

</main>


@endsection


@section('js')
<script type="text/javascript" src="{{ asset('assets/admin/js/plugins/bootstrap-datepicker.min.js') }}"></script>
<script>
    $('.date').datepicker({
            format: "yyyy-mm-dd",
            autoclose: true,
            todayHighlight: true
        });

        $(document).ready(function(){
            let totalDebit = 0;
            let totalCredit = 0;

            $('.debit_amount').each(function(){
                totalDebit += parseFloat($(this).text());
            });

            $('.credit_amount').each(function(){
                totalCredit += parseFloat($(this).text());
            });

            $('#totalDebit').text(totalDebit);
            $('#totalCredit').text(totalCredit);
        });
</script>
<!-- Data table plugin-->
<script type="text/javascript" src="{{ asset('assets/admin/js/plugins/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/admin/js/plugins/dataTables.bootstrap.min.js')}}"></script>


<script type="text/javascript">
    $('#chartOfAccountTable').DataTable();
</script>

@stop