<?php
/**
 * Created by PhpStorm.
 * User: Ihor
 * Date: 25.09.2017
 * Time: 20:00
 */

session_start();

function session_errors() {
    $output = '<div class="error">';
    $output .= $_SESSION['errors'];
    $output .= '</div>';
    $_SESSION['errors'] = '';
    return $output;
}

function session_message() {
    $output = '<div class="message">';
    $output .= $_SESSION['message'];
    $output .= '</div>';
    $_SESSION['message'] = '';
    return $output;
}

function hello_block_authorization() {
    $output = '<div class="hello-block">
               <p>
               Привет, ' . $_SESSION['name'] . ' ' . $_SESSION['surname'] . '<br>
               Мы рады Вас видеть, и надеемся<br>
               Вы не желаете <a href="' . DOMEN . 'public/login/?logout">выходить</a>
               </p>
               </div>';
    return $output;
}