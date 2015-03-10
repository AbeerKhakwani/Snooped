<?php

require_once "src/SnoopTranslator.php";

class SnoopTranslatorTest extends PHPUnit_Framework_TestCase
{

	function test_SnoopTranslator()
	{
        //Arrange
        $test_SnoopTranslator = new SnoopTranslator;
        $input = "susan";

        //Act
        $result = $test_SnoopTranslator->translate($input);

        //Assert
        $this->assertEquals("zuzan", $result);
    }

	function test_SnoopTranslator_withUppercase()
	{
		//Arrange
		$test_SnoopTranslator = new SnoopTranslator;
		$input = "Susan";

		//Act
		$result = $test_SnoopTranslator->translate($input);

		//Assert
		$this->assertEquals("Suzan", $result);
	}



}?>
