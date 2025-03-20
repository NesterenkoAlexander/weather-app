@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card mx-auto" style="max-width: 800px;">
        <div class="card-header bg-info text-white">
            <h2 class="text-center mb-0">Прогноз погоды для {{ $data['city']['name'] }}</h2>
        </div>
        <div class="card-body">
            <div class="row">
                @foreach($data['list'] as $forecast)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ date('d.m H:i', $forecast['dt']) }}</h5>
                            <img src="http://openweathermap.org/img/wn/{{ $forecast['weather'][0]['icon'] }}.png" alt="Погода">
                            <p class="card-text">{{ $forecast['weather'][0]['description'] }}</p>
                            <p class="h5">{{ $forecast['main']['temp'] }}°C</p>
                            <div class="d-flex justify-content-between">
                                <small>Влажность: {{ $forecast['main']['humidity'] }}%</small>
                                <small>Ветер: {{ $forecast['wind']['speed'] }} м/с</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection