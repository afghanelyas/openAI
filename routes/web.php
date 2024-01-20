<?php

use App\AI\Chat;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $chat = new Chat();
    $poem = $chat
        ->systemMessage('You are a poetic assistant, skilled in explaining complex programming concepts with creative flair.')
        ->send('Compose a poem that explains the concept of recursion in programming.');

    $sillyPoem = $chat->reply('Cool, can you make it much, much sillier.');

    return view('welcome', ['poem' => $sillyPoem]);

});

Route::get('/roast', function () {
    return view('roast');
})->name('roast');

Route::post('/roast', function () {

    $arttributes = request()->validate([
        'topic' => 'required', 'string', 'min:3', 'max:50',
    ]);

    $prompt = "Please roast {$arttributes['topic']} in a saracatic tone.";

    $mp3 = (new Chat())->send(
        message: $prompt,
        speech: true,
    );
    $file = 'roasts/'.md5($mp3).'.mp3';
    file_put_contents(
        public_path($file), $mp3
    );

    return redirect('/roast')->with([
        'file' => $file,
        'flash' => 'Here is your roast.',
    ]);
});
