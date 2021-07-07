<?php

namespace Tests\Feature;

use Tests\TestCase;

class TranslationControllerTest extends TestCase
{
    public function testGetTranslationSuccessfully()
    {
        $this->post('api/translate', [
            'to_translate' => 'how olw are you?'
        ])->assertJsonStructure([
            "success",
            "error",
            "translation"
        ])->isOk();
    }
}
