<?php
//turns number into a string
// function validCard($num){
//   $str = strval($num);
//   var_dump($str);
// };
//
// validCard(4408041234567893);
//splits string into an array of characters
// function validCard($num){
//   $str = strval($num);
//   $split = str_split($str);
//   var_dump($split);
// };
//
// validCard(4408041234567893);
//trying to double the values of even index numbers...but it's doubling the index number,
//not the value of the index number...
// function validCard($num){
//   $str = strval($num);
//   $split = str_split($str);
//   for ($i = 0; $i < count($split); $i++){
//     if($split[$i] % 2 === 0){
//       $i * 2;
//       echo $i . '<br/>';
//     }
//   }
// };
//
// validCard(4408041234567893);
// //doubles value of even index, but not odd
// function validCard($num){
//   $str = strval($num);
//   $split = str_split($str);
//   foreach($split as $key => $value){
//     if($key % 2 === 0){
//       $x = $value * 2;
//       echo $x . '<br/>';
//     } else {
//       $x = $value;
//       echo $x . '<br/>';
//     }
//   }
// };
//
// validCard(4408041234567893);
//pushes each value into an array
// function validCard($num){
//   $str = strval($num);
//   $split = str_split($str);
//   foreach($split as $key => $value){
//     if($key % 2 === 0){
//       $x = $value * 2;
//       $array[] = $x;
//     } else {
//       $x = $value;
//       $array[] = $x;
//     }
//   }
//   print_r($array);
// };
//
// validCard(4408041234567893);
//thought it worked, but you have to split the two digit numbers
// function validCard($num){
//   $str = strval($num);
//   $split = str_split($str);
//   foreach($split as $key => $value){
//     if($key % 2 === 0){
//       $x = $value * 2;
//       $array[] = $x;
//     } else {
//       $x = $value;
//       $array[] = $x;
//     }
//   }
//   echo array_sum($array);
// };
//
// validCard(4408041234567893);
//Getting there...but this gave me duplicates with the two digit numbers...
//one with the integers separated and another with them still together...
// function validCard($num){
//   $str = strval($num);
//   $split = str_split($str);
//   foreach($split as $key => $value){
//     if($key % 2 === 0){
//       $x = $value * 2;
//       if($x > 9){
//         $strTwo = strval($x);
//         $splitTwo = str_split($strTwo);
//         $array[] = $splitTwo;
//       }
//         $array[] = $x;
//     } else {
//       $x = $value;
//       $array[] = $x;
//     }
//   }
//
//   print_r($array);
//
// };
//
// validCard(4408041234567893);
//Solved the duplicate problem. But the double digit numbers are being put into a
//nested array...
  // function validCard($num){
  //   $str = strval($num);
  //   $split = str_split($str);
  //   foreach($split as $key => $value){
  //     if($key % 2 === 0){
  //       $x = $value * 2;
  //       if($x > 9){
  //         $strTwo = strval($x);
  //         $splitTwo = str_split($strTwo);
  //         $array[] = $splitTwo;
  //       } else {
  //         $array[] = $x;
  //       }
  //     } else {
  //       $x = $value;
  //       $array[] = $x;
  //     }
  //   }
  //
  //   print_r($array);
  //
  // };
  //
  // validCard(4408041234567893);
//flattens the array
  // function validCard($num){
  //   $str = strval($num);
  //   $split = str_split($str);
  //   foreach($split as $key => $value){
  //     if($key % 2 === 0){
  //       $x = $value * 2;
  //       if($x > 9){
  //         $strTwo = strval($x);
  //         $splitTwo = str_split($strTwo);
  //         $array[] = $splitTwo;
  //       } else {
  //         $array[] = $x;
  //       }
  //     } else {
  //       $x = $value;
  //       $array[] = $x;
  //     }
  //   }
  //   $output_array_obj = new RecursiveIteratorIterator(new RecursiveArrayIterator($array));
  //   $output_array = iterator_to_array($output_array_obj, false);
  //   print_r($output_array);
  //
  // };
  //
  // validCard(4408041234567893);
//adds all the values of the array
  // function validCard($num){
  //   $str = strval($num);
  //   $split = str_split($str);
  //   foreach($split as $key => $value){
  //     if($key % 2 === 0){
  //       $x = $value * 2;
  //       if($x > 9){
  //         $strTwo = strval($x);
  //         $splitTwo = str_split($strTwo);
  //         $array[] = $splitTwo;
  //       } else {
  //         $array[] = $x;
  //       }
  //     } else {
  //       $x = $value;
  //       $array[] = $x;
  //     }
  //   }
  //   $output_array_obj = new RecursiveIteratorIterator(new RecursiveArrayIterator($array));
  //   $output_array = iterator_to_array($output_array_obj, false);
  //   echo array_sum($output_array);
  //
  // };
  //
  // validCard(4408041234567893);
//works on all but the last one - because it has an odd number of digits...
  // function validCard($num){
  //   $str = strval($num);
  //   $split = str_split($str);
  //   foreach($split as $key => $value){
  //     if($key % 2 === 0){
  //       $x = $value * 2;
  //       if($x > 9){
  //         $strTwo = strval($x);
  //         $splitTwo = str_split($strTwo);
  //         $array[] = $splitTwo;
  //       } else {
  //         $array[] = $x;
  //       }
  //     } else {
  //       $x = $value;
  //       $array[] = $x;
  //     }
  //   }
  //   $output_array_obj = new RecursiveIteratorIterator(new RecursiveArrayIterator($array));
  //   $output_array = iterator_to_array($output_array_obj, false);
  //   $sum = array_sum($output_array);
  //     if($sum % 10 === 0){
  //       echo 'This IS a valid card number.';
  //     } else {
  //       echo 'This is NOT a valid card number.';
  //   }
  // };
  //
  // // validCard(1234567890123456); //should be false
  // // validCard(4408041234567893); //should be true
  // // validCard(38520000023237); //should be true
  // validCard(4222222222222); //should be true
//thought I could reverse the string for odd numbered inputs, but that ends up
//doubling the wrong numbers...
  // function validCard($num){
  //   $str = strval($num);
  //   $revstr = strrev($str);
  //   $split = str_split($revstr);
  //   foreach($split as $key => $value){
  //     if($key % 2 === 0){
  //       $x = $value * 2;
  //       if($x > 9){
  //         $strTwo = strval($x);
  //         $splitTwo = str_split($strTwo);
  //         $array[] = $splitTwo;
  //       } else {
  //         $array[] = $x;
  //       }
  //     } else {
  //       $x = $value;
  //       $array[] = $x;
  //     }
  //   }
  //   print_r($array);
  //   $output_array_obj = new RecursiveIteratorIterator(new RecursiveArrayIterator($array));
  //   $output_array = iterator_to_array($output_array_obj, false);
  //   $sum = array_sum($output_array);
  //     if($sum % 10 === 0){
  //       echo 'This IS a valid card number.';
  //     } else {
  //       echo 'This is NOT a valid card number.';
  //   }
  // };
  //
  // validCard(4222222222222); //should be true
//DONE! The function counts the number of digits in the input...if it's even it does one thing...
//if it's odd it does another. BAM. Mic drop. I think I JUST became a Software Engineer.
  function validCard($num){
    $str = strval($num);
    $split = str_split($str);
    $count = count($split);
      if($count % 2 === 0){
        foreach($split as $key => $value){
          if($key % 2 === 0){
            $x = $value * 2;
            if($x > 9){
              $strTwo = strval($x);
              $splitTwo = str_split($strTwo);
              $array[] = $splitTwo;
            } else {
              $array[] = $x;
            }
          } else {
            $x = $value;
            $array[] = $x;
          }
        }
      } elseif ($count % 2 !== 0){
        foreach($split as $key => $value){
          if($key % 2 !== 0){
            $x = $value * 2;
            if($x > 9){
              $strTwo = strval($x);
              $splitTwo = str_split($strTwo);
              $array[] = $splitTwo;
            } else {
              $array[] = $x;
            }
          } else {
            $x = $value;
            $array[] = $x;
          }
        }
      }
    $output_array_obj = new RecursiveIteratorIterator(new RecursiveArrayIterator($array));
    $output_array = iterator_to_array($output_array_obj, false);
    $sum = array_sum($output_array);
      if($sum % 10 === 0){
        echo 'This IS a valid card number.';
      } else {
        echo 'This is NOT a valid card number.';
    }
  };
  validCard(1234567890123456); //should be false
  validCard(4408041234567893); //should be true
  validCard(38520000023237); //should be true
  validCard(4222222222222); //should be true
 ?>
