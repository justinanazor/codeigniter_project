<?php
if (!function_exists('get_country_codes')) {
    function get_country_codes()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://restcountries.com/v2/all");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);

        $countries = json_decode($result, true);

        $country_codes = [];
        foreach ($countries as $country) {
            if (isset($country['callingCodes'][0]) && !empty($country['callingCodes'][0])) {
                $country_codes[] = [
                    'name' => $country['name'],
                    'code' => '+' . $country['callingCodes'][0]
                ];
            }
        }

        return $country_codes;
    }
}
