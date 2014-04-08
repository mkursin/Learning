#-*- coding: utf-8 -*-
import json
import requests
url = "http://open-weather.ru/api/weather/Moscow/?key=15cd1c9667a439093c377fd9f42c2fce395228176315d681a62c802e"
data = requests.get(url).json()
for day in data:
    a = day["location"]
    print "Прогноз погоды на:", day['date']
    for key in a:
        print 'Sity:"%s"' % (a[key])
    print "Скорость ветра:", day['wind_speed']
    print "Направление ветра:", day['wind_direction']
    print "Минимальная температура:", day['minimal_temperature']
    print "Максимальная температура:", day['maximal_temperature']
    print "код погоды:", day['weather_code']
    print '-' * 15





