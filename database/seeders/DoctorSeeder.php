<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // ***** م/ ضحى ابو الحسن - مديره العيادات ***** //

        $doctor1 = Doctor::create([
            'email' => 'doha_abu_al-hassan@gmail.com',
            'phone' => null,
            'image' => null,
            'en' => ['name' => 'Mr. Doha Abu Al-Hassan', 'job' => 'Clinics Manager'],
            'ar' => ['name' => 'م/ ضحى ابو الحسن', 'job' => 'مديره العيادات'],
        ]);

        // ربطه بالخدمات
        // $doctor1->services()->attach([]);

        // ربطه بالتخصصات
        // $doctor1->specialties()->attach([]);

        // ***** أ/ محمد صادق - أخصائي نفسي أكلينيكي و المدير الفني للعيادات ***** //

        $doctor2 = Doctor::create([
            'email' => 'mohamed_Sadek@gmail.com',
            'phone' => null,
            'image' => null,
            'en' => ['name' => 'Mr. Mohamed Sadek', 'job' => 'Technical Director of Clinics'],
            'ar' => ['name' => 'أ/ محمد صادق', 'job' => 'المدير الفني للعيادات'],
        ]);

        // ربطه بالخدمات
        $doctor2->services()->attach([3]);

        // ربطه بالتخصصات
        $doctor2->specialties()->attach([8]);


        // ***** أ/ محمد فتحي  - أخصائي تربية خاصة - رئيس وحده صعوبات التعلم ***** //

        $doctor3 = Doctor::create([
            'email' => 'mohamed_fathy@gmail.com',
            'phone' => null,
            'image' => null,
            'en' => ['name' => 'Mr. Mohamed Fathy', 'job' => 'Head of Learning Difficulties Unit'],
            'ar' => ['name' => 'أ/ محمد فتحي', 'job' => 'رئيس وحده صعوبات التعلم'],
        ]);

        // ربطه بالخدمات
        // $doctor3->services()->attach([]);

        // ربطه بالتخصصات
        $doctor3->specialties()->attach([7]);

        // ***** أ/ مروة صلاح - أخصائي تكامل حسي و تحفيز عصبي - رئيس قسم التكامل الحسي بالعيادات ***** //

        $doctor4 = Doctor::create([
            'email' => 'marwa_salah@gmail.com',
            'phone' => null,
            'image' => null,
            'en' => ['name' => 'Ms. Marwa Salah', 'job' => 'Head of the Sensory Integration Department at the Clinics'],
            'ar' => ['name' => 'أ/ مروة صلاح', 'job' => 'رئيس قسم التكامل الحسي بالعيادات'],
        ]);

        // ربطه بالخدمات
        $doctor4->services()->attach([8]);

        // ربطه بالتخصصات
        $doctor4->specialties()->attach([1]);

        // ***** د/ طارق رفعت - أخصائي تخاطب - رئيس وحده التخاطب بالعيادات ***** //

        $doctor5 = Doctor::create([
            'email' => 'tarek_refaat@gmail.com',
            'phone' => null,
            'image' => null,
            'en' => ['name' => 'Dr. Tarek Refaat', 'job' => 'Head of the Clinics\' Speech Therapy Unit'],
            'ar' => ['name' => 'د/ طارق رفعت', 'job' => 'رئيس وحده التخاطب بالعيادات'],
        ]);
        // ربطه بالخدمات
        $doctor5->services()->attach([1]);

        // ربطه بالتخصصات
        $doctor5->specialties()->attach([9]);

        // ***** أ/ روان حسين  - أخصائي تنميه مهارات و تعديل سلوك - مسؤول قسم التكامل السمعي ***** //

        $doctor6 = Doctor::create([
            'email' => 'rawan_hussein@gmail.com',
            'phone' => null,
            'image' => null,
            'en' => ['name' => 'Ms. Rawan Hussein', 'job' => 'Auditory Integration Department Head'],
            'ar' => ['name' => 'أ/ روان حسين', 'job' => 'مسؤول قسم التكامل السمعي'],
        ]);

        // ربطه بالخدمات
        $doctor6->services()->attach([4, 10]);

        // ربطه بالتخصصات
        $doctor6->specialties()->attach([5]);

        // ***** أ/ شيماء سعد - منسق عام للعيادات ***** //

        $doctor7 = Doctor::create([
            'email' => 'shaima_saad@gmail.com',
            'phone' => null,
            'image' => null,
            'en' => ['name' => 'Ms. Shaima Saad', 'job' => 'General Clinic Coordinator'],
            'ar' => ['name' => 'أ/ شيماء سعد', 'job' => 'منسق عام للعيادات'],
        ]);

        // ربطه بالخدمات
        // $doctor7->services()->attach([]);

        // ربطه بالتخصصات
        // $doctor7->specialties()->attach([]);

        // ***** د/ معتز نور الدين - أخصائي طب الاطفال و حديث الولادة - عضو الجمعيه المصريه لحساسيه الصدر و التغذية ***** //

        $doctor8 = Doctor::create([
            'email' => 'moataz_nour_el-din@gmail.com',
            'phone' => null,
            'image' => null,
            'en' => ['name' => 'Dr. Moataz Nour El-Din', 'job' => 'Member of the Egyptian Society for Asthma and Nutrition'],
            'ar' => ['name' => 'د/ معتز نور الدين', 'job' => 'عضو الجمعيه المصريه لحساسيه الصدر و التغذية'],
        ]);

        // ربطه بالخدمات
        // $doctor8->services()->attach([]);

        // ربطه بالتخصصات
        $doctor8->specialties()->attach([6]);

        // ***** د/ حازم موسي  - استشاري امراض السمع و الأتزان - استشاري العلاج بالتكامل السمعي ***** //

        $doctor9 = Doctor::create([
            'email' => 'hazem_moussa@gmail.com',
            'phone' => null,
            'image' => null,
            'en' => ['name' => 'Dr. Hazem Moussa', 'job' => ''],
            'ar' => ['name' => 'د/ حازم موسي', 'job' => ''],
        ]);

        // ربطه بالخدمات
        $doctor9->services()->attach([2]);

        // ربطه بالتخصصات
        $doctor9->specialties()->attach([3, 4]);

        // ***** د/ سارة زكريا العسكري - أخصائية الأمراض العصبية و السلوكية فى الأطفال - عضو الكلية الملكية البريطانية لطب الأطفال ***** //

        $doctor10 = Doctor::create([
            'email' => 'sarah_zakaria@gmail.com',
            'phone' => null,
            'image' => null,
            'en' => ['name' => 'Dr. Sarah Zakaria Al-Askari', 'job' => 'Member of the Royal College of Paediatrics and Child Health'],
            'ar' => ['name' => 'د/ سارة زكريا العسكري', 'job' => 'عضو الكلية الملكية البريطانية لطب الأطفال'],
        ]);

        // ربطه بالخدمات
        $doctor10->services()->attach([4]);

        // ربطه بالتخصصات
        $doctor10->specialties()->attach([10]);

        // ***** أ/ الاء سعيد - اخصائيه تكامل حسى و تحفيز عصبى ***** //

        $doctor11 = Doctor::create([
            'email' => 'alaa_saeed@gmail.com',
            'phone' => null,
            'image' => null,
            'en' => ['name' => 'Ms. Alaa Saeed', 'job' => ''],
            'ar' => ['name' => 'أ/ الاء سعيد', 'job' => ''],
        ]);

        // ربطه بالخدمات
        $doctor11->services()->attach([8]);

        // ربطه بالتخصصات
        $doctor11->specialties()->attach([1]);

        // ***** أ/ إبراهيم احمد  - اخصائى نفسى و تعديل سلوك ***** //

        $doctor12 = Doctor::create([
            'email' => 'ibrahim_ahmed@gmail.com',
            'phone' => null,
            'image' => null,
            'en' => ['name' => 'Mr. Ibrahim Ahmed', 'job' => ''],
            'ar' => ['name' => 'أ/ إبراهيم احمد', 'job' => ''],
        ]);

        // ربطه بالخدمات
        $doctor12->services()->attach([10]);

        // ربطه بالتخصصات
        $doctor12->specialties()->attach([2]);

        // ***** أ/ لؤي هشام  - أخصائي تنمية المهارات ***** //

        $doctor13 = Doctor::create([
            'email' => 'louay_hisham@gmail.com',
            'phone' => null,
            'image' => null,
            'en' => ['name' => 'Mr. Louay Hisham', 'job' => ''],
            'ar' => ['name' => 'أ/ لؤي هشام', 'job' => ''],
        ]);

        // ربطه بالخدمات
        $doctor13->services()->attach([11]);

        // ربطه بالتخصصات
        $doctor13->specialties()->attach([5]);

        // ***** أ/ مريم علاء  - أخصائي تنميه مهارات و تعديل سلوك ***** //

        $doctor14 = Doctor::create([
            'email' => 'mariam_alaa@gmail.com',
            'phone' => null,
            'image' => null,
            'en' => ['name' => 'Ms. Mariam Alaa', 'job' => ''],
            'ar' => ['name' => 'أ/ مريم علاء', 'job' => ''],
        ]);

        // ربطه بالخدمات
        $doctor14->services()->attach([10, 11]);

        // ربطه بالتخصصات
        $doctor14->specialties()->attach([5]);

        // ***** أ/ نرمين جمال  - أخصائي تخاطب ***** //

        $doctor15 = Doctor::create([
            'email' => 'narmin_gamal@gmail.com',
            'phone' => null,
            'image' => null,
            'en' => ['name' => 'Ms. Narmin Gamal', 'job' => ''],
            'ar' => ['name' => 'أ/ نرمين جمال', 'job' => ''],
        ]);

        // ربطه بالخدمات
        $doctor15->services()->attach([1]);

        // ربطه بالتخصصات
        $doctor15->specialties()->attach([9]);

        // ***** أ/ سارة الدفراوي - أخصائى تنميه مهارات و تعديل سلوك ***** //

        $doctor16 = Doctor::create([
            'email' => 'sarah_el-defrawy@gmail.com',
            'phone' => null,
            'image' => null,
            'en' => ['name' => 'Ms. Sarah El-Defrawy', 'job' => ''],
            'ar' => ['name' => 'أ/ سارة الدفراوي', 'job' => ''],
        ]);

        // ربطه بالخدمات
        $doctor16->services()->attach([10]);

        // ربطه بالتخصصات
        $doctor16->specialties()->attach([5]);

        // ***** أ/ شريف منير - أخصائي تخاطب ***** //

        $doctor17 = Doctor::create([
            'email' => 'sherif_mounir@gmail.com',
            'phone' => null,
            'image' => null,
            'en' => ['name' => 'Mr. Sherif Mounir', 'job' => ''],
            'ar' => ['name' => 'أ/ شريف منير', 'job' => ''],
        ]);

        // ربطه بالخدمات
        $doctor17->services()->attach([1]);

        // ربطه بالتخصصات
        $doctor17->specialties()->attach([9]);

    }
}
