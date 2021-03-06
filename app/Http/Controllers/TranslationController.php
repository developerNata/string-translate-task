<?php

namespace App\Http\Controllers;

use App\Http\Requests\Translation as TranslationRequest;
use Stichoza\GoogleTranslate\GoogleTranslate;

class TranslationController extends Controller
{
    /**
     * Translate user's string.
     *
     * @param  \App\Http\Requests\Translation  $request
     * @return mixed
     */
    public function index( TranslationRequest $request ) {
        return [
            'success'       => true,
            'error'         => '',
            'translation'   => GoogleTranslate::trans($request->to_translate, 'uk', 'en')
        ];
    }
}
