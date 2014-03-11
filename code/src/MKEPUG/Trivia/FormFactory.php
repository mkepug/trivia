<?php
/**
 * Created by PhpStorm.
 * User: deej
 * Date: 2/1/14
 * Time: 9:14 PM
 */

namespace MKEPUG\Trivia;


use MKEPUG\Trivia\Forms\Admin;
use MKEPUG\Trivia\Forms\Welcome;
use MKEPUG\Trivia\Forms\Play;
use MKEPUG\Trivia\Forms\Display;

class FormFactory {

    public static function make($formType)
    {
        if ($formType == 'admin') {
            return new Admin();
        } elseif ($formType == 'welcome') {
            return new Welcome();
        } elseif ($formType == 'play') {
            return new Play();
        } elseif ($formType == 'display') {
            return new Display();

        } else {
            throw new FormFactoryException(
                sprintf("Formtype [ %s ] is not defined in FormFactory", $formType)
            );
        }

    }
} 