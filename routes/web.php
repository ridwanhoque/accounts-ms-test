<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

use App\Http\Controllers\AccountInformationController;
use App\Http\Controllers\Accounts\ContraVoucherController;
use App\Http\Controllers\Accounts\JournalController;
use App\Http\Controllers\Accounts\JournalVoucherController;
use App\Http\Controllers\Accounts\PaymentVoucherController;
use App\Http\Controllers\Accounts\ReceiveVoucherController;
use App\Http\Controllers\AssetChartController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\ChartOfAccountController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DirectProductionController;
use App\Http\Controllers\FmKutchaController;
use App\Http\Controllers\FundTransferController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IssueMaterialController;
use App\Http\Controllers\MachineController;
use App\Http\Controllers\OpeningAssetController;
use App\Http\Controllers\OpeningFmKutchaController;
use App\Http\Controllers\OpeningHaddiPowderController;
use App\Http\Controllers\OpeningProductController;
use App\Http\Controllers\OpeningRawMaterialStockController;
use App\Http\Controllers\OpeningSheetController;
use App\Http\Controllers\OpeningSubRawMaterialController;
use App\Http\Controllers\PartyController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PettycashChartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDeliveryController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\PurchaseReceiveController;
use App\Http\Controllers\RawMaterialController;
use App\Http\Controllers\RawMaterialStockController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SaleQuotationController;
use App\Http\Controllers\SheetProductionController;
use App\Http\Controllers\SheetSizeController;
use App\Http\Controllers\SubRawMaterialController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TemporaryDirectProductionController;
use App\Http\Controllers\TemporarySheetProductionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserRoleController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\WastageController;
use App\Http\Controllers\AccountsDashboardController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\Accounts\TrialBalanceController;
use App\Http\Controllers\Accounts\LedgerBalanceReportController;
use App\Http\Controllers\Accounts\ReceivableAccountsController;
use App\Http\Controllers\Accounts\PayableAccountsController;
use App\Http\Controllers\Accounts\BalanceSheetController;
use App\Http\Controllers\Accounts\IncomeExpenseController;
use App\Http\Controllers\Accounts\ChartBalanceReportController;
use App\Http\Controllers\RawMaterialStockBatchController;
use App\Http\Controllers\SheetproductiondetailsStockController;
use App\Http\Controllers\KutchaWastageStockController;
use App\Http\Controllers\KutchaSummaryReportController;
use App\Http\Controllers\HaddiPowderStockController;
use App\Http\Controllers\ProductSummaryReportController;
use App\Http\Controllers\ProductStockController;
use App\Http\Controllers\ProductBranchStockController;
use App\Http\Controllers\TemporaryDailyProductionController;
use App\Http\Controllers\DailyProductionController;
use App\Http\Controllers\ProductStockTransferController;
// use App\Http\Controllers\KutchaSummaryReportController;
// use App\Http\Controllers\HaddiPowderStockController;
// use App\Http\Controllers\ProductSummaryReportController;
// use App\Http\Controllers\ProductStockController;
// use App\Http\Controllers\ProductBranchStockController;



Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    Route::resource('companies', CompanyController::class);

    Route::get('users/edit', [UserController::class, 'edit']);
    Route::post('users/update', [UserController::class, 'update']);
    Route::get('users/change_password', [UserController::class, 'change_password_form']);
    Route::post('users/change_password', [UserController::class, 'change_password']);
    Route::get('users/list', [UserController::class, 'user_list']);

    Route::get('users/add-new', [UserController::class, 'add_new_user_form']);
    Route::post('users/add-new', [UserController::class, 'add_new_user']);
    Route::get('users/edit-user/{id}', [UserController::class, 'edit_user_form']);
    Route::post('users/update-user', [UserController::class, 'edit_user']);
    Route::get('users/show/{id}', [UserController::class, 'show_user']);
    Route::post('users/user-delete', [UserController::class, 'delete_user']);

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('suppliers', SupplierController::class);
    Route::resource('customers', CustomerController::class);
    Route::resource('issue_materials', IssueMaterialController::class);
    
    Route::resource('temporary_sheet_productions', TemporarySheetProductionController::class);

    Route::get('sheet_productions/load_kutchas', [SheetProductionController::class, 'ajax_load_kutchas']);
    Route::get('sheet_productions/material_check', [SheetProductionController::class, 'ajax_material_check']);
    Route::get('sheet_productions/fm_kutcha_check', [SheetProductionController::class, 'ajax_fm_kutcha_check']);
    Route::get('sheet_productions/load_sheet_sizes', [SheetProductionController::class, 'ajax_sheet_sizes']);
    Route::resource('sheet_productions', SheetProductionController::class);
    
    Route::resource('temporary_direct_productions', TemporaryDirectProductionController::class);

    Route::get('direct_productions/kutcha_by_product', [DirectProductionController::class, 'ajax_load_kutcha_by_product_id']);
    Route::resource('direct_productions', DirectProductionController::class);

    Route::group(['prefix' => 'production_settings'], function () {
        Route::resource('batches', BatchController::class);
        Route::resource('colors', ColorController::class);
        Route::resource('raw_materials', RawMaterialController::class);
        Route::resource('sub_raw_materials', SubRawMaterialController::class);
        Route::get('products/get_products', [ProductController::class, 'ajax_products']);
        Route::resource('products', ProductController::class);
        Route::resource('machines', MachineController::class);
        Route::resource('sheet_sizes', SheetSizeController::class);
        Route::resource('fm_kutchas', FmKutchaController::class);
        Route::resource('branches', BranchController::class);

        Route::get('opening_sub_raw_materials', [OpeningSubRawMaterialController::class, 'index']);
        Route::post('opening_sub_raw_material_store', [OpeningSubRawMaterialController::class, 'store']);
        Route::get('opening_fm_kutchas', [OpeningFmKutchaController::class, 'index']);
        Route::post('opening_fm_kutcha_store', [OpeningFmKutchaController::class, 'store']);
		Route::get('opening_products', [OpeningProductController::class, 'index']);
        Route::post('opening_product_store', [OpeningProductController::class ,'store']);
		Route::get('opening_sheets', [OpeningSheetController::class, 'index']);
        Route::post('opening_sheet_store', [OpeningSheetController::class, 'store']);
		Route::get('opening_haddi_powders', [OpeningHaddiPowderController::class, 'index']);
        Route::post('opening_haddi_powder_store', [OpeningHaddiPowderController::class, 'store']);
    });

    Route::resource('wastages', WastageController::class);
    Route::get('purchasedetails', [PurchaseReceiveController::class, 'details_ajax']);
    Route::resource('purchases', PurchaseController::class);
    Route::resource('purchase_receives', PurchaseReceiveController::class);
    Route::resource('sale_quotations', SaleQuotationController::class);
    Route::resource('sales', SaleController::class);
    Route::get('product_deliveries/invoice_by_product', [ProductDeliveryController::class, 'ajax_invoice_by_product']);
    Route::get('product_deliveries/sale_invoice_qty', [ProductDeliveryController::class, 'ajax_sale_invoice_qty']);
    Route::resource('product_deliveries', ProductDeliveryController::class);

    Route::resource('temporary_daily_productions', TemporaryDailyProductionController::class);
    Route::get('daily_productions/get_sheet_stock_data', [DailyProductionController::class, 'ajax_get_sheet_stock']);
    Route::get('daily_productions/get_product_data', [DailyProductionController::class, 'get_product_data']);
    Route::resource('daily_productions', DailyProductionController::class);
    Route::resource('store_officers', StoreOfficerController::class);

    Route::resource('product_stock_transfers', ProductStockTransferController::class);

//    Accounting and finance
    Route::resource('chart_of_accounts', ChartOfAccountController::class);
    Route::resource('chart-of-account', ChartOfAccountController::class);
    Route::resource('account-information', AccountInformationController::class);
    Route::resource('payment-method', PaymentMethodController::class);
    Route::resource('party', PartyController::class);
    Route::resource('vendors', VendorController::class);
    Route::resource('voucher', VoucherController::class);
    Route::resource('pettycash_charts', PettycashChartController::class);
    Route::get('get-payment-method', [VoucherController::class, 'get_payment_method'])->name('voucher.get-payment-method');

    // Route::put('asset_chart_update/{id}', 'AssetChartController@updateChart');
    Route::resource('asset_charts', AssetChartController::class);
    Route::get('opening_assets', [OpeningAssetController::class, 'index']);
    Route::post('opening_asset_store', [OpeningAssetController::class, 'store']);

    // Role permissions
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('user_roles', UserRoleController::class);

    Route::group(['prefix' => 'accounting'], function () {
        Route::get('fund_transfers/account_balance', [FundTransferController::class, 'get_account_balance']);
        Route::resource('fund_transfers', FundTransferController::class);
        Route::resource('pettycash_deposits', PettycashDepositController::class);
        Route::resource('pettycash_expenses', PettycashExpenseController::class);
        Route::resource('advance_payments', AdvancePaymentController::class);
        Route::get('voucher_payments/{id}', [DuePaymentController::class, 'voucher_payments']);
        Route::get('payment_invoice/{id}', [DuePaymentController::class, 'payment_invoice']);
        Route::resource('due_payments', DuePaymentController::class);
        Route::resource('assets', AssetController::class);
        Route::resource('ledgers', LedgerController::class);

        //accounts
        Route::resource('payment_vouchers', PaymentVoucherController::class);
        Route::resource('receive_vouchers', ReceiveVoucherController::class);
        Route::resource('journal_vouchers', JournalVoucherController::class);
		Route::resource('contra_vouchers', ContraVoucherController::class);
        Route::resource('journals', JournalController::class);

    });

    Route::group(['prefix' => 'reports'], function () {

        //production report
        Route::get('opening_raw_material_stocks', [OpeningRawMaterialStockController::class, 'report']);
        
        Route::get('raw_material_stocks', [RawMaterialStockController::class, 'report']);
        Route::get('raw_material_stocks/filter', [RawMaterialStockController::class, 'filter']);

        Route::get('raw_material_batch_stocks', [RawMaterialStockBatchController::class, 'report']);
        Route::get('rm_batch_stocks', [RmBatchStockController::class, 'report']);

        Route::get('sheet_stocks', [SheetStockController::class, 'report']);
        Route::get('sheet_stocks/filter', [SheetStockController::class,'filter']);
        Route::get('sheet_material_stocks', [SheetproductiondetailsStockController::class, 'report']);

        Route::get('wastage_stocks', [WastageStockController::class, 'report']);

        Route::get('product_stocks', [ProductStockController::class, 'report']);
        Route::get('product_branch_stocks', [ProductBranchStockController::class, 'report']);
        Route::get('product_summary_report', [ProductSummaryReportController::class, 'report']);

        Route::get('kutcha_summary_report', [KutchaSummaryReportController::class, 'report']);
        Route::get('kutcha_inout_stocks', [KutchaInoutReportController::class, 'index']);
        Route::get('kutcha_wastage_stocks', [KutchaWastageStockController::class, 'report']);
        Route::get('daily_kutcha_stocks', [DailyKutchaReportController::class, 'report']);
        Route::get('forming_wastage_stocks', [FormingWastageStockController::class, 'report']);

        Route::get('haddi_powder_stocks', [HaddiPowderStockController::class, 'index']);

        Route::get('sheet_stocks', [SheetStockController::class, 'report']);
        Route::get('sheet_stocks/filter', [SheetStockController::class, 'filter']);

        //Accounting Report
        Route::get('income-expense', [ReportController::class, 'reportPage']);
        Route::get('income-expense/filter', [ReportController::class, 'searchReport']);
        Route::get('accounts_dashboard', [AccountsDashboardController::class, 'report']);
        Route::get('accounts_receivable', [AccountsReceivableController::class, 'report']);
        Route::get('accounts_payable', [AccountsPayableController::class, 'report']);
        Route::get('income_statement', [IncomeStatementController::class, 'report']);
        Route::get('cash_flow', [CashFlowController::class, 'report']);
        Route::get('payable_dues', [PurchaseDueController::class, 'report']);


        //Accounts Report
        Route::get('balance_sheet', [BalanceSheetController::class, 'report']);
        Route::get('income_expense', [IncomeExpenseController::class, 'report']);
        Route::get('receivable_accounts', [ReceivableAccountsController::class, 'report']);
        Route::get('payable_accounts', [PayableAccountsController::class, 'report']);
        Route::get('ledger_balance', [LedgerBalanceReportController::class, 'report']);
        Route::get('trial_balance', [TrialBalanceController::class, 'report']);
        Route::get('trial_balance/{id}', [TrialBalanceController::class, 'details']);
        //new
        Route::get('chart_balance/{id?}', [ChartBalanceReportController::class, 'index']);
        Route::get('chart_tree/{id?}', [ChartTreeController::class, 'index']);
    });


    Route::get('test', [SheetProductionController::class, 'test']);



});
