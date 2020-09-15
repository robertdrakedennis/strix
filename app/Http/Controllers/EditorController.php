<?php

namespace Strix\Http\Controllers;

use EditorJS\EditorJS;
use Illuminate\Http\Request;
use Motivo\EditorJsDataConverter\DataConverter;

class EditorController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return resolve(DataConverter::class)->init($request->input('content'));
    }
}
