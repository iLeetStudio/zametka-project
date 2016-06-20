<?php

namespace App\Http\Controllers;

use DB;
use Response;

use App\Note;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class NoteController extends Controller
{

    public function getNote($url)
    {   
        $note = Note::where('url','=',$url)->get();

        return view('note')->with(
            'jsonNote' => json_encode($note)
        );

    }


}