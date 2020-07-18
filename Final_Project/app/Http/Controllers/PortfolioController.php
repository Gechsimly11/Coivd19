<?php

namespace App\Http\Controllers;

use App\Blogs;
use App\Covids;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $covids = Covids::all();
        return view('blade.portfolio')->with('covids', $covids);
        // return view('covids.dashboard', compact('covids'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
 {
        
        // $request->validate([
        //     'title' => 'required',
        //     'author' => 'required',
        //     'date' => 'required',
        //     'des' => 'required'
        // ]);

        // Blogs::create($request->all());
        
        // return redirect()->route('blade.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blogs  $student
     * @return \Illuminate\Http\Response
     */
    // public function show(Students $students)
    // {
    //     $students = Students::findOrfail($students->id);

    //     return view('students.show', compact($students));
    // }
    // public function show($id)  // view part
    // {
    //     $blogs = Blogs::find($id);

    //     return view('covids.show', ["blogs" => $blogs]);
    // }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blogs  $student
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $blogs = Blogs::find($id);
    //     return view('covids.edit', ["blogs" => $blogs]);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blogs  $covid
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id) // update part
    // {
    //     $request->validate([
    //         'country' => 'required',
    //         'case' => 'required',
    //         'deadth' => 'required',
    //         'recover' => 'required',
    //         'active' =>  'required',
    //         'new' => 'required'
    //     ]);

    //     $covid = array(
    //         'country' => $request->country,
    //         'case' => $request->case,
    //         'deadth' => $request->deadth,
    //         'recover' => $request->recover,
    //         'active' => $request->active,
    //         'new' => $request->new,
    //     );
    //     Covids::whereId($id)->update($covid);

    //     return redirect()->route('covids.index')->with('success', 'Covid News Successfully updated.');
    // }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blogs  $student
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     $covids = Covids::findOrfail($id);
    //     $covids->delete();

    //     return redirect()->route('covids.index')->with('success', 'Covid New deletd successful.');
    // }
}
