<?php

class InputCheck
{
    public $input = [
        'name',
    ];
    public $error = [
        'inputMiss' => '未入力',
        'length' => '短すぎます。',
    ];

    public function check($text)
    {
        if (!$text) {
            return false;
        } else {
            return true;
        }
    }

    public function length($text)
    {
        if (!$text < 6) {
            return false;
        } else {
            return true;
        }
    }

    public function errorMessage($text)
    {
        if (!$this->check($text)) {
            return $this->error['inputMiss'];
        } else {
            return $text;
        }
    }

}
