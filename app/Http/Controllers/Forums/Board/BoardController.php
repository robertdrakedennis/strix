<?php

namespace Strix\Http\Controllers\Forums\Board;

use Illuminate\Http\Request;
use Strix\Http\Controllers\Controller;
use Strix\Models\Board\Board;

class BoardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Board $board)
    {
        return view('pages.forum.board.show', [
            'board' => $board
        ]);
    }
}
