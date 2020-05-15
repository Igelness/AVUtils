<?php
/**
 *
 * @author A. Vorobyov <a.a.vorobyev0@gmail.com>
 *
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @package AVUtils
 */

namespace AVUtils;

class Utils
{
  /**
   *
   * @param float $celsius
   * @return float $fahrenheit
   */
  public function celsiusToFahrenheit(float $celsius) {
    $fahrenheit = $celsius*9/5 + 32;
    return $fahrenheit;
  }

  /**
   *
   * @param float $fahrenheit
   * @return float $celsius
   */
  public function fahrenheitToCelsius(float $fahrenheit) {
    $celsius = ($fahrenheit - 32)*5/9;
    return $celsius;
  }

  /**
   *
   * @param int $cathet1
   * @param int $cathet2
   * @return float $hypotenuse
   */
  public function pythagoras(int $cathet1, int $cathet2):float {
    $hypotenuse = sqrt(pow($cathet1, 2) + pow($cathet2, 2));
    return $hypotenuse;
  }

  /**
   *
   * @param array $arr
   * @return mixed first array value
   */
  public function firstArrayIndexValue(array $arr) {
    return $arr[0];
  }
  /**
   *
   * @param array $arr
   * @return mixed last array value
   */
  public function lastArrayIndexValue(array $arr) {
    return $arr[count($arr) - 1];
  }
  /**
   *
   * @param string $word
   * @param int $symbolNumber
   * @return string String with uppercase symbol
   */
  public function symbolToUpperCase(string $word, int $symbolNumber) {
    $exploded = [];
    $exploded = str_split($word, 1);
    if(isset($exploded[$symbolNumber - 1]) && is_string($exploded[$symbolNumber - 1])) {
      $exploded[$symbolNumber - 1 ] = strtoupper($exploded[$symbolNumber - 1]);
    } else {
      return false;
    }

    $imploded = implode($exploded);
    return $imploded;
  }

  /**
   * @param $obj
   * @return void
   */
  public function objDump($obj) {
    echo "<pre>";
    print_r($obj);
    echo "</pre>";
  }

  /**
   * Makes PDO connection a bit easier.
   *
   * @param string $host Server Address
   * @param string $dbname
   * @param string $user
   * @param string $password
   * @return object
   */
  public function getPDOConnection(string $host, string $dbname, string $user, string $password)
  {
    $dsn = "mysql:host={$host};dbname={$dbname}";
    $db = new \PDO($dsn, $user, $password);

    return $db;
  }
}