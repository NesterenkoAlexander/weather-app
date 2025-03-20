# Weather App
Простое приложение PHP Laravel для получения актуальной погоды и прогноза через API OpenWeatherMap.

***

**Технологии:**
- Laravel 12
- Guzzle HTTP Client
- Bootstrap 5
- OpenWeatherMap API

***

**Функционал:**
- Поиск погоды по названию города
- Отображение текущей температуры, влажности, ветра
- Прогноз погоды на 5 дней
- Обработка ошибок API
- Кэширование результатов

***

**Установка и запуск:**

*1. Клонирование репозитория*
```
git clone https://github.com/NesterenkoAlexander/weather-app
```
```
cd weather-app
```

*2. Установка зависимостей*
```
composer install
```

*3. Настройка окружения*
```
cp .env.example .env
```
*В файле .env укажите:*
```
OPEN_WEATHER_API_KEY=ваш_api_ключ
```

*4. Генерация ключа*
```
php artisan key:generate
```

*5. Запуск через Artisan*
```
php artisan serve
```

**Использование:**
- Откройте http://localhost:8000
- Введите название города (например: Москва)
- Нажмите "Узнать погоду"
- Для прогноза используйте кнопку "Прогноз на 5 дней"

***

**Примечания:**
- Получите API ключ на https://openweathermap.org/appid
- Тестовые города: (введите любой существующий город)
- Данные кэшируются на 10 минут

***

**Структура проекта:**
```
├── app/Http/Controllers/WeatherController.php - Контроллер погоды
├── resources/views/ - Шаблоны Blade
│   ├── home.blade.php       - Главная страница
│   ├── weather.blade.php    - Текущая погода
│   └── forecast.blade.php   - Прогноз
└── routes/web.php           - Маршруты
```

**© 2025 nester.era@gmail.com**
