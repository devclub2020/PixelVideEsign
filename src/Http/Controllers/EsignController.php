<?php

namespace PixelVide\PixelVideEsign\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PixelVide\PixelVideEsign\Repository\Esign\EsignRepository;

class EsignController extends Controller
{
    protected $esignRepository;

    public function __construct(EsignRepository $esignRepository)
    {
        $this->esignRepository = $esignRepository;
    }

    /**
     * Save bill details
     */
    public function saveBillDetails(Request $request)
    {
        $result = $this->esignRepository->saveBillDetails($request);

        return response()->json($result);
    }

    /**
     * Redirect user to eSign provider
     */
    public function eSignRedirect($hrmstoken, $esigntxnid)
    {
        $redirectUrl = $this->esignRepository
            ->getRedirectUrl($hrmstoken, $esigntxnid);

        return redirect()->away($redirectUrl);
    }

    /**
     * eSign callback
     */
    public function callback(Request $request)
    {
        return view('pixelvide-esign::esign.esign_callback');
    }

    /**
     * Error page
     */
    public function error()
    {
        return view('pixelvide-esign::esign.esign_callback_error');
    }
}
