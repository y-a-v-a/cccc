city celsius color composition - cccc
=====================================

Also known as: Colorscheme project, color palette, colorsheme

This is a world color palette, based on local temperatures. The earth's maximum temperature ever measured is white (136 &deg;F, about 58 &deg;C in [Libya](https://en.wikipedia.org/wiki/Highest_temperature_recorded_on_Earth), 1922), the lowest (-128 &deg;F, -89 &deg;C in [Vostok Station](https://en.wikipedia.org/wiki/Lowest_temperature_recorded_on_Earth), Antarctica, 1983) is black. Colors are based on a three days weather forecast from [openweathermap.org](http://openweathermap.org/) which means these colors will change through time.

See a working version here: [http://www.vincentbruijn.nl/colorpalette/](http://www.vincentbruijn.nl/colorpalette/)


* A class that contacts Open Weather Map for weather forecasts and turn temperatures into colors.
* UPDATE 2012-09-09 : Google shut down API because of shutting down iGoogle. Switched to openweathermap.org API.
* UPDATE 2012-09-10 : Added caching. For every city a file is created per day containing JSON from openweathermap.org.
* UPDATE 2014-08-10 : Switched to new openweathermap.org API which needs an API key.
* UPDATE 2016-09-28 : Renew API endpoint and API key

## How to get it running?

* Create an appid.php file and define a constant there called APP_ID.
* Get an APP id from openweathermap.org and add it in appid.php

## Copyright & license

The MIT License (MIT)
Copyright (c) 2008-2016, Vincent Bruijn, [y-a-v-a.org](http://www.y-a-v-a.org)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.