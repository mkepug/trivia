<?php
/**
 * Created by PhpStorm.
 * User: deej
 * Date: 2/2/14
 * Time: 2:31 PM
 */

namespace MKEPUG\Trivia;


class DB {
    /**
     * @var \PDO
     */
    protected $instance;

    public function getInstance()
    {
        if (is_null($this->instance)) {
            $this->instance = new \PDO();
        }
        return $this->instance;
    }


} 