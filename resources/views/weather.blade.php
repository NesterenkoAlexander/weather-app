@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card mx-auto" style="max-width: 800px;">
        <div class="card-header bg-success text-white">
            <h2 class="text-center mb-0">Погода в {{ $data['name'] }}</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Текущая температура:</h5>
                    <p class="display-4">{{ $data['main']['temp'] }}°C</p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="http://openweathermap.org/img/wn/{{ $data['weather'][0]['icon'] }}@2x.png" alt="Погода">
                    <p>{{ $data['weather'][0]['description'] }}</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4">
                    <h6>Влажность:</h6>
                    <p>{{ $data['main']['humidity'] }}%</p>
                </div>
                <div class="col-md-4">
                    <h6>Давление:</h6>
                    <p>{{ $data['main']['pressure'] }} гПа</p>
                </div>
                <div class="col-md-4">
                    <h6>Ветер:</h6>
                    <p>{{ $data['wind']['speed'] }} м/с</p>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('forecast', $data['name']) }}" class="btn btn-primary">Прогноз на 5 дней</a>
            </div>
        </div>
    </div>
</div>
@endsection