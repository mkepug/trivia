<?php
/**
 * Created by PhpStorm.
 * User: deej
 * Date: 2/1/14
 * Time: 8:57 PM
 */

namespace MKEPUG\Trivia;


class Controller {
    public function handleRequest(Request $request)
    {
        try {
            $formType = $request->form;
        } catch (RequestException $e) {
            $formType = 'welcome';
        }

        if ($formType === 'welcome') {

        } else {

        }
        $form = FormFactory::make($formType);

        $form->handleRequest($request);

        $template = new Template();

        echo $template->render($form);

    }
} 