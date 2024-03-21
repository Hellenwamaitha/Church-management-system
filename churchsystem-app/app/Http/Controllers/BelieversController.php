<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Believer;

class BelieversController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $believers = Believer::all(); 
        return view('index', compact('believers')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Believers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'department' => 'required|max:255',
            'phone' => 'required|max:255',
            'residence' => 'required|max:255',
        ]);
        $believer = Believer::create($storeData); 
        return redirect('/believers')->with('completed', 'Believer has been saved!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $believer = Believer::findOrFail($id); 
        return view('Believers.edit', compact('believer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateData = $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'department' => 'required|max:255',
            'phone' => 'required|max:255',
            'residence' => 'required|max:255',
        ]);
        Believer::whereId($id)->update($updateData); 
        return redirect('/believers')->with('completed', 'Believer has been updated'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $believer = Believer::findOrFail($id); 
        $believer->delete();
        return redirect('/believers')->with('completed', 'Believer has been deleted'); 
    }
}
