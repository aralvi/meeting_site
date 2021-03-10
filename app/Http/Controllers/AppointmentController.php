<?php

namespace App\Http\Controllers;

use App\Client;
use App\Models\Appointment;
use App\Models\Specialists\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Appointment::all();
        return view('specialist.appointments.index',compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $id =  decrypt($id);
        $service = Service::findOrFail($id);
        $services = Service::where('specialist_id',$service->specialist_id)->where('id',
        '!=',$id)->get();
        $today = Carbon::today();
        $tomorrow = Carbon::tomorrow();
        $appointments = Appointment::where('service_id',$id)->where('status','1')->whereBetween('created_at', [$today, $tomorrow])->get();
        return view('frontend.appointments',compact('service', 'appointments', 'services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $appointment = new Appointment();
        $appointment->user_id = Auth::user()->id;
        $appointment->service_id = $request->service_id;
        $appointment->specialist_id = $request->specialist_id;
        $appointment->date = $request->date;
        $appointment->rate = $request->rate;
        $appointment->time = $request->time;
        $appointment->save();
        return back()->with('success','Appointment Created Successfuly!');

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
        $appointment = Appointment::findOrFail($id);
        if($request->status == '1'){
            $appointment->status = $request->status;
        }
        if($request->status == '2'){
            $appointment->status = $request->status;
            
        }
        if($request->status == '3'){
            $appointment->status = $request->status;
        }
        $appointment->save();
        return back()->with('success', 'Appointment updated Successfuly!');
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
