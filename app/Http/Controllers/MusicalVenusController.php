<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MusicalVenusController;

use App\Models\MusicalVenus;
class MusicalVenusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $venus= MusicalVenus::when($request->search,function($q) use ($request){



            return $q->where('name','like','%'  .$request->search .'%');
        
        
        })->latest()->paginate(5);
        
        return view('dashbord.venus.index',compact('venus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashbord.venus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

            'name'=>'required|max:191',
                     'location'=>'required|max:191',
              
            
            
                    ]);
                    $inputs=$request->all();
                    MusicalVenus::create($inputs);
                    return redirect(route('venus.index'))->with('success','Venus added successfully');
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
        $venus = MusicalVenus::findOrFail($id);
        return view('dashbord.venus.edit')
        ->with('venus',$venus);
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
        $this->validate($request,[
            'name'=>'required|max:191',
            'location'=>'required|max:191',
         
               
            
        ]);
        $inputs=$request->all();
        $venus=MusicalVenus::find($id);
        $venus->update($inputs);
        
        return redirect(route('venus.index'))
        ->with('success','Venus updated Succesfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
