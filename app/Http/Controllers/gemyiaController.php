<?php

namespace App\Http\Controllers;

use Gemini\Laravel\Facades\Gemini;
use Gemini\Data\Blob;
use Gemini\Enums\MimeType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class gemyiaController extends Controller
{
    public function inputImage(Request $request)
    {
        try{
        $inputImage = $request->input('url');
        $resultado = Gemini::geminiProVision()
            ->generateContent([
                "Me fale o que têm nessa imagem, quero apenas as características que você consegue analisar na imagem:",
                new Blob(
                    mimeType: MimeType::IMAGE_JPEG,
                    data: base64_encode(
                        file_get_contents($inputImage)
                    )
                )
            ]);
        $text = $resultado->text();

        return Redirect::back()->with('mensagem', $text)->with('url', $inputImage);
    }
    catch(\Throwable $e){
            return Redirect::back()->with('error', 'Erro ao processar a sua imagem, por favor, verifique a URL e tente novamente.');
        }
    }
}
