<?php

namespace PixelVide\PixelVideEsign\Http\Controllers;

use App\Http\Controllers\Controller;
use PixelVide\PixelVideEsign\Repository\Esign\EsignRepository;

// App-level dependencies
use App\UserRoles;
use App\EmployeeMasterPlainAadhar;
use App\EsignUser;
use App\Helper\UtilsHelper;

class EsignController extends Controller
{
    protected $esignRepository;

    public function __construct(EsignRepository $esignRepository)
    {
        $this->esignRepository = $esignRepository;
    }

    public function callback()
    {
        return view('pixelvide-esign::esign.esign_callback');
    }

    public function error()
    {
        return view('pixelvide-esign::esign.esign_callback_error');
    }
}
