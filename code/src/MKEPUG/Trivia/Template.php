<?php
/**
 * Created by PhpStorm.
 * User: deej
 * Date: 2/1/14
 * Time: 9:33 PM
 */

namespace MKEPUG\Trivia;


use MKEPUG\Trivia\Interfaces\IForm;

class Template {
    public function render(IForm $form) {
        $html = file_get_contents(__DIR__."/template_start.html");
        $html .= $form->renderHeader();
        $html .= file_get_contents(__DIR__."/template_middle.html");
        $html .= $form->renderBody();
        $html .= file_get_contents(__DIR__."/template_end.html");

        return $html;
    }
} 