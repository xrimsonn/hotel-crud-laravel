<?php

namespace App\Http\Controllers;

use App\Http\Requests\StaffFormRequest;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    return view('staff.index', [
      'staff' => Staff::all()
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('staff.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StaffFormRequest $request)
  {
    $data = $request->validated();
    Staff::create($data);

    return redirect()->route('staff.index');
  }

  /**
   * Display the specified resource.
   */
  public function show(Staff $staff)
  {
    return view('staff.show', [
      'staff' => $staff
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Staff $staff)
  {
    return view('staff.edit', [
      'staff' => $staff
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(StaffFormRequest $request, Staff $staff)
  {
    $data = $request->validated();
    $staff->update($data);

    return redirect()->route('staff.show', $staff->id);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Staff $staff)
  {
    $staff->delete();

    return redirect()->route('staff.index');
  }
}
