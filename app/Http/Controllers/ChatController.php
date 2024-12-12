<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;




class ChatController extends Controller
{
    public function send(Request $request)
    {
        if (!Auth::check()) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        // Validate message
        $request->validate([
            'message' => 'required|string',
        ]);

        // Receiver ID cố định
        $receiver_id = 1; // ID của người nhận cố định

        // Kiểm tra người gửi
        $sender_id = Auth::id();

        // Gửi tin nhắn
        Message::create([
            'sender_id' => $sender_id,
            'receiver_id' => $receiver_id,
            'message' => $request->message,
        ]);

        return response()->json(['success' => true]);
    }

    public function messages()
    {
        $messages = Message::where('sender_id', Auth::id())
            ->orWhere('receiver_id', Auth::id())
            ->orderBy('created_at', 'asc')
            ->get();

        return response()->json($messages);
    }
    public function users()
    {
        $users = DB::table('messages')
            ->select('sender_id', 'receiver_id')
            ->distinct()
            ->get();

        $userIds = $users->pluck('sender_id')->merge($users->pluck('receiver_id'))->unique();

        $users = User::whereIn('id', $userIds)
            ->get();

        return response()->json($users);
    }

}
