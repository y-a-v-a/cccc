city celsius color composition - cccc
=====================================

Also known as: Colorscheme project, color palette, colorsheme

See a working version here: [http://www.vincentbruijn.nl/colorpalette/](http://www.vincentbruijn.nl/colorpalette/)

[y-a-v-a.org](http://www.y-a-v-a.org) 2008-2014

* A class that contacts Open Weather Map for weather forecasts and turn temperatures into colors.
* UPDATE 2012-09-09 : Google shut down API because of shutting down iGoogle. Switched to openweathermap.org API.
* UPDATE 2012-09-10 : Added caching. For every city a file is created per day containing JSON from openweathermap.org.
* UPDATE 2014-08-10 : Switched to new openweathermap.org API which needs an API key.

How to get it running?

* Create an appid.php file and define a constant there called APP_ID.
* Get an APP id from openweathermap.org and add it in appid.php
