<?php

namespace App\Http\Controllers;

use App\Card;
use App\Note;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NotesController extends Controller
{
    public function store(Request $request, Card $card)
    {

        $note = new Note;
        $note->body = $request->body;
        $card->notes()->save($note);
        dd($card);

//        $note = new Note(['body' => $request->body]);
//        $card->notes()->save($note);


//        $card->notes()->save(
//            new Note(['body' => $request->body])
//        );


//        $card->notes()->create(['body' => $request->body]);


//        $card->notes()->create($request->all());

//        $card->addNote(
//            new Note($request->all())
//        );


//        return $request->all();
//        return \Request::all();
//        return request()->all();

//        return \Redirect::to('some/new/uri');
//        return redirect()->to('somehwere');
//        return redirect('');
        return back();

    }

    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note)
    {
        $note->update($request->all());

        return back();
    }
}
