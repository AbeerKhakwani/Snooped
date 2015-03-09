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
					//     function test_makeTitleCase_multipleWords()
					// 	{
					// 		//Arrange
					// 		$test_TitleCaseGenerator = new TitleCaseGenerator;
					// 	    $input ="hello to the world";
					//
					// 		//act
					// 		$result= $test_TitleCaseGenerator->makeTitleCase($input);
					//
					// 		//Assert
					// 		$this->assertEquals("Hello to the World",$result);
					// 	}
					//

}?>
