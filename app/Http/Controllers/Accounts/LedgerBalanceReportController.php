<?php

namespace App\Http\Controllers\Accounts;

use App\ChartOfAccount;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ChartOfAccountBalance;

class LedgerBalanceReportController extends Controller
{
    public function report(){
        $charts = ChartOfAccount::orderByDesc('id')->get();
        $ledgers = ChartOfAccountBalance::with('chart_of_account')->orderByDesc('id')->paginate(25);
        return view('admin.accounts.reports.ledger_balance_report', compact('ledgers', 'charts'));
    }


    public function filter(){
        $start_date = request()->get('start_date') == "" ? '1970.01.01':request()->get('start_date');
        $end_date = request()->get('end_date') == "" ? today():request()->get('end_date');
        $chart_id = request()->get('chart_id');

        $charts = ChartOfAccount::orderByDesc('id')->get();
        $ledgers = ChartOfAccountBalance::with('chart_of_account')
                        ->whereBetween('date', [$start_date, $end_date])
                        ->when(request()->filled('chart_id'), function($q) use($chart_id){
                            $q->where('chart_of_account_id', $chart_id);
                        })
                        ->orderByDesc('id')
                        ->paginate(25);
        
        return view('admin.accounts.reports.ledger_balance_report', compact('ledgers', 'charts'));
    }
}