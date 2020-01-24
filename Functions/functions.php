<?php

/**
 * 2.1
 * Write with PHP a function with functional like strrev(). You should NOT use standard PHP functions.
 * You can use loops and other language constructions.
 */
function reverseString($str)
{
    $index = strlen($str) - 1;
    $reversedString = '';

    while ($index >= 0) {
        $currentChar = $str[$index];
        $reversedString = "{$reversedString}{$currentChar}";
        $index = $index - 1;
    }

    return $reversedString;
}

echo reverseString('Mnogo taskov');
echo ' <br/>';

/**
 * 2.2
 * Write with PHP a function getWords(string $text) that returns an associative array, where word is
 * key, and value is how many times used the word in text. You need to normalize word (Word and
 * word should be the same key, you can use strlower() PHP function).
 */
 function getWords($stroka, $key)
 {
     $a = null;
     $b = null;
     foreach ($key as $k) {
         if (strpos($stroka, $k) !== false) {
             $a++;
             $b = substr_count($stroka, $k);

             echo "Слово $k встречается в тексте $b раз" . "<br />";
         } else {
             $stroka = strtolower($stroka);
             $b = substr_count($stroka, $k);
             echo "Слово $k встречается в тексте $b раз " . "<br />";
         }
     }
 }

$stroka = 'After several days of rain that nearly floods Derry, Maine, five-year-old Georgie Denbrough goes
outside to play. He brings with him a paper boat his older brother, Bill, made for him while sick in
bed. Georgie helps with the boat by retrieving a box of paraffin from the shelves by the cellar stairs,
even though the power is out and Georgie imagines a monster lives in the cellar. Bill melts the
paraffin in a bowl, and the boys laugh and joke together while they smear the paraffin over the
folded newspaper boat to waterproof it. Before Georgie goes out to play, he kisses Bill\'s cheek, and
Bill tells Georgie to be careful.
Even though the rains have slackened, the gutters run with water. In his yellow hat and slicker,
Georgie follows his boat as it sails along Witcham Street, wishing Bill could be with him to see it go
because Georgie is not as good as Bill at telling stories about what he sees. A current takes the
boat into a storm drain, and Georgie peeks inside to look for it.
In the drain Georgie sees a pair of yellow eyes. Scared, he begins to back away, but a voice speaks
to him. Georgie looks back and sees a clown; the clown introduces himself as "Mr. Bob Gray, also
known as Pennywise the Dancing Clown." Georgie at first thought the drain smelled like his scary
cellar at home, but now he can smell a carnival. Pennywise has Georgie\'s boat in one hand and a
balloon in the other; he offers Georgie both. When Georgie reaches forward, Pennywise grabs
Georgie\'s arm and rips it off. Georgie dies immediately. Dave Gardner, arriving "only 45 seconds
after the first scream," finds Georgie\'s body.
The sheriff tells reporters Georgie must have got his arm stuck in a fast current in the storm drain.
Mrs. Denbrough is sedated in the local emergency room; Bill remains sick in bed, listening to his
father weep in another room. The paper boat continues through the sewers to the Penobscot River
and out to sea as the rain clouds break overhead.';
$key = array('bill');
getWords($stroka, $key);

echo ' <br/>';

/**
 * 2.3
 * Write with PHP a function that will return the sum of all array elements, the array can be a nested
 * array (nesting can be 2 or more), You should NOT use standard PHP functions.
 */
$array = array(234, array(2,222,10, array(12,2300)), 1, 20);

function getElemSum($array, $sum = 0)
{
    if ($array) {
        foreach ($array as $a) {
            if (is_array($a)) {
                $sum = get_elem_sum($a, $sum);
            } else {
                $sum += $a;
            }

        }
    }
    return $sum;
}
$result = getElemSum($array);
echo "Result : $result  ";

echo ' <br/>';

/**
 * 2.4
 * The Wizzard decided to make a funny joke. He replaced all letters in words to their mirror letter (A
 * will be replaced on Z, B on Y, etc.). Write with PHP a function to help the wizzard to make this joke real.
 */
function getMag(){
$original =['1'=>'a', '2'=>'b', '3'=>'c', '4'=>'d', '5'=>'e', '6'=>'f', '7'=>'g', '8'=>'h', '9'=>'i', '10'=>'j', '11'=>'k', '12'=>'l', '13'=>'m', '14'=>'n', '15'=>'o', '16'=>'p', '17'=>'q', '18'=>'r', '19'=>'s', '20'=>'t', '21'=>'u', '22'=>'v', '23'=>'w', '24'=>'x', '25'=>'y', '26'=>'z'];

$str='ab';
$array = str_split($str);
foreach ($array as $key => $value) {

    foreach ($original as $key1 => $value1) {

        if ($value == $value1) {
            $at[] = $original[abs($key1 - '27')];
        }
    }
}
$com = implode("", $at);
print_r($com);}
echo getMag();

echo ' <br/>';
