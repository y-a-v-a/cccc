<?php
/**
* Color scheme class for making internet-based color schemes.
* On supplying a Openweathermap.org a valid city ID this class will return a
* Hex-color value of form #ff00ff when calling the $colorcode property.
* The colorcode is based on the local forecast temperatures for three days
* and need to be supplied in Celsius
*
* @package ColorScheme
* @author Vincent Bruijn <vebruijn@gmail.com>
* @copyright (c) Vincent Bruijn 2008-2014
* @version 2.0 September 9 2012
* @license http://www.gnu.org/licenses/gpl-3.0.txt GNU Public License
*/
class ColorScheme
{
	/**
	* Colorcode of form #ff00ff
	* @var string
	*/
	public $colorcode;

	/**
	* User defined city name
	* @var string
	*/
	public $city;

	/**
	 * The URL to the weather API
	 * @var string
	 */
	private $url = "http://api.openweathermap.org/data/2.5/forecast?APPID=";

	/**
	 * The constructor needs a name of a city.
	 * @param string $city Name of a city according to the Google Maps standards
	 */
	public function __construct($city)
	{
		$this->city = $city;
		$this->colorcode = $this->getTempBasedString($this->city);
		$this->colorcode = "#" . $this->colorcode;

		return $this->colorcode;
	}

	/**
	* Use google weather api to generate a string
	*/
	protected function getTempBasedString($city, $country = null)
	{
		$cache_name = 'cache/' . $city . '-' . date('Y-m-d') . '.json';
		$jsonstr = false;

		if (file_exists($cache_name)) {
			$jsonstr = @file_get_contents($cache_name);
		} else {
			array_map('unlink', glob('cache/' . $city . '*'));
			$jsonstr = @file_get_contents ($this->url  . APP_ID . "&q=" . urlencode($city . ',' . $country));
			@file_put_contents($cache_name, $jsonstr);
		}

		if ($jsonstr === false) {
			return '808080'; // 50% gray
		}

		$data = json_decode($jsonstr, true);
		if ($data['cod'] !== '200') {
			return '808080';
		}

		$hex = '';

		for ($x = 0; $x < 3; $x++)
		{
			$value_low = $data['list'][$x]['main']['temp_min'] - 273;
			$value_high = $data['list'][$x]['main']['temp_max'] - 273;
			$value = abs(($value_low + $value_high) / 2);
			$value = $this->calculateHex($value);
			if ($value < 16) {
				$hex .= "0" . dechex($value);
			} else {
				$hex .= dechex($value);
			}
		}

		if (strlen ($hex) == 0) {
			return '808080';
		} else {
			$return = substr ($hex,0,6);
			return $return;
		}
	}

	/**
	 * Changes the Fahrenheit temperature into a value between 0 and 255.
	 * 0 is equivalent to the lowest temperature on earth ever, -128 Fahrenheit.
	 * 255 is equivalent to the highest temperature on earth ever, 136 Fahrenheit.
	 *
	 * @param int $fahrenheit The temperature in degrees F
	 * @return int $dec A decimal between 0 and 255
	 */
	private function calculateHex($celsius)
	{
		// -128 - 136 min and max temperature from earth in fahrenheit
		$dec = round((255 / 147) * $celsius, 0) + 124;
		return $dec;
	}
}



