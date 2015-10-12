<?php
/**
 * Object represents table 'boss'
 *
     * @author: http://phpdao.com
     * @date: 2015-10-12 17:51	 
 */
class Bos{
	private $bossId;
	private $bossName;
	private $bossState;
	private $headshipITHeadshipITId;

	public function getBossId() {
		return $this->bossId;
	}

	public function setBossId($bossId) {
		$this->bossId = $bossId;
	}

	public function getBossName() {
		return $this->bossName;
	}

	public function setBossName($bossName) {
		$this->bossName = $bossName;
	}

	public function getBossState() {
		return $this->bossState;
	}

	public function setBossState($bossState) {
		$this->bossState = $bossState;
	}

	public function getHeadshipITHeadshipITId() {
		return $this->headshipITHeadshipITId;
	}

	public function setHeadshipITHeadshipITId($headshipITHeadshipITId) {
		$this->headshipITHeadshipITId = $headshipITHeadshipITId;
	}

}
?>