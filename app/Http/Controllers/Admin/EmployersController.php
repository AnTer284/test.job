<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Employee;
use App\Position;
use Illuminate\Http\Request;

class EmployersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $perPage = 25;


         $employers = Employee::latest()->paginate($perPage);


        return view('admin.employers.index', compact('employers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.employers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();


        $employer= new Employee();

        $employer->first_name=$requestData['first_name'];
        $employer->last_name=$requestData['last_name'];
        $employer->salary=$requestData['salary'];
        $employer->company_id=\Auth::user()->company_id;

        $employer->save();

        $position= new Position();
        $position->position=$requestData['position'];
        $position->employee_id=$employer->id;
        $position->save();





        return redirect('admin/employers/'.\Auth::user()->company_id)->with('flash_message', 'Employee added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {

        $perPage = 25;


        $employers = Employee::where('company_id',$id)->latest()->paginate($perPage);


        return view('admin.employers.index', compact('employers'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $employer = Employee::findOrFail($id);

        return view('admin.employers.edit', compact('employer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();

        $emloyee = Employee::findOrFail($id);
        $emloyee->update($requestData);


        $requestPostion= $request->get('position');
        $requestEmployer= $request->get('employer_id');

        $position= Position::where('employee_id',$requestEmployer)->first();
        $position->position=$requestPostion;
        $position->save();








        return redirect('admin/employers/'.$id)->with('flash_message', 'Employee updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Employee::destroy($id);

        return redirect('/')->with('flash_message', 'Employee deleted!');
    }
}
