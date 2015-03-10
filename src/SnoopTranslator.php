<?php
 class SnoopTranslator {

    function translate($input_phrase)
    {

        $take_and_separate= explode(" ", $input_phrase);
        $array =array();
        $array_s=array('s');
        $array_z=array('z');

        foreach($take_and_separate as $word )
        {

            if(!ctype_upper($word))
            {
                $string_replace=str_replace($array_s, $array_z,$word);

            }

            if(strtolower($word[0]) == "s"){
                $string_replace[0] = $word[0];
            }
            array_push($array,$string_replace);

       }


       return implode(" ", $array);


   }


 } ?>
