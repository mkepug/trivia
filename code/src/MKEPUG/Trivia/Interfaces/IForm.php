<?php
/**
 * Created by PhpStorm.
 * User: deej
 * Date: 2/1/14
 * Time: 9:46 PM
 */

namespace MKEPUG\Trivia\Interfaces;


use MKEPUG\Trivia\Request;

interface IForm {
    public function handleRequest(Request $request);
    public function renderHeader();
    public function renderBody();

} 