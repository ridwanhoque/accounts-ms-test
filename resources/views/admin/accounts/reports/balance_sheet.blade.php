@extends('admin.master')
@section('title','Balance Sheet Report')

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
                <button class="close" type="button" data-dismiss="alert">×</button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (Session::get('error'))
            <div class="alert alert-dismissible alert-danger">
                <button class="close" type="button" data-dismiss="alert">×</button>
                <strong>Error !</strong> {{ Session::get('error') }}
            </div>
        @endif



        

        <div class="row">


            


            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title"><i class="fa fa-list"></i> &nbsp; Asset List</h3>

                    <br>
                    <div class="tile-body">
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>Chart Of Account</th>
                                <th>Amount</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($assets as $asset)
                                <tr>
                                    <td>
                                        <a href="{{ url('/reports/trial_balance', $asset->id) }}">
                                            {{ $asset->head_name }}
                                        </a>
                                    </td>
                                    <td>{{ ($asset->balance) }}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>


            <div class="col-md-6">
                <div class="tile">
                    <h3 class="tile-title"><i class="fa fa-list"></i> &nbsp; Liability List</h3>

                    <br>
                    <div class="tile-body">
                        <table class="table table-hover table-bordered">
                            <thead>
                            <tr>
                                <th>Chart Of Account</th>
                                <th>Amount</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($liabilities as $liability)
                                <tr>
                                    <td>
                                        <a href="{{ url('/reports/trial_balance', $liability->id) }}">
                                            {{ $liability->head_name }}
                                        </a>
                                    </td>
                                    <td>{{ ($liability->balance) }}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
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
    </script>
@stop