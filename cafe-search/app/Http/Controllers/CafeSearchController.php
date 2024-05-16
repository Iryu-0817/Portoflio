<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;

 

class CafeSearchController extends Controller
{
    public function getCafeInfo(Request $request) {
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');
        $radius = $request->input('radius');



        
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept-Language' => 'ja',
            'X-Goog-Api-Key' => Config::get('services.google.places_api_key'),
            'X-Goog-FieldMask' => 'places.id,places.displayName,places.formattedAddress,places.types,places.nationalPhoneNumber,places.rating,places.priceLevel,places.regularOpeningHours,places.takeout,places.websiteUri,places.photos'
        ])->post('https://places.googleapis.com/v1/places:searchNearby', [
            'includedTypes' => ['cafe'],
            'maxResultCount' => 12,
            'rankPreference' => 'POPULARITY',
            'locationRestriction' => [
                'circle' => [
                    'center' => [
                        'latitude' => $latitude,
                        'longitude' => $longitude,
                    ],
                    'radius' => $radius * 1000,
                ],
            ],
        ]);





        $cafes = $response->json()['places'] ?? [];
        return view('List.output', ['cafes' => $cafes]);
        Log::info('API Response: ' . print_r($response->json(), true));
    }

    
    
    private function openingHours($periods) {
        $dayDescription = [];
        $currentDay = date('w');

        foreach($periods as $period) {
            $openTime = $period['open']['day'];
            $openHour = $period['open']['hour'];
            $openMinute = $period['open']['minute'];
            $dayDescription = '';

            if (isset($period['close'])) {
                $closeDay = $period['close']['day'];
                $closeHour = $period['close']['hour'];
                $closeMinute = $period['close']['minute'];

                if ($openTime <= $currentDay && $closeDay >= $currentDay) {
                    $openTime = sprintf('%02d:%02d', $openHour, $openMinute);
                    $closeTime = sprintf('%02d:%02d', $closeHour, $closeMinute);
                    $dayDescription = "{$openTime}～{$closeTime}";
                }
            }

            $dayDescription[] = $dayDescription;
        }
        
        return $dayDescription;
    }
}
