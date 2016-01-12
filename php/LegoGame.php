<?php
namespace Lego;

/**
 * Class CsvReader
 */
class LegoGame {

	/**
	 * @var int
	 */
	protected $_public_date = 0;

	/**
	 * @var string
	 */
	protected $_name = "";

	/**
	 * @var bool
	 */
	protected $_played = false;

	/**
	 * @var int
	 */
	protected $_percent = 0;

	/**
	 * @var string
	 */
	protected $_cover = "";

	/**
	 * LegoGame constructor.
	 *
	 * @param null $data
	 */
	public function __construct($data = null) {
		if ($data === null) {
			return;
		}

		$this->_public_date = $data[0];
		$this->_name = $data[1];
		$this->_played = ($data[2] === "false") ? false : true;
		$this->_percent = (int)$data[3];
		$this->_cover = $data[4];
	}

	/**
	 * @return int
	 */
	public function getPublicDate() {
		return $this->_public_date;
	}

	/**
	 * @param int $public_date
	 */
	public function setPublicDate($public_date) {
		$this->_public_date = $public_date;
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->_name;
	}

	/**
	 * @param string $name
	 */
	public function setName($name) {
		$this->_name = $name;
	}

	/**
	 * @return bool
	 */
	public function isPlayed() {
		return $this->_played;
	}

	/**
	 * @param bool $played
	 */
	public function setPlayed($played) {
		$this->_played = ($played === "false") ? false : true;
	}

	/**
	 * @return int
	 */
	public function getPercent() {
		return $this->_percent;
	}

	/**
	 * @param int $percent
	 */
	public function setPercent($percent) {
		$this->_percent = (int)$percent;
	}

	/**
	 * @return string
	 */
	public function getCover() {
		return $this->_cover;
	}

	/**
	 * @param string $name
	 */
	public function setCover($cover) {
		$this->_cover = $cover;
	}

	/**
	 * @return string
	 */
	public function getColorCode() {
		if ($this->getPercent() == 100) {
			return "silver";
		}
		elseif ($this->getPercent() < 50) {
			return "red";
		}
		elseif ($this->getPercent() < 75) {
			return "yellow";
		}
		elseif ($this->getPercent() < 100) {
			return "green";
		}
		return "red";
	}
}