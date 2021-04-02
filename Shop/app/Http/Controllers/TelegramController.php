<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Telegram\Bot\FileUpload\InputFile;

use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramController extends Controller
{
    public function updatedActivity()
    {
        $activity = Telegram::getUpdates();
        dd($activity);
    }


    public function sendMessage()
    {
        return view('telegram');
    }

    public function storeMessage(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required'


        ]);;

        $text =
            "<b>Name: </b>\n"
            . "$request->name\n"
            . "<b>Phone: </b>\n"
            . "$request->phone\n"
            . "<b>Email: </b>\n"
            . "$request->email\n"
            . "<b>Message: </b>\n"
            . "$request->message\n";


        Telegram::sendMessage([
            'chat_id' => '-481309547',
            'parse_mode' => 'HTML',
            'text' => $text

        ]);
        $photo = $request->file('file');

        Telegram::sendPhoto([
            'chat_id' => '-481309547',
            'photo' => InputFile::createFromContents(file_get_contents($photo->getRealPath()), str::random(10) . '.' . $photo->getClientOriginalExtension()),
            'caption' => 'Photo Image'
        ]);


        return redirect()->back();
    }

}
