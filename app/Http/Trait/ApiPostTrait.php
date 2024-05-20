<?php

namespace App\Http\Trait;

trait apiPostTrait
{

    public function customapi($data, $message, $status)
    {
        $array = [
            $data,
            $message,
        ];
        return response()->json($array, $status);
    }
}
