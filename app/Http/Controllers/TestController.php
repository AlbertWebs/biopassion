<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class TestController extends Controller
{
    /**
     * Display a listing of the tests.
     */
    public function index()
    {
        $tests = Test::orderBy('created_at', 'desc')->paginate(20);
        return view('admin.tests.index', compact('tests'));
    }

    /**
     * Show the form for creating a new test.
     */
    public function create()
    {
        return view('admin.tests.create');
    }

    /**
     * Store a newly created test in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:tests,slug',
            'category' => 'nullable|string|max:255',
            'original_price' => 'nullable|numeric|min:0',
            'current_price' => 'nullable|numeric|min:0',
            'discount_percentage' => 'nullable|integer|min:0|max:100',
            'image_url' => 'nullable|url|max:500',
            'product_id' => 'nullable|string|max:255',
            'sku' => 'nullable|string|max:255',
            'url' => 'nullable|url|max:500',
        ]);

        // Generate slug from title if not provided
        if (empty($request->slug) && !empty($request->title)) {
            $request->slug = Str::slug($request->title);
            
            // Ensure uniqueness
            $count = Test::where('slug', $request->slug)->count();
            if ($count > 0) {
                $request->slug = $request->slug . '-' . ($count + 1);
            }
        }

        Test::create($request->all());

        Session::flash('message', 'Test has been created successfully');
        return redirect()->route('admin.tests.index');
    }

    /**
     * Show the form for editing the specified test.
     */
    public function edit($id)
    {
        $test = Test::findOrFail($id);
        return view('admin.tests.edit', compact('test'));
    }

    /**
     * Update the specified test in storage.
     */
    public function update(Request $request, $id)
    {
        $test = Test::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:tests,slug,' . $id,
            'category' => 'nullable|string|max:255',
            'original_price' => 'nullable|numeric|min:0',
            'current_price' => 'nullable|numeric|min:0',
            'discount_percentage' => 'nullable|integer|min:0|max:100',
            'image_url' => 'nullable|url|max:500',
            'product_id' => 'nullable|string|max:255',
            'sku' => 'nullable|string|max:255',
            'url' => 'nullable|url|max:500',
        ]);

        // Generate slug from title if not provided
        if (empty($request->slug) && !empty($request->title)) {
            $request->slug = Str::slug($request->title);
            
            // Ensure uniqueness
            $count = Test::where('slug', $request->slug)->where('id', '!=', $id)->count();
            if ($count > 0) {
                $request->slug = $request->slug . '-' . ($count + 1);
            }
        }

        $test->update($request->all());

        Session::flash('message', 'Test has been updated successfully');
        return redirect()->route('admin.tests.index');
    }

    /**
     * Remove the specified test from storage.
     */
    public function destroy($id)
    {
        $test = Test::findOrFail($id);
        $test->delete();

        Session::flash('message', 'Test has been deleted successfully');
        return redirect()->route('admin.tests.index');
    }
}
