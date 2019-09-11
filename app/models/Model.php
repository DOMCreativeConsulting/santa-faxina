<?php

namespace App\models;

use App\core\App;

class Model
{
    
    public static function quantidade($table)
    {
        $result = App::get('database')->selectAll($table);

        $numero = 0;

        foreach($result as $item){$numero++;}

        return $numero;
    }

    public function get()
    {
        $result = App::get('database')->selectAll(static::$table);

        return $result;
    }

    public static function create($data)
    {
        return App::get('database')->insert(static::$table, $data);
    }

    public static function update($data, $campos = [])
    {
        return App::get('database')->update(static::$table, $data, $campos);
    }

}