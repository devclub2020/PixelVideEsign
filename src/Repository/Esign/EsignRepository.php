<?php

namespace PixelVide\PixelVideEsign\Repository\Esign;

use Illuminate\Http\Request;

class EsignRepository
{
    public function saveBillDetails(Request $request)
    {
        // existing logic stays here
        return [
            'status' => 'success',
            'message' => 'Bill details saved successfully'
        ];
    }

    public function getRedirectUrl($hrmstoken, $esigntxnid)
    {
        // build and return redirect URL
        return 'https://example-esign-provider.com';
    }
}
