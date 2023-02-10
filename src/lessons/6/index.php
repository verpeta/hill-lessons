<?php

require_once "./vendor/autoload.php";

require_once './db_config.php';

class User extends Illuminate\Database\Eloquent\Model
{
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}

class Order extends Illuminate\Database\Eloquent\Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}

class Product extends Illuminate\Database\Eloquent\Model
{
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}

$prod = Product::find(2);

$order = Order::find(2);
var_dump($order->products->count());

$order->products()->attach($prod);
$order->save();
var_dump($order->products->count());


die();




/**
 * Чек #1
 * Products:
 * чіпси(id=3)
 * мівіна(id=5)
 *
 *
 * Чек #34
 * Products:
 * мівіна(id=5)
 * чіпси(id=3)
 *
 */











