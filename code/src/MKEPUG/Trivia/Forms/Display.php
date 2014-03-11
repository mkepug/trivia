<?php
/**
 * Created by PhpStorm.
 * User: deej
 * Date: 2/1/14
 * Time: 8:54 PM
 */

namespace MKEPUG\Trivia\Forms;



use MKEPUG\Trivia\Interfaces\IForm;
use MKEPUG\Trivia\Request;

class Display implements IForm{

    public function handleRequest(Request $request)
    {
        // TODO: Implement handleRequest() method.
    }

    public function renderHeader() {
        return '';
    }

    public function renderBody()
    {
        return "Display Page";
    }

} 