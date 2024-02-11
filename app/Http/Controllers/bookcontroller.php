<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\book as RequestsBook;
use App\Models\book;
use App\Models\User;
use App\Notifications\booknotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;
use RealRashid\SweetAlert\Facades\Alert;

class bookcontroller extends Controller
{
    public function booking(RequestsBook $request)
    {
        $booktime = DB::table('books')->where('user_id', Auth::user()->id)->where('time', $request->b_time)->where('date', $request->b_date)->get();

        $books = new book();
        $books->name = $request->b_name;
        $books->phone = $request->b_phone;
        $books->time = $request->b_time;
        $books->date = $request->b_date;
        $books->person = $request->person;
        $books->user_id = $request->userid;
        $books->status = 'pendeng';
        foreach ($booktime as $item) {
            if ($item->date == $books->date && $item->user_id == $request->userid && $request->b_time == $request->b_time) {
                return back()->with('error', 'you booked before in this date');
            }
        }
        $books->save();
        $user = User::where('email', auth()->user()->email)->get();
        Notification::send($user, new booknotify($request->b_name, $request->b_phone, $request->b_time, $request->b_date, $request->person, $books->status));
        return back()->with('message', 'please wait for accepting it');
    }
    public function mark($id)
    {
        DB::table('notifications')->where('id', $id)->update([
            'read_at' => now()
        ]);
        return back();
    }

    public function viewbooking()
    {
        $bookview = DB::table('books')->get();
        return view('adminpanel.adminbooking', compact('bookview'));
    }
    public function mybooking()
    {
        $bookview = DB::table('books')->get();
        return view('mybooking', compact('bookview'));
    }
    public function acceptbooking($id)
    {
        $accept = book::find($id);
        $accept->status = 'accept';
        $accept->save();
        $useraccept = User::where('id', $accept->user_id)->get();
        Notification::send($useraccept, new booknotify($accept->name, $accept->phone, $accept->time, $accept->date, $accept->person, $accept->status));
        return redirect()->route('viewbooking');
    }
    public function rejectbooking($id)
    {
        $accept = book::find($id);
        $accept->status = 'reject';
        $accept->save();
        $useraccept = User::where('id', $accept->user_id)->get();
        Notification::send($useraccept, new booknotify($accept->name, $accept->phone, $accept->time, $accept->date, $accept->person, $accept->status));
        return redirect()->route('viewbooking');
    }
    public function deletebooking($id)
    {
        book::find($id)->delete();
        return redirect()->route('mybooking');
    }

    public function deleteallbooking()
    {
        DB::table('books')->truncate();
        return redirect()->route('mybooking');
    }
}
