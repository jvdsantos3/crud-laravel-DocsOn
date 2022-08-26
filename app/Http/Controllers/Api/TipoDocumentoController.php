<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TipoDocumento;

class TipoDocumentoController extends Controller
{
    public function index()
    {
        return TipoDocumento::all();
    }
}
