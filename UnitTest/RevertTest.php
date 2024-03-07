<?php

class RevertTest extends Revert
{
	public $testString = "Привет! Давно не виделись.";
	public $testResult = "Тевирп! Онвад ен ьсиледив.";

	public function revTest()
	{
		$result = $this->revertCharacters($this->testString);

		if($result == $this->testResult)
        {
			return true;
		}

		return false;
	}
}
