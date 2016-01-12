<?php
namespace Lego;

require_once 'LegoGame.php';

/**
 * Class CsvReader
 */
class CsvReader {

	/**
	 * @var \Lego\CsvReader|null
	 */
	protected static $_instance = null;

	/**
	 * @var array
	 */
	protected $_files = [
		"console" => "../data/console.csv"
	];

	/**
	 * @var array
	 */
	protected $_games = [
		"console" => false
	];

	/**
	 * @return \Lego\CsvReader
	 */
	public static function get() {
		if (self::$_instance == null) {
			self::$_instance = new CsvReader();
		}
		return self::$_instance;
	}

	/**
	 * @return array
	 */
	public function getConsoleGames() {
		if ($this->_games["console"] === false) {
			$this->_readCsvFile("console", $this->_files["console"]);
		}
		return $this->_games["console"];
	}

	/**
	 * @param $section
	 * @param $csvFile
	 */
	protected function _readCsvFile($section, $csvFile) {
		$games = [];
		$fp = fopen(realpath(__DIR__."/".$csvFile), "r");
		while (!feof($fp)) {
			$games[] = new LegoGame(fgetcsv($fp));
		}
		fclose($fp);

		$this->_games[$section] = $games;
	}
}