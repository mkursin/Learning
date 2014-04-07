#-*- coding: utf-8 -*-

import json
import urllib2

api_url = "http://open-weather.ru/api/weather/Moscow/?key=15cd1c9667a439093c377fd9f42c2fce395228176315d681a62c802e"
uweather = urllib2.urlopen(api_url)
jweather = uweather.read()
wjson = json.loads(jweather)  # Конвертируем из json
for a in wjson:
    b = a["location"]
    print "Прогноз погоды на:", a['date']
    for key in b:
        print 'Sity:"%s"' % (b[key])
    print "Прогноз погоды на:", a['date']
    print "Скорость ветра:", a['wind_speed']
    print "Направление ветра:", a['wind_direction']
    print "Минимальная температура:", a['minimal_temperature']
    print "Максимальная температура:", a['maximal_temperature']
    print "код погоды:", a['weather_code']
    print '-' * 15











