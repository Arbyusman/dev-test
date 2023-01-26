<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Palindrome extends CI_Controller {
    public function index()
	{
		$wordList = []; 
        $this->palindrome($wordList);
	}

    public function palindrome($x) 
    {
        $words = array("Aku", "KaMu", "MalAm", "isi", "string kosong");

        foreach ($words as $word) {
            if ($word == strrev($word)) {
                echo $word . " adalah palindrome. <br>";
            } else {
                echo $word . " bukan palindrome. <br>";
            }
        }
    }
}
