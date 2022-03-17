<?php

namespace App\Services;


class ISOCodeService{
    public function validateISO3166Code($isoCode)
    {
        try {
            return (new \League\ISO3166\ISO3166)->alpha2($isoCode);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
