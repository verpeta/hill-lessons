<?php

require_once "./vendor/autoload.php";

require_once "./db/config.php";

class User extends \Illuminate\Database\Eloquent\Model
{
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}

/**
 * @method static find(int $int):Order
 */
class Order extends \Illuminate\Database\Eloquent\Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class)->withTimestamps();
    }

}

class Product extends \Illuminate\Database\Eloquent\Model
{
    public function orders()
    {
        return $this->belongsToMany(Order::class)->withTimestamps();
    }
}


//$o = Order::find(1);
//
//var_dump($o->products->toArray());
//


$p = Product::find(1);
var_dump($p->orders->toArray());




//$u = new User();
//$u->name = "Vlad";
//$u->password = password_hash("123456", PASSWORD_BCRYPT);
//$u->email = "vlad@gmail.com";
//$u->save();


