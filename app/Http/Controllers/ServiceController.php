<?php

namespace App\Http\Controllers;

use App\Models\Icone;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::all();
        $icone = Icone::all();
        
        return view ("backend.service",compact('service','icone'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $addService = new Service();

        $addService->icone_id = $request->icone_id;
        $addService->titre = $request->titre;
        $addService->text = $request->text;

        $this->authorize('webmaster');

        $addService->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)     
    {         
        $service=Service::find($id);         
        $icons= Icone::all();
        return view('backend.edit.service',compact('service','icons'));     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $modifService = Service::find($id);

        $modifService->icone_id = $request->icone_id;
        $modifService->titre = $request->titre;
        $modifService->text = $request->text;

        $this->authorize('webmaster');

        $modifService->save();

        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteService = Service::find($id);

        $this->authorize('webmaster');

        $deleteService->delete();

        return redirect()->back();


    }
}
