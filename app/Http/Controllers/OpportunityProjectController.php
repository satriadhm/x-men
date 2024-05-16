<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\OpportunityProject;
use Illuminate\Http\Request;

class OpportunityProjectController extends Controller
{
    public function index()
    {
        return view('opportunity_project.index');
    }
    public function create()
    {
        return view('opportunity_project.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'status' => 'required',
            'talent_id' => 'required',
            'vendor_id' => 'required',
            'pendidikan_id' => 'required',
            'pelatihan_id' => 'required',
        ]);
        OpportunityProject::create($request->all());
        return redirect()->route('opportunity_project.index')
            ->with('success', 'Opportunity Project created successfully.');
    }
    public function show(OpportunityProject $opportunity_project)
    {
        return view('opportunity_project.show', compact('opportunity_project'));
    }
    public function edit(OpportunityProject $opportunity_project)
    {
        return view('opportunity_project.edit', compact('opportunity_project'));
    }
    public function update(Request $request, OpportunityProject $opportunity_project)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'status' => 'required',
            'talent_id' => 'required',
            'vendor_id' => 'required',
            'pendidikan_id' => 'required',
            'pelatihan_id' => 'required',
        ]);
        $opportunity_project->update($request->all());
        return redirect()->route('opportunity_project.index')
            ->with('success', 'Opportunity Project updated successfully');
    }
    public function destroy(OpportunityProject $opportunity_project)
    {
        $opportunity_project->delete();
        return redirect()->route('opportunity_project.index')
            ->with('success', 'Opportunity Project deleted successfully');
    }
}
