<?php

var_dump('ciao');

function checkEmail($email)
{
    if (str_contains($email, '@') && str_contains($email, '.')) {
        return true;
    } else {
        return false;
    }
};


function generateAlertMessage($response)
{
    var_dump($response);
    if ($response == true) {
        return [
            'status' => 'correct',
            'alert' => 'Success! your are subscribe',
            'class' => 'success',
        ];
    }
    return [
        'status' => 'incorrect',
        'alert' => 'Failed! your email is incorrect',
        'class' => 'danger',
    ];
}
