<?php

require 'settings.php';
require __DIR__ . '/vendor/laravel/laravel/public/dan.php';

define('PATH', public_path('../../../../'));

ini_set('max_execution_time', '0');

class DAN extends DB
{
    private $table;
    private $primaryKey;
    private $server;
    private $db;
    private $user;
    private $password;

    public function __get($table)
    {
        $this->table = $table;

        return $this;
    }

    public function setTable($table)
    {
        $this->table = $table;

        return $this;
    }

    public function setPrimaryKey($primaryKey)
    {
        $this->primaryKey = $primaryKey;

        return $this;
    }

    public function __invoke($arg1 = null, $arg2 = null, $arg3 = null)
    {
        if ($arg1 && is_array($arg1)) {
            $primaryKey = str_replace('data_', 'id_', $this->table);

            return parent::table($this->table)->where($primaryKey, $arg1[$primaryKey])->first();
        }

        if ($arg2) {
            if ($arg2 && is_array($arg2)) {

                return parent::table($this->table)->where($arg1, $arg2[$arg1])->first();
            }

            return parent::table($this->table)->where($arg1, $arg2)->first();
        }

        if ($arg1) {

            return parent::table($this->table)->where($this->primaryKey, $arg1)->first();
        }

        if (!$arg1) {

            return parent::table($this->table)->get();
        }
    }

    public function setServer($server)
    {
        $this->server = $server;

        return $this;
    }

    public function setDb($db)
    {
        $this->db = $db;

        return $this;
    }

    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    public function getPdo()
    {
        try {
            $dbh = new PDO("mysql:host=$this->server;dbname=$this->db", $this->user, $this->password);

            return $dbh;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public function list_tables()
    {
        $tableDb = [];

        foreach ($this->getPdo()->query('SHOW TABLES')->fetchAll() as $key => $table) {

            $tableDb[$table[0]] = $table[0];
        }

        return $tableDb;
    }

    public function __call($methodName, $arguments)
    {

        return DB::table($this->table)->$methodName(...$arguments);
    }

    public function __toString()
    {

        return json_encode(parent::table($this->table)->get());
    }

    public function getEnum($column)
    {
        // Create an instance of the model to be able to get the table name

        $arr = DB::select(DB::raw("SHOW COLUMNS FROM $this->table WHERE Field = '$column'"));
        if (count($arr) == 0) {
            return array();
        }
        // Pulls column string from DB
        $enumStr = $arr[0]->Type;

        // Parse string
        preg_match_all("/'([^']+)'/", $enumStr, $matches);

        // Return matches
        return isset($matches[1]) ? $matches[1] : [];
    }
}

use App\Http\Requests\Request;
use Philo\Blade\Blade;

$views = __DIR__ . '../';
$cache = __DIR__ . '/cache';

$blade = new Blade($views, $cache);

$dan = new DAN;
$dan->setServer($db_server)
    ->setDb($db_name)
    ->setUser($db_user)
    ->setPassword($db_password);

foreach ($dan->list_tables() as $key => $table) {
    $primaryKey = str_replace('data_', 'id_', $table);

    $tableKey = str_replace('data_', '', $table);
    $tableDb[$tableKey] = clone $dan->setTable($table)->setPrimaryKey($primaryKey);
    $tableDb[$table] = clone $dan->setTable($table)->setPrimaryKey($primaryKey);

    $tableShort = substr($tableKey, 0, 3);
    $tableDb[$tableShort] = $tableDb[$table](null, null, $table);
}

extract($tableDb);

error_reporting(0);
$data = [];
$data['id_admin'] = 'ADM001';
$data['nama'] = 'budi';
$data['username'] = 'admin';

// class Komentar extends Model
// {

// }

// class User extends Model
// {
//     public function komentar()
//     {

//         return $this->hasOne(Komentar::class);
//     }

// }

// echo ($data_admin); die;



// script autoupdate
// $updated_at = file_get_contents(PATH . './updated_at.txt');
// $tanggal = date('Y-m-d');

// if (!preg_match("/$tanggal/", $updated_at)) {
//     $cek_update = file_get_contents('https://dandan.bikinaplikasi.dev/cek_update.txt');

//     if($cek_update == 1) {
//         $file_dan = "https://dandan.bikinaplikasi.dev/src/documentation/Dan.zip";
//         file_put_contents(PATH . './Dan.zip', file_get_contents($file_dan));

//         $file_settings = file_get_contents(PATH . './settings.php');

//         $zip = new ZipArchive;
//         $res = $zip->open(PATH . './Dan.zip');
//         if ($res === TRUE) {
//             $zip->extractTo(PATH . '../');
//             $zip->close();

//             // update waktu pluginnya terakhir diupdate
//             $updated_at = $updated_at . "\n$tanggal";
//             file_put_contents(PATH . 'updated_at.txt', $updated_at);
//             file_put_contents(PATH . 'settings.php', $file_settings);

//             unlink(PATH . 'Dan.zip');
//         } else {
//             echo 'Gagal melakukan update!';
//         }
//     }
// }
