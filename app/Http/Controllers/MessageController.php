<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        return view('message.index', compact('messages'));
    }

    public function create()
    {
        return view('message.create'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        $message = new Message();
        $message->title = $request->title;
        $message->description = $request->description;
        $message->user_id = Auth::id(); 
        $message->save();
        return redirect()->route('message.index')->with('success', 'Cоздано успешно!');
    }
    public function myMessage()
    {
        $messages = Message::where('user_id', Auth::id())->get();
        return view('message.my_message', compact('message'));
    }

}