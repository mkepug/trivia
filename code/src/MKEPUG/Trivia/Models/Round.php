<?php
/**
 * Created by PhpStorm.
 * User: deej
 * Date: 2/2/14
 * Time: 2:29 PM
 */

namespace MKEPUG\Trivia\Models;


class Round {
    protected $question;
    protected $db;
    public function __construct(\PDO $db, $question_id) {

    }

} 