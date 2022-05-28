<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Section;
use Illuminate\Support\Facades\DB;

class SectionsSeeder extends Seeder
{
    public function run()
    {
        DB::table('sections')->delete();

        $sections = [
            ['en' => 'System Integrator',   'ar' => 'نظام موحد'],
            ['en' => 'Service Provider', 'ar' => 'مقدم الخدمة'],
            ['en' => 'Production/Rental',   'ar' => 'بيت الإنتاج/الإيجار'],
            ['en' => 'Free Lancer',   'ar' => 'مستقل'],
            ['en' => 'General User', 'ar' => 'مستخدم عام'],
            ['en' => 'Others',   'ar' => 'اخر'],

        ];
        foreach ($sections as $ge) {
            Section::create(['name' => $ge]);
        }
    }
}
