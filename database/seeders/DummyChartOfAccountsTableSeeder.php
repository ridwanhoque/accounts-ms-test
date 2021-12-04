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
            //below are charts under trade payable chart having id = 26
            ['A.B Card Center', 26, 5, 4, 1],
            ['A.K Enterprise', 26, 5, 4, 1],
            ['AB Plastic Colour', 26, 5, 4, 1],
            ['AB Trade International', 26, 5, 4, 1],
            ['Abu Taher Trading Corporation', 26, 5, 4, 1],
            ['AIT Payable', 26, 5, 4, 1],
            ['Al-Yeaad Pipe & Fittings', 26, 5, 4, 1],
            ['ARM Engineering & Techonology', 26, 5, 4, 1],
            ['Azmir Electroploting Works', 26, 5, 4, 1],
            ['Dohar Plastic', 26, 5, 4, 1],
            ['Eletrice Bill -Payable', 26, 5, 4, 1],
            ['Esamoti Traders', 26, 5, 4, 1],
            ['Factory Rent-Payable', 26, 5, 4, 1],
            ['Fire Protection', 26, 5, 4, 1],
            ['Global Insurance', 26, 5, 4, 1],
            ['Gold Asia', 26, 5, 4, 1],
            ['H.S Enterprise', 26, 5, 4, 1],
            ['Habib Traders', 26, 5, 4, 1],
            ['HED Power Engineer', 26, 5, 4, 1],
            ['Isamoti Traders', 26, 5, 4, 1],
            ['Jalal Vai Jahangir Cycle Store', 26, 5, 4, 1],
            ['Jams Engineering Works', 26, 5, 4, 1],
            ['Jobair Molding', 26, 5, 4, 1],
            ['Khaleque  & Sons ( uttara)', 26, 5, 4, 1],
            ['Lotif Driver', 26, 5, 4, 1],
            ['M.R Mill Machinery', 26, 5, 4, 1],
            ['M/S Sanjid Plastic-PET', 26, 5, 4, 1],
            ['Ma Babar Doa Motors Workshop', 26, 5, 4, 1],
            ['Mahtab Flexible Printing Press', 26, 5, 4, 1],
            ['Makka Cable', 26, 5, 4, 1],
            ['Makka Engineering Works', 26, 5, 4, 1],
            ['Mars Media', 26, 5, 4, 1],
            ['Mayer Doa, Noorjahan Iron Store', 26, 5, 4, 1],
            ['Monitoring Charges Payable', 26, 5, 4, 1],
            ['Multi Links Traders', 26, 5, 4, 1],
            ['Nahid Filling Station', 26, 5, 4, 1],
            ['Nafisa boiler house ', 26, 5, 4, 1],
            ['New Millon Electric House', 26, 5, 4, 1],
            ['Ononna Colour House', 26, 5, 4, 1],
            ['Other  Payables for  works-Mold', 26, 5, 4, 1],
            ['Pacific International', 26, 5, 4, 1],
            ['Provati Insurance Company ltd', 26, 5, 4, 1],
            ['Quality Mineral Industries', 26, 5, 4, 1],
            ['R S Plastic', 26, 5, 4, 1],
            ['R.Y PACKEGING', 26, 5, 4, 1],
            ['Raj Engineering Works', 26, 5, 4, 1],
            ['Rani Pet & Plastic Industries ', 26, 5, 4, 1],
            ['Rizma Plastic ', 26, 5, 4, 1],
            ['Rizma-New poly', 26, 5, 4, 1],
            ['Sadek Electric', 26, 5, 4, 1],
            ['Samuda Plastic Chemical Complex Limited', 26, 5, 4, 1],
            ['Sanjid Plastic-HIPS', 26, 5, 4, 1],
            ['Sawddes Plastic/janata  Pet  Rcycle Industries', 26, 5, 4, 1],
            ['Security Service -Payable', 26, 5, 4, 1],
            ['Shohel Engineering & Works', 26, 5, 4, 1],
            ['Silva Technologies', 26, 5, 4, 1],
            ['Sonjoy Engineering Work\'s', 26, 5, 4, 1],
            ['Sunvy Plastic', 26, 5, 4, 1],
            ['Synod Electric Company- 01', 26, 5, 4, 1],
            ['Tex BD Trading Corporaton', 26, 5, 4, 1],
            ['Unique Bearing & Machineries', 26, 5, 4, 1],
            ['Universal Engineering', 26, 5, 4, 1],
            ['Zorina Enterprise', 26, 5, 4, 1],
            ['Sky view', 26, 5, 4, 1],

            //'head_name','parent_id','tire','chart_type_id','owner_type_id','slug'
            //below chart of accoutns are under accounts receiveable->corporate having id = 27
            ['Abdul Monem Ltd (igloo)', 27, 5, 3, 1],
            ['Amin Square (BD)  ltd ', 27, 5, 3, 1],
            ['Amar Tong', 27, 5, 3, 1],
            ['Ascent Group(Coffe World)', 27, 5, 3, 1],
            ['B.M.P Plan (Kamrangirchor)', 27, 5, 3, 1],
            ['Bangal Biscuits Ltd.', 27, 5, 3, 1],
            ['Ben Cey Food Products(Adabor)', 27, 5, 3, 1],
            ['Bexmco Pharmaceuticals Ltd', 27, 5, 3, 1],
            ['BRB Cables', 27, 5, 3, 1],
            ['Ceylon Biscuit Bangladesh Ltd.', 27, 5, 3, 1],
            ['Chowdhury Enterprise', 27, 5, 3, 1],
            ['Cocola Food Products Ltd.', 27, 5, 3, 1],
            ['Cookants (Amit)', 27, 5, 3, 1],
            ['Coopers(Gulshan-02)', 27, 5, 3, 1],
            ['Cup & Pack Solution(Gulshan-01)', 27, 5, 3, 1],
            ['Danish Foods Limited', 27, 5, 3, 1],
            ['Dekko Foods Limited', 27, 5, 3, 1],
            ['Dew Touch Bangladesh Ltd. (Mohammadpur)', 27, 5, 3, 1],
            ['Dhaka Ice Cream Industries Ltd(Polar)', 27, 5, 3, 1],
            ['Eakin Consumer Food', 27, 5, 3, 1],
            ['Ekra Packaging  (Sylhet)', 27, 5, 3, 1],
            ['F.A Sarder Plastic (Kamrangirchar)', 27, 5, 3, 1],
            ['Fajitas', 27, 5, 3, 1],
            ['FK Plastic', 27, 5, 3, 1],
            ['Hamid Tex Fashion (Hamid Group)', 27, 5, 3, 1],
            ['Haque Limited', 27, 5, 3, 1],
            ['Harvest World Agro Food Ind. Ltd. (Uttara)', 27, 5, 3, 1],
            ['Hashem Foods Limited (Sajeeb Group)', 27, 5, 3, 1],
            ['Hashy  Tiger co ltd ', 27, 5, 3, 1],
            ['Hellow Green (Mirpur)', 27, 5, 3, 1],
            ['IGLO Ice Cream Factory (Abdul Momen)', 27, 5, 3, 1],
            ['Instapack', 27, 5, 3, 1],
            ['Ismail Hazi', 27, 5, 3, 1],
            ['Jabed Agro Food Processing Ltd', 27, 5, 3, 1],
            ['June & Zaeif Group', 27, 5, 3, 1],
            ['Kazi Food Industries Ltd (Savar)', 27, 5, 3, 1],
            ['Khan\'s Kitchen Limited', 27, 5, 3, 1],
            ['M/S Amin Enterprise (Biman)', 27, 5, 3, 1],
            ['M/S Araf Enterprise', 27, 5, 3, 1],
            ['Masum Bekary (Dinajpur)', 27, 5, 3, 1],
            ['Mina Dispo Bazar (Begumbazar)', 27, 5, 3, 1],
            ['Mondol Group', 27, 5, 3, 1],
            ['Mr. Emdadul Haque ', 27, 5, 3, 1],
            ['Mr. Shakil- Sylhet', 27, 5, 3, 1],
            ['Mr. Shiplo', 27, 5, 3, 1],
            ['Mr.Emdadul Haq', 27, 5, 3, 1],
            ['Mutual Foam and tableware Industries Ltd', 27, 5, 3, 1],
            ['Nahar Corporation', 27, 5, 3, 1],
            ['New Olympia', 27, 5, 3, 1],
            ['North South University', 27, 5, 3, 1],
            ['Olympic Industries Limited', 27, 5, 3, 1],
            ['Pran RFL Group', 27, 5, 3, 1],
            ['Pusti Food', 27, 5, 3, 1],
            ['Quazi Enterprise Limited', 27, 5, 3, 1],
            ['R.N.R Enterprise', 27, 5, 3, 1],
            ['Rani Food Industries Ltd.', 27, 5, 3, 1],
            ['Reedisha Food & Beverage Limited', 27, 5, 3, 1],
            ['Ren Trade Ent.', 27, 5, 3, 1],
            ['Romania Foods & Beverage Limited', 27, 5, 3, 1],
            ['RP Trasers', 27, 5, 3, 1],
            ['RS Enterprise', 27, 5, 3, 1],
            ['RS Trading', 27, 5, 3, 1],
            ['Sanaullah Enterprise', 27, 5, 3, 1],
            ['Shofique Enterprise (Cttg.)', 27, 5, 3, 1],
            ['Six Seasons Food & Beverages Ltd', 27, 5, 3, 1],
            ['Sonali Bangla Ent.', 27, 5, 3, 1],
            ['Softy', 27, 5, 3, 1],
            ['Solargad Agro', 27, 5, 3, 1],
            ['Sornali Ent.', 27, 5, 3, 1],
            ['Square Hospital Ltd.', 27, 5, 3, 1],
            ['STS Holdings Ltd. (Apollo)', 27, 5, 3, 1],
            ['Swopno', 27, 5, 3, 1],
            ['Transcom Beverage Limited (PEPSI)', 27, 5, 3, 1],
            ['Transcom Food Limited  (K FC)', 27, 5, 3, 1],
            ['Unimart Limited (Chef Trading)', 27, 5, 3, 1],
            ['Unimert Limited', 27, 5, 3, 1],
            ['Mr. Atik ', 27, 5, 3, 1],
            ['United Commercial Enterprise', 27, 5, 3, 1],

            //'head_name','parent_id','tire','chart_type_id','owner_type_id','slug'
            //charts under cash in hand having id = 14
            ['Cash in Hand - Head Office', 14, 4, 3, 3, 'cash-in-hand-head-office'],
            ['Cash in Hand - Factory Office', 14, 4, 3, 3, 'cash-in-hand-factory-office'],

            //'head_name','parent_id','tire','chart_type_id','owner_type_id','slug'
            //charts under cash at bank having id = 15
            ['Dutch Bangla Bank Limited (3627)', 15, 4,  3, 2],
            ['Islamic Bank Bangladesh Ltd.(8103)', 15, 4,  3, 2],
            ['Mutual Trust Bank Ltd. (1434)', 15, 4,  3, 2],
            ['Mutual Trust Bank Ltd. (1445)', 15, 4,  3, 2],
            ['Mutual Trust Bank Ltd.(8209)', 15, 4,  3, 2],
            ['Prime Bank, New Eskaton Branch', 15, 4,  3, 2],
            ['Prime Bank, Shibpur Branch Narsingdi', 15, 4,  3, 2],
            ['Social Islami Bank Ltd.(2105)', 15, 4,  3, 2],
            ['Social Islami Bank Ltd.(2274)', 15, 4,  3, 2],
            ['Southeast Bank -3692', 15, 4,  3, 2],
            ['Standard Bank Ltd.(1836)', 15, 4,  3, 2],


            
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