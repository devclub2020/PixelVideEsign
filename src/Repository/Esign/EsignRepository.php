<?php

namespace PixelVide\PixelVideEsign\Repository\Esign;

use App\Models\EsignTransactions;
use App\Models\EsignTransactionTracking;
use App\Repository\CommonRepository\FinancialYearRepository;
use App\Helper\UtilsHelper;
use App\Transactions;

class EsignRepository
{
    protected $financialYearRepository;

    public function __construct(FinancialYearRepository $financialYearRepository)
    {
        $this->financialYearRepository = $financialYearRepository;
    }
}
