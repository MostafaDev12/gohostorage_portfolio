<?php

namespace Database\Seeders;

use App\Models\Dashboard\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data =[
            [
                'name_en' => 'Home',
                'name_ar' => 'الرئيسية',
                'segment' => '/',
                'parent_id' => null,
                'order' => 1,
                'status' => true,
            ],
            [
                'name_en' => 'About Us',
                'name_ar' => 'من نحن',
                'segment' => '/about-us',
                'parent_id' => null,
                'order' => 2,
                'status' => true,
            ],
            [
                'name_en' => 'Hostings',
                'name_ar' => 'الاستضافة',
                'segment' => '/hostings',
                'parent_id' => null,
                'order' => 3,
                'status' => true,
            ],

            [
                'name_en' => 'Services',
                'name_ar' => 'الخدمات',
                'segment' => '/services',
                'parent_id' => null,
                'order' => 4,
                'status' => true,
            ],
            [
                'name_en' => 'Domains',
                'name_ar' => 'النطاقات',
                'segment' => '/domains',
                'parent_id' => null,
                'order' => 5,
                'status' => true,
            ],
            [
                'name_en' => 'FAQ',
                'name_ar' => 'الأسئلة الشائعة',
                'segment' => '/faqs',
                'parent_id' => null,
                'order' => 6,
                'status' => true,
            ],
            [
                'name_en' => 'Blog',
                'name_ar' => 'المدونة',
                'segment' => '/blog',
                'parent_id' => null,
                'order' => 7,
                'status' => false,
            ],
            [
                'name_en' => 'Privacy Policy',
                'name_ar' => 'سياسة الخصوصية',
                'segment' => '/privacy-policy',
                'parent_id' => null,
                'order' => 8,
                'status' => false,
            ],
            [
                'name_en' => 'Terms of Service',
                'name_ar' => 'شروط الخدمة',
                'segment' => '/terms-of-service',
                'parent_id' => null,
                'order' => 9,
                'status' => false,
            ],
            [
                'name_en' => 'Contact Us',
                'name_ar' => 'تواصل معنا',
                'segment' => '/contact-us',
                'parent_id' => null,
                'order' => 10,
                'status' =>true,
            ]
        ];

        Menu::insert($data);
    }
}
