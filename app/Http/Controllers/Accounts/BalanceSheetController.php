<?php

namespace App\Http\Controllers\Accounts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Accounts\PaymentVoucher;
use App\Transaction;
use App\TransactionDetails;
use App\ChartOfAccount;

class BalanceSheetController extends Controller
{
    public function report__(){
        $assets = ChartOfAccount::with('asset_sum')
                        ->whereNull('parent_id')->where('chart_type_id', 3)
                        ->get();
            
        $liabilities = ChartOfAccount::with('asset_sum')
                        ->whereNull('parent_id')->where('chart_type_id', 4)
                        ->get();


        return view('admin.accounts.reports.balance_sheet', compact('assets', 'liabilities'));
    }



    public function report(){

        // $charts = ChartOfAccount::orderByDesc('id')->select('id', 'head_name', 'balance')->get();
        $incomes = ChartOfAccount::where([
            'parent_id' => NULL,
            'chart_type_id' => 1,
            ])
        ->where('balance', '!=', 0)
        ->orderByDesc('id')->select('id', 'head_name', 'balance')
        ->get();
        
        $liabilities = ChartOfAccount::where([
            'parent_id' => NULL,
            'chart_type_id' => 4,
            ])
        ->where('balance', '!=', 0)
        ->orderByDesc('id')->select('id', 'head_name', 'balance')
        ->get();


        $expenses = ChartOfAccount::where([
            'parent_id' => NULL,
            'chart_type_id' => 2,
            ])
        ->where('balance', '!=', 0)
        ->orderByDesc('id')->select('id', 'head_name', 'balance')
        ->get();
        
        $assets = ChartOfAccount::where([
            'parent_id' => NULL,
            'chart_type_id' => 3,
            ])
        ->where('balance', '!=', 0)
        ->orderByDesc('id')->select('id', 'head_name', 'balance')
        ->get();

        return view('admin.accounts.reports.balance_sheet', compact([
            'incomes', 'liabilities', 'expenses', 'assets'
            ]));
    }

    public function details($parent_chart_id){

            $chart_found = ChartOfAccount::finDOrFail($parent_chart_id);
        
            $charts = ChartOfAccount::where('parent_id', $parent_chart_id)
                        ->where('balance', '!=', 0)
                        ->get();
        
            return view('admin.accounts.reports.trial_balance_details', compact('charts'));

    }
}
