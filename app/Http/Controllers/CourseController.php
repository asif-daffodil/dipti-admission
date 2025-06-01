<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    if (request()->ajax()) {
        $courses = Course::query(); // Not Course::all()

        return DataTables::of($courses)
            ->addIndexColumn() // ✅ This adds DT_RowIndex
            ->addColumn('action', function ($course) {
                return view('courses.course_actions', compact('course'));
            })
            ->editColumn('created_at', function ($row) {
                return Carbon::parse($row->created_at)->format('d M Y, h:i A');
            })
            ->make(true);
    }

    return view('courses.courses');
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ], [
            'title.required' => 'Course title is required.',
            'title.string' => 'Course title must be a string.',
            'title.max' => 'Course title may not be greater than 255 characters.',
        ]);

        Course::create($request->only('title'));

        return redirect()->route('courses.index')->with('success', 'Course created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ],[
            'title.required' => 'Course title is required.',
            'title.string' => 'Course title must be a string.',
            'title.max' => 'Course title may not be greater than 255 characters.',
        ]);

        $course->update($request->only('title'));

        return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('courses.index')->with('success', 'Course deleted successfully.');
    }
}
