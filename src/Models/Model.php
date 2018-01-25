<?php
/**
 * Created by PhpStorm.
 * User: Shurik.com
 * Date: 12/13/2017
 * Time: 11:31 PM
 */
namespace App\Models;
use PDO;
class Model
{
    protected $pdo;
    function __construct()
    {
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset='.DB_CHARSET;
        $this->pdo = new PDO($dsn,DB_USER,DB_PASS,$opt);

    }
}
