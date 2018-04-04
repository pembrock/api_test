<?php
/**
 * Created by PhpStorm.
 * User: Kirill Pasikuta
 * Date: 04.04.2018
 * Time: 11:39
 */

if (!isset($_GET['request'])) {
    echo json_encode([
        'code'  => 400,
        'error' => 'Bad Request'
    ]);
}