<?php

namespace Database\Seeders;

use App\Models\Specialty;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SpecialtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // اخصائي تكامل حسى و تحفيز عصبى
        $specialty1 = Specialty::create([
            'en' => ['name' => 'Sensory integration and neurostimulator specialist', 'description' => ''],
            'ar' => ['name' => 'اخصائي تكامل حسى و تحفيز عصبى', 'description' => ''],
        ]);

        // اخصائى نفسى و تعديل سلوك
        $specialty2 = Specialty::create([
            'en' => ['name' => 'Psychologist and behavior modification specialist', 'description' => ''],
            'ar' => ['name' => 'اخصائى نفسى و تعديل سلوك', 'description' => ''],
        ]);

        // استشاري امراض السمع و الأتزان
        $specialty3 = Specialty::create([
            'en' => ['name' => 'Audiology and balance diseases consultant', 'description' => ''],
            'ar' => ['name' => 'استشاري امراض السمع و الأتزان', 'description' => ''],
        ]);

        // استشاري العلاج بالتكامل السمعي
        $specialty4 = Specialty::create([
            'en' => ['name' => 'Consultant in auditory integration therapy', 'description' => ''],
            'ar' => ['name' => 'استشاري العلاج بالتكامل السمعي', 'description' => ''],
        ]);

        // أخصائي تنميه مهارات و تعديل سلوك
        $specialty5 = Specialty::create([
            'en' => ['name' => 'Behavior modification and skills development specialist', 'description' => ''],
            'ar' => ['name' => 'أخصائي تنميه مهارات و تعديل سلوك', 'description' => ''],
        ]);

        // أخصائي طب الاطفال و حديث الولادة
        $specialty6 = Specialty::create([
            'en' => ['name' => 'Pediatrician and neonatologist', 'description' => ''],
            'ar' => ['name' => 'أخصائي طب الاطفال و حديث الولادة', 'description' => ''],
        ]);

        // أخصائي تربية خاصة
        $specialty7 = Specialty::create([
            'en' => ['name' => 'Specialist in special education', 'description' => ''],
            'ar' => ['name' => 'أخصائي تربية خاصة', 'description' => ''],
        ]);

        // أخصائي نفسي أكلينيكي
        $specialty8 = Specialty::create([
            'en' => ['name' => 'Clinical psychologist', 'description' => ''],
            'ar' => ['name' => 'أخصائي نفسي أكلينيكي', 'description' => ''],
        ]);

        // أخصائي تخاطب
        $specialty9 = Specialty::create([
            'en' => ['name' => 'Speech therapist', 'description' => ''],
            'ar' => ['name' => 'أخصائي تخاطب', 'description' => ''],
        ]);

        // أخصائي الأمراض العصبية و السلوكية فى الأطفال
        $specialty10 = Specialty::create([
            'en' => ['name' => 'Specialist in neurological and behavioral diseases in children', 'description' => ''],
            'ar' => ['name' => 'أخصائي الأمراض العصبية و السلوكية فى الأطفال', 'description' => ''],
        ]);

    }
}
