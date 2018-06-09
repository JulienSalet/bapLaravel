<?php


use App\Models\Block;

function getTexts($name)
{
    $text = Block::where('key', $name)->first();
    
    return $text ? $text->value : var_dump('Il faut rajouter le block avec la clé => ' . $name);
}