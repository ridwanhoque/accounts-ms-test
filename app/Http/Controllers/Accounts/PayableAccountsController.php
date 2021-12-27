<?php

namespace App\Http\Controllers\Accounts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ChartOfAccount;
use App\TransactionDetails;

class PayableAccountsController extends Controller
{
    public function report($parent_id = null){
        // $payable_parent_ids = ChartOfAccount::where('parent_id', \payable_chart_id())->pluck('id');
        // $payable_accounts = ChartOfAccount::where('balance', '!=', 0)
        //         ->whereIn('parent_id', $payable_parent_ids)
        //         ->paginate(25);

        if($parent_id == null){
            $payable_accounts = ChartOfAccount::where('parent_id', \payable_chart_id())
            ->where('balance', '!=', 0)
            ->paginate(25);
        }else{
            $payable_accounts = ChartOfAccount::where('parent_id', $parent_id)
            ->where('balance', '!=', 0)
            ->paginate(25);
        }
        
        return view('admin.accounts.reports.payable_accounts', compact('payable_accounts'));

    }
}
