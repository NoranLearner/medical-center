<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\ServicePrice;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // خدمة علاج التخاطب بالنيروفيدباك

        $service1 = Service::create([
            'en' => ['name' => 'Speech Therapy', 'description' => 'Speech therapy with neurofeedback'],
            'ar' => ['name' => 'علاج التخاطب', 'description' => 'علاج التخاطب بالنيروفيدباك'],
        ]);

        ServicePrice::create([
            'service_id' => $service1->id,
            'price' => 200.00,
            'valid_from' => Carbon::now()->subYear(), // بدأ من سنة
            'valid_to' => Carbon::now()->subDay(),    // انتهى امبارح
        ]);

        ServicePrice::create([
            'service_id' => $service1->id,
            'price' => 400.00,
            'valid_from' => Carbon::now(), // السعر الحالي
            'valid_to' => null,
        ]);

        // خدمة العلاج بالتكامل السمعي التوماتيس

        $service2 = Service::create([
            'en' => ['name' => 'Auditory Integration Therapy', 'description' => 'Auditory Integration Therapy with Tomatoes (mozart brain lab)'],
            'ar' => ['name' => 'العلاج بالتكامل السمعي', 'description' => 'العلاج بالتكامل السمعي التوماتيس'],
        ]);

        ServicePrice::create([
            'service_id' => $service2->id,
            'price' => 500.00,
            'valid_from' => Carbon::now(),
            'valid_to' => null,
        ]);

        // خدمة التقييمات النفسية

        $service3 = Service::create([
            'en' => ['name' => 'Psychological Assessments', 'description' => ''],
            'ar' => ['name' => 'التقييمات النفسية', 'description' => ''],
        ]);

        ServicePrice::create([
            'service_id' => $service3->id,
            'price' => 200.00,
            'valid_from' => Carbon::now(),
            'valid_to' => null,
        ]);

        // خدمة جلسات تنمية مهارات الطفل العقلية

        $service4 = Service::create([
            'en' => ['name' => 'Child Mental Skills Development Sessions', 'description' => ''],
            'ar' => ['name' => 'جلسات تنمية مهارات الطفل العقلية', 'description' => ''],
        ]);

        ServicePrice::create([
            'service_id' => $service4->id,
            'price' => 200.00,
            'valid_from' => Carbon::now(),
            'valid_to' => null,
        ]);

        // خدمة جلسات التخاطب

        $service5 = Service::create([
            'en' => ['name' => 'Speech Sessions', 'description' => ''],
            'ar' => ['name' => 'جلسات التخاطب', 'description' => ''],
        ]);

        ServicePrice::create([
            'service_id' => $service5->id,
            'price' => 200.00,
            'valid_from' => Carbon::now(),
            'valid_to' => null,
        ]);

        // خدمة جلسات السيكومتر

        $service6 = Service::create([
            'en' => ['name' => 'Psychomotor Sessions', 'description' => ''],
            'ar' => ['name' => 'جلسات السيكومتر', 'description' => ''],
        ]);

        ServicePrice::create([
            'service_id' => $service6->id,
            'price' => 200.00,
            'valid_from' => Carbon::now(),
            'valid_to' => null,
        ]);

        // خدمة جلسات الفلور تايم

        $service7 = Service::create([
            'en' => ['name' => 'Floor Time Sessions', 'description' => ''],
            'ar' => ['name' => 'جلسات الفلور تايم', 'description' => ''],
        ]);

        ServicePrice::create([
            'service_id' => $service7->id,
            'price' => 200.00,
            'valid_from' => Carbon::now(),
            'valid_to' => null,
        ]);

        // خدمة جلسات التكامل الحسي

        $service8 = Service::create([
            'en' => ['name' => 'Sensory Integration Sessions', 'description' => ''],
            'ar' => ['name' => 'جلسات التكامل الحسي', 'description' => ''],
        ]);

        ServicePrice::create([
            'service_id' => $service8->id,
            'price' => 200.00,
            'valid_from' => Carbon::now(),
            'valid_to' => null,
        ]);

        // خدمة جلسات تخطيط حركي

        $service9 = Service::create([
            'en' => ['name' => 'Motor Planning Sessions', 'description' => ''],
            'ar' => ['name' => 'جلسات تخطيط حركي', 'description' => ''],
        ]);

        ServicePrice::create([
            'service_id' => $service9->id,
            'price' => 200.00,
            'valid_from' => Carbon::now(),
            'valid_to' => null,
        ]);

        // خدمة جلسات تعديل السلوك

        $service10 = Service::create([
            'en' => ['name' => 'Behavior Modification Sessions', 'description' => ''],
            'ar' => ['name' => 'جلسات تعديل السلوك', 'description' => ''],
        ]);

        ServicePrice::create([
            'service_id' => $service10->id,
            'price' => 200.00,
            'valid_from' => Carbon::now(),
            'valid_to' => null,
        ]);

        // خدمة جلسات جماعيه

        $service11 = Service::create([
            'en' => ['name' => 'Group Sessions', 'description' => ''],
            'ar' => ['name' => 'جلسات جماعيه', 'description' => ''],
        ]);

        ServicePrice::create([
            'service_id' => $service11->id,
            'price' => 200.00,
            'valid_from' => Carbon::now(),
            'valid_to' => null,
        ]);

        // خدمة جلسات تواصل اجتماعي

        $service12 = Service::create([
            'en' => ['name' => 'Social Networking Sessions', 'description' => ''],
            'ar' => ['name' => 'جلسات تواصل اجتماعي', 'description' => 'للتفاعل الاجتماعي و اللغوي'],
        ]);

        ServicePrice::create([
            'service_id' => $service12->id,
            'price' => 200.00,
            'valid_from' => Carbon::now(),
            'valid_to' => null,
        ]);

        // خدمة خدمة التاهيل المهني للمراهقين

        $service13 = Service::create([
            'en' => ['name' => 'Vocational Rehabilitation Service for Adolescents', 'description' => ''],
            'ar' => ['name' => 'خدمة التاهيل المهني للمراهقين', 'description' => ''],
        ]);

        ServicePrice::create([
            'service_id' => $service13->id,
            'price' => 200.00,
            'valid_from' => Carbon::now(),
            'valid_to' => null,
        ]);

        // خدمة قسم الاحتياجات الخاصه

        $service14 = Service::create([
            'en' => ['name' => 'Special Needs Department', 'description' => ''],
            'ar' => ['name' => 'قسم الاحتياجات الخاصه', 'description' => 'تستقبل التوحد-التاخر اللغوي-صعوبات التعلم-بطئ التعلم- فرط الحركة وتشتت الانتباه-الداون'],
        ]);

        ServicePrice::create([
            'service_id' => $service14->id,
            'price' => 200.00,
            'valid_from' => Carbon::now(),
            'valid_to' => null,
        ]);
    }
}
