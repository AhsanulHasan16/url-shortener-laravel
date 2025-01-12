<?php

namespace App\Http\Controllers;

use App\Models\Url;
use Illuminate\Http\Request;

class UrlController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'original_url' => 'required|url',
        ]);

        $shortCode = substr(md5($request->original_url . microtime()), 0, 6);

        $url = Url::create([
            'original_url' => $request->original_url,
            'short_code' => $shortCode,
        ]);

        return response()->json([
            'message' => 'URL shortened successfully',
            'short_url' => url($shortCode),
            'original_url' => $url->original_url,
        ]);
    }

    public function redirect($shortCode)
    {
        $url = Url::where('short_code', $shortCode)->firstOrFail();

        return redirect()->to($url->original_url);
    }
}
