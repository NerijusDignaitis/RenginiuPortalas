<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\EventRegistration;


class EventController extends Controller
{
    //
    public function index (){
        $events = Event::all();
        return view('pages.home', compact('events'));
    }

    public function addEvent (){
        return view('pages.add-event');
    }

    public function store (Request $request){
        $validated = $request->validate([
            'eventname' => 'required|unique:events|max:255',
            'date' => 'required',
            'time' => 'required',
            'logo' => 'mimes:jpeg,jpg,png,gif'
        ]);

        if(request()->hasFile('logo')) {
            $path = $request->file('logo')->store('public/images');
            $fileName = str_replace('public/', '', $path);
        }

       Event::create([
         'eventname' => request('eventname'),
         'date' => request('date'),
         'time' => request('time'),
         'description' => request ('description'),
         'logo'=>$fileName
       ]);

        return redirect('/');

    }

    public function showEvent (Event $event){
        return view('pages.event', compact('event'));
    }

    public function deleteEvent(Event $event){
        $event->delete();
        return redirect('/');
    }

    public function updateEvent(Event $event){
        return view('pages.update-event', compact('event'));
    }

    public function storeUpdate(Event $event, Request $request){
        Event::where('id',$event->id)->update(
            $request->only(['eventname','date','time','description','logo']));
        return redirect('/renginys/'.$event->id);
    }

    public function registerEvent (Event $event){
        return view('pages.register-to-event', compact('event'));
    }

    public function submitEventRegistration (Event $event){
        EventRegistration::create([
            'event_id' => $event->id,
            'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'status' => 'Laukiama patvirtinimo'
        ]);
        return redirect('/');
    }

    public function eventRegistrations(Event $event){
        $eventRegistrations = EventRegistration::where('event_id', $event->id)->get();
        return view('pages.event-registrations', compact('eventRegistrations'));

    }

    public function about (){
        return view('pages.about');
    }

    public function contacts (){
        return view('pages.contacts');
    }

    public function deleteRegistration (EventRegistration $eventRegistration){
        $eventRegistration->delete();
        return redirect('/renginys/event-registrations/'.$eventRegistration->event_id);
    }

    public function approveRegistration (EventRegistration $eventRegistration){
        $eventRegistration->status='patvirtinta';
        $eventRegistration->save();
        return redirect('/renginys/event-registrations/'.$eventRegistration->event_id);
    }





}
