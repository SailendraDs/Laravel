<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function index()
    {
        $medicines = Medicine::all();
        return view('doctor.medicines.index', compact('medicines'));
    }

    public function create()
    {
        return view('doctor.medicines.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'dosage' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Medicine::create($request->all());

        return redirect()->route('doctor.medicines.index')->with('status', 'Medicine added successfully!');
    }

    public function edit(Medicine $medicine)
    {
        return view('doctor.medicines.edit', compact('medicine'));
    }

    public function update(Request $request, Medicine $medicine)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'dosage' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $medicine->update($request->all());

        return redirect()->route('doctor.medicines.index')->with('status', 'Medicine updated successfully!');
    }

    public function destroy(Medicine $medicine)
    {
        $medicine->delete();
        return redirect()->route('doctor.medicines.index')->with('status', 'Medicine deleted successfully!');
    }
}
