<?php

namespace App\Http\Controllers\Accounts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ChartOfAccount;
use App\TransactionDetails;

class ReceivableAccountsController extends Controller
{
    public function report($parent_id = null){
        // $receivable_parent_ids = ChartOfAccount::where('parent_id', \receivable_chart_id())->pluck('id');
        // $receivable_accounts = ChartOfAccount::where('balance', '>', 0)
        //         ->whereIn('parent_id', $receivable_parent_ids)->paginate(25);

        if($parent_id == null){
            $receivable_accounts = ChartOfAccount::where('parent_id', \receivable_chart_id())
                                        ->where('balance', '!=', 0)
                                        ->paginate(25);
        }else{
            $receivable_accounts = ChartOfAccount::where('parent_id', $parent_id)
            ->where('balance', '!=', 0)
            ->paginate(25);
        }
    
        return view('admin.accounts.reports.receivable_accounts', compact('receivable_accounts'));
    }
}
