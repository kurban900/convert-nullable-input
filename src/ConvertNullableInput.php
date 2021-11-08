<?php

namespace Kurban900\ConvertNullableInput;

class ConvertNullableInput
{
    public static function convert(array $replace): void
    {
        $request = request();

        if (in_array($request->getMethod(), ['POST', 'PUT', 'PATCH'])) {
            $isConvertable = fn($fieldname, $value) => in_array($fieldname, array_keys($replace)) && $value === null;
            $fields = [];

            foreach ($request->all() as $fieldname => $value) {
                if ($isConvertable($fieldname, $value)) {
                    $fields[$fieldname] = $replace[$fieldname];
                }
            }

            $unsetFields = collect($replace)->diffKeys($request->all())->toArray();
            $request->merge($fields)->merge($unsetFields);
        }
    }
}
