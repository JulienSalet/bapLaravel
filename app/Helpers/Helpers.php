<?php


use App\Models\Block;

function getTexts($name)
{
    $text = Block::where('key', $name)->first();
    
    return $text ? $text->value : var_dump('missing text : ' . $name);
}