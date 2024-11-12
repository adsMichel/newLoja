<?php

namespace Modules\Media\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('media::index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('media::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
      // Encontre a mídia pelo ID
        $media = Media::find($id);

        // Verifique se a mídia foi encontrada e possui um caminho
        if (!$media || !isset($media->path)) {
            return response()->json(['error' => 'Mídia não encontrada'], 404);
        }

        // Acesse o caminho da mídia
        $filePath = $media->path;

        // Extraia largura, altura e formato da variável $size
        [$width, $height, $format] = explode('-', $size);

        // Verifique se o arquivo existe no disco 'public' ou 'local'
        if (Storage::disk('public')->exists($filePath)) {
            $path = Storage::disk('public')->path($filePath);
        } elseif (Storage::disk('local')->exists($filePath)) {
            $path = Storage::disk('local')->path($filePath);
        } else {
            return response()->json(['error' => 'Arquivo não encontrado'], 404);
        }

        // Crie o gerenciador de imagens com o driver personalizado
        $manager = new ImageManager(new Driver());

        // Abra o arquivo de imagem e redimensione usando a nova sintaxe
        $image = $manager->read($path)->resize($width, $height);

        // Codifique a imagem para o formato desejado
        $encodedImage = match ($format) {
            'webp' => $image->toWebp(),
            'jpg', 'jpeg' => $image->toJpg(),
            'png' => $image->toPng(),
            default => $image->toJpg(), // Padrão para JPG
        };

        // Retorne a imagem como resposta
        return response($encodedImage)->header('Content-Type', 'image/' . $format);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('media::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
