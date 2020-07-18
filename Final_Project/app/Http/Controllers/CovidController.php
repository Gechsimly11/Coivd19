<?php

namespace App\Http\Controllers;

use App\Covids;
use Illuminate\Http\Request;

class CovidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $covids = Covids::all();
        return view('blade.dashboard')->with('covids', $covids);
        // return view('covids.dashboard', compact('covids'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('covids.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'country' => 'required',
            'case' => 'required',
            'deadth' => 'required',
            'recover' => 'required',
            'active' =>  'required',
            'new' => 'required'
        ]);
        Covids::create($request->all());

        return redirect()->route('covids.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Covid  $student
     * @return \Illuminate\Http\Response
     */
    // public function show(Students $students)
    // {
    //     $students = Students::findOrfail($students->id);

    //     return view('students.show', compact($students));
    // }
    public function show($id)  // view part
    {
        $covids = Covids::find($id);
        // dd($students);
        // $firstName = $students->firstname;
        // dd($firstName);
        // dd($students->firstname);

        return view('covids.show', ["covids" => $covids]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Covid  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $covids = Covids::find($id);
        return view('covids.edit', ["covids" => $covids]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Covid  $covid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) // update part
    {
        $request->validate([
            'country' => 'required',
            'case' => 'required',
            'deadth' => 'required',
            'recover' => 'required',
            'active' =>  'required',
            'new' => 'required'
        ]);

        $covid = array(
            'country' => $request->country,
            'case' => $request->case,
            'deadth' => $request->deadth,
            'recover' => $request->recover,
            'active' => $request->active,
            'new' => $request->new,
        );
        Covids::whereId($id)->update($covid);

        return redirect()->route('covids.index')->with('success', 'Covid News Successfully updated.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Covid  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $covids = Covids::findOrfail($id);
        $covids->delete();

        return redirect()->route('covids.index')->with('success', 'Covid New deletd successful.');
    }
}
