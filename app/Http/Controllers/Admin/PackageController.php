<?php

namespace App\Http\Controllers\Admin;

use App\Models\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = Package::all();
        return view('admin.pages.packages.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.packages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:packages,name',
            'duration_months' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string',
        ],[
            'name.required' => 'Please provide a package name.',
            'duration_months.required' => 'The package duration is required.',
            'price.required' => 'Please enter the price.',
            'description.required' => 'A description is required.',
            'name.unique' => 'The package name has already been taken.',
        ]);

        $package = Package::create($validated);

        return redirect()->route('package.create')->with('success', 'Package created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // return view('admin.pages.packages.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $package = Package::findOrFail($id);
        return view('admin.pages.packages.edit', compact('package'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:packages,name,' . $id, 
            'duration_months' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
            'description' => 'required|string',
        ], [
            'name.required' => 'Please provide a package name.',
            'duration_months.required' => 'The package duration is required.',
            'price.required' => 'Please enter the price.',
            'description.required' => 'A description is required.',
            'name.unique' => 'The package name has already been taken.',
        ]);
    
        $package = Package::findOrFail($id);
        $package->update($validated);
    
        return redirect()->route('package.index')->with('success', 'Package updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $package = Package::findOrFail($id);

        $package->delete();

        return redirect()->route('package.index')->with('success', 'Package deleted successfully!');
    }
}
