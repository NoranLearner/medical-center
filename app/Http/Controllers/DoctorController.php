<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Service;
use App\Models\Specialty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Doctor::with(['specialties', 'services'])->paginate(10);
        return view('back.doctors.all', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $specializations = Specialty::all();
        $services = Service::all();
        return view('back.doctors.add', compact('specializations', 'services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // @dd($request);

        $locales = LaravelLocalization::getSupportedLocales();

        $rules = [
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'email' => 'required|email|unique:doctors,email',
            'phone' => 'nullable|string|max:20',
        ];

        foreach ($locales as $localeCode => $properties) {
            $rules["{$localeCode}.name"] = 'required|string|max:255';
            $rules["{$localeCode}.job"] = 'nullable|string';
        }

        $validated = $request->validate($rules);

        // صورة الدكتور

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads/doctors', 'public');
        }

        // إنشاء الدكتور

        $doctor = new Doctor();

        foreach ($locales as $localeCode => $properties) {
            $doctor->translateOrNew($localeCode)->name = $validated[$localeCode]['name'];
            $doctor->translateOrNew($localeCode)->job = $validated[$localeCode]['job'] ?? null;
        }

        $doctor->image = $imagePath;
        $doctor->email = $request->email;
        $doctor->phone = $request->phone;

        $doctor->save();

        // Attach
        if ($request->has('specializations')) {
            $doctor->specialties()->attach($request->specializations);
        }
        if ($request->has('services')) {
            $doctor->services()->attach($request->services);
        }

        return redirect()->route('dashboard.doctors.index')->with('success', __('main.doctor_created'));

    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        // فصل العلاقات (pivot records)
        $doctor->specialties()->detach();
        $doctor->services()->detach();

        // حذف الدكتور نفسه
        $doctor->delete();

        // حذف الصورة لو موجودة
        if ($doctor->image && Storage::disk('public')->exists($doctor->image)) {
            Storage::disk('public')->delete($doctor->image);
        }

        return redirect()->route('dashboard.doctors.index')->with('success', __('main.doctor_deleted'));
    }

    public function add_specialization(Request $request)
    {
        // @dd($request);

        $locales = LaravelLocalization::getSupportedLocales();

        foreach ($locales as $localeCode => $properties) {
            $rules["{$localeCode}.name"] = 'required|string|max:255';
            $rules["{$localeCode}.description"] = 'nullable|string';
        }

        $validated = $request->validate($rules);

        $specialization = new Specialty();

        foreach ($locales as $localeCode => $properties) {
            $specialization->translateOrNew($localeCode)->name = $validated[$localeCode]['name'];
            $specialization->translateOrNew($localeCode)->description = $validated[$localeCode]['description'] ?? null;
        }

        $specialization->save();

        return redirect()->back()->with('success', __('main.specialization_created'));
    }
}
