<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    protected $apiKey;
    protected $apiUrl;

    public function __construct()
    {
        $this->apiKey = config('services.open_weather.api_key');
        $this->apiUrl = config('services.open_weather.api_url');
    }

    public function index()
    {
        return view('home');
    }

    public function getWeather(Request $request)
    {
        $request->validate(['city' => 'required|string|max:255']);
        
        // Кэшируем на 10 минут
        $data = \Cache::remember("weather_{$request->city}", 600, function() use ($request) {
            return Http::get("{$this->apiUrl}/weather", [
                'q' => $request->city,
                'appid' => $this->apiKey,
                'units' => 'metric',
                'lang' => 'ru'
            ])->json();
        });
    
        if (isset($data['cod']) && $data['cod'] == 200) {
            return view('weather', ['data' => $data]);
        }
    
        return back()->withErrors(['city' => 'Не удалось получить данные']);
    }

    public function getForecast($city)
    {
        $response = Http::get("{$this->apiUrl}/forecast", [
            'q' => $city,
            'appid' => $this->apiKey,
            'units' => 'metric',
            'lang' => 'ru'
        ]);

        if ($response->successful()) {
            $data = $response->json();
            return view('forecast', ['data' => $data]);
        }

        return redirect()->route('home')->withErrors(['city' => 'Не удалось получить прогноз']);
    }
}