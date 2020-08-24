<?php
/**
 * Created by: Ogaga Agi (aogaga).
 * Github: https://github.com/aogaga
 * Twitter: @aogaga
 * Date: 8/23/20
 * Time: 2:58 PM
 * Project url-app
 */

namespace App\Domain\Service;


use App\Domain\Repository\UrlRepository;
use App\Domain\Service\Infrastructure\HashServiceInterface;

class HashService implements HashServiceInterface
{
    public function getHashCode()
    {
        return $this->calculateHash();
    }

    private function calculateHash(){
        $result = "";
        $arr = $this->charMap();
        $len = count($arr) -1;
        for($i = 0; $i < 7; $i++){
            $num =  rand(0, $len);
            $result = $result."". $arr[$num];
        }
        return $result;
    }

    private function charMap(){
        return array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q",
            "r", "s", "t","u", "v", "w", "x", "y", "z", "0", "1", "2", "3", "4", "5", "6", "7", "8",
            "9", "-", "_", "~");
    }
}
