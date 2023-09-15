<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestbookController extends Controller
{
    public function postMessage(Request $request)
    {
        $messages = session()->get('guestbook_messages', []);
        $messages[] = [
            'name' => $request->input('name'),
            'message' => $request->input('message'),
        ];
        session()->put('guestbook_messages', $messages);
        return redirect()->route('guestbook');
    }

    public function showGuestbook()
    {
        $messages = session()->get('guestbook_messages', []);
        return view('guestbook', ['messages' => $messages]);
    }
}