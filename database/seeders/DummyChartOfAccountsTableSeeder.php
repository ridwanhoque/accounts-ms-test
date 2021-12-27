<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\ChartOfAccount;

class DummyChartOfAccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default_charts = [
            // 'head_name','parent_id','tire','chart_type_id','owner_type_id','slug'
            //below are charts under trade payable chart having id = 52
            ['A.B Card Center', 52, 5, 4, 1],
            ['A.K Enterprise', 52, 5, 4, 1],
            ['AB Plastic Colour', 52, 5, 4, 1],
            ['AB Trade International', 52, 5, 4, 1],
            ['Abu Taher Trading Corporation', 52, 5, 4, 1],
            ['AIT Payable', 52, 5, 4, 1],
            ['Al-Yeaad Pipe & Fittings', 52, 5, 4, 1],
            ['ARM Engineering & Techonology', 52, 5, 4, 1],
            ['Azmir Electroploting Works', 52, 5, 4, 1],
            ['Dohar Plastic', 52, 5, 4, 1],
            ['Eletrice Bill -Payable', 52, 5, 4, 1],
            ['Esamoti Traders', 52, 5, 4, 1],
            ['Factory Rent-Payable', 52, 5, 4, 1],
            ['Fire Protection', 52, 5, 4, 1],
            ['Global Insurance', 52, 5, 4, 1],
            ['Gold Asia', 52, 5, 4, 1],
            ['H.S Enterprise', 52, 5, 4, 1],
            ['Habib Traders', 52, 5, 4, 1],
            ['HED Power Engineer', 52, 5, 4, 1],
            ['Isamoti Traders', 52, 5, 4, 1],
            ['Jalal Vai Jahangir Cycle Store', 52, 5, 4, 1],
            ['Jams Engineering Works', 52, 5, 4, 1],
            ['Jobair Molding', 52, 5, 4, 1],
            ['Khaleque  & Sons ( uttara)', 52, 5, 4, 1],
            ['Lotif Driver', 52, 5, 4, 1],
            ['M.R Mill Machinery', 52, 5, 4, 1],
            ['M/S Sanjid Plastic-PET', 52, 5, 4, 1],
            ['Ma Babar Doa Motors Workshop', 52, 5, 4, 1],
            ['Mahtab Flexible Printing Press', 52, 5, 4, 1],
            ['Makka Cable', 52, 5, 4, 1],
            ['Makka Engineering Works', 52, 5, 4, 1],
            ['Mars Media', 52, 5, 4, 1],
            ['Mayer Doa, Noorjahan Iron Store', 52, 5, 4, 1],
            ['Monitoring Charges Payable', 52, 5, 4, 1],
            ['Multi Links Traders', 52, 5, 4, 1],
            ['Nahid Filling Station', 52, 5, 4, 1],
            ['Nafisa boiler house ', 52, 5, 4, 1],
            ['New Millon Electric House', 52, 5, 4, 1],
            ['Ononna Colour House', 52, 5, 4, 1],
            ['Other  Payables for  works-Mold', 52, 5, 4, 1],
            ['Pacific International', 52, 5, 4, 1],
            ['Provati Insurance Company ltd', 52, 5, 4, 1],
            ['Quality Mineral Industries', 52, 5, 4, 1],
            ['R S Plastic', 52, 5, 4, 1],
            ['R.Y PACKEGING', 52, 5, 4, 1],
            ['Raj Engineering Works', 52, 5, 4, 1],
            ['Rani Pet & Plastic Industries ', 52, 5, 4, 1],
            ['Rizma Plastic ', 52, 5, 4, 1],
            ['Rizma-New poly', 52, 5, 4, 1],
            ['Sadek Electric', 52, 5, 4, 1],
            ['Samuda Plastic Chemical Complex Limited', 52, 5, 4, 1],
            ['Sanjid Plastic-HIPS', 52, 5, 4, 1],
            ['Sawddes Plastic/janata  Pet  Rcycle Industries', 52, 5, 4, 1],
            ['Security Service -Payable', 52, 5, 4, 1],
            ['Shohel Engineering & Works', 52, 5, 4, 1],
            ['Silva Technologies', 52, 5, 4, 1],
            ['Sonjoy Engineering Work\'s', 52, 5, 4, 1],
            ['Sunvy Plastic', 52, 5, 4, 1],
            ['Synod Electric Company- 01', 52, 5, 4, 1],
            ['Tex BD Trading Corporaton', 52, 5, 4, 1],
            ['Unique Bearing & Machineries', 52, 5, 4, 1],
            ['Universal Engineering', 52, 5, 4, 1],
            ['Zorina Enterprise', 52, 5, 4, 1],
            ['Sky view', 52, 5, 4, 1],

            //'head_name','parent_id','tire','chart_type_id','owner_type_id','slug'
            //below chart of accoutns are under accounts receiveable->corporate having id = 36
            ['Abdul Monem Ltd (igloo)', 36, 5, 3, 1],
            ['Amin Square (BD)  ltd ', 36, 5, 3, 1],
            ['Amar Tong', 36, 5, 3, 1],
            ['Ascent Group(Coffe World)', 36, 5, 3, 1],
            ['B.M.P Plan (Kamrangirchor)', 36, 5, 3, 1],
            ['Bangal Biscuits Ltd.', 36, 5, 3, 1],
            ['Ben Cey Food Products(Adabor)', 36, 5, 3, 1],
            ['Bexmco Pharmaceuticals Ltd', 36, 5, 3, 1],
            ['BRB Cables', 36, 5, 3, 1],
            ['Ceylon Biscuit Bangladesh Ltd.', 36, 5, 3, 1],
            ['Chowdhury Enterprise', 36, 5, 3, 1],
            ['Cocola Food Products Ltd.', 36, 5, 3, 1],
            ['Cookants (Amit)', 36, 5, 3, 1],
            ['Coopers(Gulshan-02)', 36, 5, 3, 1],
            ['Cup & Pack Solution(Gulshan-01)', 36, 5, 3, 1],
            ['Danish Foods Limited', 36, 5, 3, 1],
            ['Dekko Foods Limited', 36, 5, 3, 1],
            ['Dew Touch Bangladesh Ltd. (Mohammadpur)', 36, 5, 3, 1],
            ['Dhaka Ice Cream Industries Ltd(Polar)', 36, 5, 3, 1],
            ['Eakin Consumer Food', 36, 5, 3, 1],
            ['Ekra Packaging  (Sylhet)', 36, 5, 3, 1],
            ['F.A Sarder Plastic (Kamrangirchar)', 36, 5, 3, 1],
            ['Fajitas', 36, 5, 3, 1],
            ['FK Plastic', 36, 5, 3, 1],
            ['Hamid Tex Fashion (Hamid Group)', 36, 5, 3, 1],
            ['Haque Limited', 36, 5, 3, 1],
            ['Harvest World Agro Food Ind. Ltd. (Uttara)', 36, 5, 3, 1],
            ['Hashem Foods Limited (Sajeeb Group)', 36, 5, 3, 1],
            ['Hashy  Tiger co ltd ', 36, 5, 3, 1],
            ['Hellow Green (Mirpur)', 36, 5, 3, 1],
            ['IGLO Ice Cream Factory (Abdul Momen)', 36, 5, 3, 1],
            ['Instapack', 36, 5, 3, 1],
            ['Ismail Hazi', 36, 5, 3, 1],
            ['Jabed Agro Food Processing Ltd', 36, 5, 3, 1],
            ['June & Zaeif Group', 36, 5, 3, 1],
            ['Kazi Food Industries Ltd (Savar)', 36, 5, 3, 1],
            ['Khan\'s Kitchen Limited', 36, 5, 3, 1],
            ['M/S Amin Enterprise (Biman)', 36, 5, 3, 1],
            ['M/S Araf Enterprise', 36, 5, 3, 1],
            ['Masum Bekary (Dinajpur)', 36, 5, 3, 1],
            ['Mina Dispo Bazar (Begumbazar)', 36, 5, 3, 1],
            ['Mondol Group', 36, 5, 3, 1],
            ['Mr. Emdadul Haque ', 36, 5, 3, 1],
            ['Mr. Shakil- Sylhet', 36, 5, 3, 1],
            ['Mr. Shiplo', 36, 5, 3, 1],
            ['Mr.Emdadul Haq', 36, 5, 3, 1],
            ['Mutual Foam and tableware Industries Ltd', 36, 5, 3, 1],
            ['Nahar Corporation', 36, 5, 3, 1],
            ['New Olympia', 36, 5, 3, 1],
            ['North South University', 36, 5, 3, 1],
            ['Olympic Industries Limited', 36, 5, 3, 1],
            ['Pran RFL Group', 36, 5, 3, 1],
            ['Pusti Food', 36, 5, 3, 1],
            ['Quazi Enterprise Limited', 36, 5, 3, 1],
            ['R.N.R Enterprise', 36, 5, 3, 1],
            ['Rani Food Industries Ltd.', 36, 5, 3, 1],
            ['Reedisha Food & Beverage Limited', 36, 5, 3, 1],
            ['Ren Trade Ent.', 36, 5, 3, 1],
            ['Romania Foods & Beverage Limited', 36, 5, 3, 1],
            ['RP Trasers', 36, 5, 3, 1],
            ['RS Enterprise', 36, 5, 3, 1],
            ['RS Trading', 36, 5, 3, 1],
            ['Sanaullah Enterprise', 36, 5, 3, 1],
            ['Shofique Enterprise (Cttg.)', 36, 5, 3, 1],
            ['Six Seasons Food & Beverages Ltd', 36, 5, 3, 1],
            ['Sonali Bangla Ent.', 36, 5, 3, 1],
            ['Softy', 36, 5, 3, 1],
            ['Solargad Agro', 36, 5, 3, 1],
            ['Sornali Ent.', 36, 5, 3, 1],
            ['Square Hospital Ltd.', 36, 5, 3, 1],
            ['STS Holdings Ltd. (Apollo)', 36, 5, 3, 1],
            ['Swopno', 36, 5, 3, 1],
            ['Transcom Beverage Limited (PEPSI)', 36, 5, 3, 1],
            ['Transcom Food Limited  (K FC)', 36, 5, 3, 1],
            ['Unimart Limited (Chef Trading)', 36, 5, 3, 1],
            ['Unimert Limited', 36, 5, 3, 1],
            ['Mr. Atik ', 36, 5, 3, 1],
            ['United Commercial Enterprise', 36, 5, 3, 1],

            //'head_name','parent_id','tire','chart_type_id','owner_type_id','slug'
            //charts under cash in hand having id = 42
            ['Cash in Hand - Head Office', 42, 4, 3, 3, 'cash-in-hand-head-office'],
            ['Cash in Hand - Factory Office', 42, 4, 3, 3, 'cash-in-hand-factory-office'],

            //'head_name','parent_id','tire','chart_type_id','owner_type_id','slug'
            //charts under cash at bank having id = 43
            ['Dutch Bangla Bank Limited (3627)', 43, 4,  3, 2],
            ['Islamic Bank Bangladesh Ltd.(8103)', 43, 4,  3, 2],
            ['Mutual Trust Bank Ltd. (1434)', 43, 4,  3, 2],
            ['Mutual Trust Bank Ltd. (1445)', 43, 4,  3, 2],
            ['Mutual Trust Bank Ltd.(8209)', 43, 4,  3, 2],
            ['Prime Bank, New Eskaton Branch', 43, 4,  3, 2],
            ['Prime Bank, Shibpur Branch Narsingdi', 43, 4,  3, 2],
            ['Social Islami Bank Ltd.(2105)', 43, 4,  3, 2],
            ['Social Islami Bank Ltd.(2274)', 43, 4,  3, 2],
            ['Southeast Bank -3692', 43, 4,  3, 2],
            ['Standard Bank Ltd.(1836)', 43, 4,  3, 2],

            //'head_name','parent_id','tire','chart_type_id','owner_type_id','slug'
            //charts under Advance, Deposits and Pre-payments having id = 28
            ['Supply', 28, 3, 3, 4, 'supply'],
            //charts under Other Income having id = 3
            ['Revenue', 3, 2, 1, 4, 'revenue'],
            //charts under Administrative  Expenses having id = 9
            ['Salary', 9, 2,  2, 4, 'salary'],
            ['Withdraw', 9, 2, 2, 4, 'withdraw'],
            //charts under Other Payable having id = 53
            ['Note payable', 53, 3, 4, 4, 'note-payable'],


            
        ];

        foreach ($default_charts as $default_chart) {
            ChartOfAccount::create([
                'company_id' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'head_name' => $default_chart[0],
                'parent_id' => $default_chart[1],
                'tire' => $default_chart[2],
                'chart_type_id' => $default_chart[3],
                'owner_type_id' => $default_chart[4],
                'is_default' => 1,
                'status' => 1
            ]);
        }
    }
}
