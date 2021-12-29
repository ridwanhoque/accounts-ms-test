<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.payment_methods
     *
     * @return void
     */
    public function run()
    {
        $this->call(StatusesTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(AccountInformationSeeder::class);
        $this->call(PaymentMethodTableSeeder::class);
        
        //accounts seeder
        $this->call(OwnerTypesTableSeeder::class);
        $this->call(ChartTypesTableSeeder::class);
        $this->call(ChartOfAccountTableSeeder::class);
        //uncomment DummyChartOfAccountsTableSeeder for more chart of accounts
        $this->call(DummyChartOfAccountsTableSeeder::class);
    }
}
