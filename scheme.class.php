<?php
/**
* Color scheme class for making internet-based color schemes.
* On supplying a Google Maps valid city name this class will return a
* Hex-color value of form #ff00ff when calling the $colorcode property.
* The colorcode is based on the local forecast temperatures for three days
* and need to be supplied in Fahrenheit
* 
* @package ColorScheme
* @author Vincent Bruijn <vebruijn@gmail.com>
* @copyright (c) Vincent Bruijn 2008
* @version 1.0 October 10 2008
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
	 * The URL to the Google weather API
	 * @var string
	 */
	private $url = "http://www.google.com/ig/api?weather=";

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
		$xmlstr = @file_get_contents ($this->url . urlencode($city));
		
		if ($xmlstr === false) {
			return '7f7f7f'; // 50% gray
		}

		$dom = new DomDocument();
		$dom->loadXML($xmlstr);

		$low = $dom->getElementsByTagName('low');
		$high = $dom->getElementsByTagName('high');
		$hex = '';

		for ($x = 0; $x < $low->length; $x++)
		{
			$value_low = $low->item($x)->getAttributenode('data')->value;
			$value_high = $high->item($x)->getAttributenode('data')->value;
			$value = ($value_low + $value_high) / 2;
			$value = $this->calculateHex($value);
			if ($value < 16) {
				$hex .= "0" . dechex($value);
			} else {
				$hex .= dechex($value);
			}
		}
		
		if (strlen ($hex) == 0) {
			return '7f7f7f';
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
	private function calculateHex($fahrenheit)
	{
		// -128 - 136 min and max temperature from earth in fahrenheit
		$dec = round((255 / 264) * $fahrenheit, 0) + 124;
		return $dec;
	}
}



