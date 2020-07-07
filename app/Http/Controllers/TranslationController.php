<?php

namespace App\Http\Controllers;

use App\Http\Requests\Translation as TranslationRequest;

class TranslationController extends Controller
{
    /**
     * Translate user's string.
     *
     * @param  \App\Http\Requests\Translation  $request
     * @return mixed
     */
    public function index( TranslationRequest $request ) {
        $toTranslate = $request->to_translate;
        return [
            'success'       => true,
            'error'         => '',
            'translation'   => $toTranslate
        ];
    }
}
