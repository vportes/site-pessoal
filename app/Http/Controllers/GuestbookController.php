<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class GuestbookController extends Controller
{
    public function postMessage(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'message' => 'required|string',
        ]);

        DB::table('messages')->insert([
            'name' => $request->input('name'),
            'message' => $request->input('message'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('guestbook');
    }

    public function showGuestbook()
    {
        $messages = DB::table('messages')->get();
        $messages->each(function ($message) {
            $message->message_date = Carbon::parse($message->created_at)->format(dateFormat());
            $message->message_time = Carbon::parse($message->created_at)->format(timeFormat());
        });

        return view('guestbook', ['messages' => $messages]);
    }
}