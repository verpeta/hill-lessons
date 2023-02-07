<?php

abstract class Model
{
    static public function findById(int $id): static
    {
        $cols = implode(',', array_keys(get_class_vars(static::class)));
        $sql = 'SELECT  ' . $cols . ' FROM ' . static::class;
        $o = new static();
        $o->id = $id;
        return  $o;
    }

    public function save(){
        $sql = "insert into <table> cols values (.....)";
    }

    public function delete()
    {
        $sql = "delete blog where id= ". $this->id;
    }
}

class User extends Model
{
    protected $id;
    protected $name;
}

class Blog extends Model
{
    protected $id;
    protected $title;
    protected $category;
}
//////////
///
$b1 = Blog::findById(5);
$b1->save();

$b1::delete($b1->getID);
