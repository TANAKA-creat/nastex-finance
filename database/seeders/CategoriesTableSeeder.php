<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $major_category_names = [
            '借方','貸方'
        ];

        $detail_categories = [
            '日本加工賃','中国国内','第三国','香港TAKAGI','外注先','その他','領収書なし入金'
        ];

        $credit_categories = [
            '税金','給料','資材','副資材','雑費','物流費用','接待費用','旅費','チケット費用','光熱費用','保険料','その他','領収書なし支払'
        ];

        foreach ($major_category_names as $major_category_name)
        if ($major_category_name == '借方') {
            foreach ($detail_categories as $detail_category) {
                Category::create([
                    'name' => $detail_category,
                    'description' => $detail_category,
                    'major_category_name' => $major_category_name
                ]);
            }
        }

        if ($major_category_name == '貸方') {
            foreach ($credit_categories as $credit_category) {
                Category::create([
                    'name' => $credit_category,
                    'description' => $credit_category,
                    'major_category_name' => $major_category_name
                ]);
            }
        }
    }
}

