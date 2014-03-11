<?php
/**
 * Created by PhpStorm.
 * User: deej
 * Date: 2/1/14
 * Time: 8:59 PM
 */

namespace MKEPUG\Trivia;


/**
 * Class Request
 *
 * @category Uncategorized
 * @package  MKEPUG\Trivia
 * @author   Jeremy Dee <jeremydee@hotmail.com>
 * @license  Dee-Signed Programs http://www.dee-signed.com
 * @link     link
 */
class Request {

    protected $get;
    protected $post;

    public function __construct($get, $post)
    {
        $this->get = $get;
        $this->post = $post;
    }

    public function __get($key)
    {
        if (array_key_exists($key, $this->get)
            && array_key_exists($key, $this->post)
        ) {
            throw new RequestException(
                sprintf("Key %s exists in GET and POST, use postValue or getValue", $key)
            );

        } elseif (array_key_exists($key, $this->get)) {

            return $this->get[$key];

        } elseif (array_key_exists($key, $this->post)) {

            return $this->post[$key];

        }else{

            throw new RequestException(sprintf("Key %s does not exist in GET or POST", $key));

        }
    }

    public function postValue($key)
    {
        if (false === array_key_exists($key, $this->post)) {
            throw new RequestException(sprintf("Key %s does not exist in POST", $key));
        }
        return $this->post[$key];
    }

    public function getValue($key)
    {
        if (false === array_key_exists($key, $this->get)) {
            throw new RequestException(sprintf("Key %s does not exist in GET", $key));
        }
        return $this->get[$key];

    }

}