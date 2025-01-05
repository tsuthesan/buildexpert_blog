<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions  =Permission::latest()->paginate(10);
        return view('permissions.index',compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',

        ]);


        //Create a new Tag

        $permission= Permission::create([
            'name' => $request->input('name'),
            'guard_name' =>'web'

        ]);

        return redirect()->route('permissions.index')->with('success', 'Permission created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Permission $permission)
    {
        return view('permissions.edit',compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Permission $permission)
    {

        $request->validate([
            'name' => 'required|string',

        ]);

        $permission->update([
            'name' => $request->name,
            'guard_name' => 'web',
        ]);

        return redirect()->route('permissions.index')->with('success','Permission Update Sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        return redirect()->route('permissions.index')->with(['success'=>'Successfully permission Deleted']);
    }

    public function delete( Permission $permission){
        return view('permissions.delete',compact('permission'));
    }
}
