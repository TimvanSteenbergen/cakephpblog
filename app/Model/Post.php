<?php

/**
 * Created by PhpStorm.
 * User: Gebruiker
 * Date: 5-11-2014
 * Time: 9:05
 */
class Post extends AppModel
{
    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        ),
        'zipcode' => array(
            'rule' => array('postal', '/^[1-9][0-9]{3}[\s]?[A-Za-z]{2}$/i'),
            'message' => 'Geef een geldige postcode'
        )
    );
}
