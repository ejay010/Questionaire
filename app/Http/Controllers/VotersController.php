<?php

namespace App\Http\Controllers;

use App\location;
use Illuminate\Http\Request;

class VotersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $currentLocation = location::find($request['locationID']);
        return view('voterProfile',compact('currentLocation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd($request);
        $currentLocation = location::find($request['location']);
        $voter = $currentLocation->voters()->create($request->all());
        $voter->children()->create($request->all());
        //Education
        $edu = $request['education'];
        foreach ($edu as $key => $value){
            $voter->education()->create(['level' => $key, 'schoolName' => $value]);
        }
        //$voter->education()->create($request->all());
        $voter->employer()->create($request->all());
        $voter->union()->create($request->all());
        $voter->contactInfo()->create($request->all());
        $voter->registrationStatus()->create($request->all());
        $voter->partyAffiliation()->create($request->all());
        $lastElection = $request['LastElection'];
        $voter->lastElection()->create(['status' => $lastElection['status'], 'supported' => $lastElection['supported']]);
        $voter->supportFredMitchell()->create($request->all());
        $currentLocation->repConcerns()->create($request->all());
        $currentLocation->constitConcerns()->create($request->all());
        $currentLocation->govConcerns()->create($request->all());

        return redirect(route('home.index'));
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
        //
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
        //
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
