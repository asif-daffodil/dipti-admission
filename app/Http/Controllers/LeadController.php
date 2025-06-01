<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $leads = Lead::with('course')->select('leads.*');
            return DataTables::of($leads)
                ->addColumn('course_name', function ($lead) {
                    return $lead->course->title ?? 'N/A';
                })
                ->editColumn('created_at', function ($row) {
                    return Carbon::parse($row->created_at)->format('d M Y, h:i A');
                })
                ->make(true);
        }

        return view('dashboard');
    }

    // destroySelected
    public function destroySelected(Request $request)
    {
        $ids = $request->input('ids', []);
        Lead::whereIn('id', $ids)->delete();

        return response()->json(['success' => true]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'mobile' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'course_id' => 'required|exists:courses,id',
        ], [
            'fullname.required' => 'Full name is required.',
            'mobile.required' => 'Mobile number is required.',
            'email.required' => 'Email address is required.',
            'course_id.required' => 'Course selection is required.',
        ]);

        Lead::create($request->all());

        return view('success', compact('request'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Lead $lead)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lead $lead)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lead $lead)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lead $lead)
    {
        //
    }
}
