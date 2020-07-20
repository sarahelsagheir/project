<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravelista\Comments\Commentable;
use Nicolaslopezj\Searchable\SearchableTrait;
use App\Order;
use Illuminate\Database\Eloquent\SoftDeletes;


class Book extends Model
{
    use Notifiable , Commentable;
    use SearchableTrait;
    use SoftDeletes;


   protected $fillable = [
        'title', 'description', 'price',  'author', 'category_id',  'cover',  'quantity', 'status', 'user_id',
    ];


    protected $searchable = [
        'columns' => [
            'books.title' => 10,
            'books.author' => 10,
            'books.price' => 3,
        ]
    ];


    public function  copies_available(){
        $users= \App\User::all();

        foreach($users as $user){
            $orders = $user->orders;
            $carts = $orders->transform( function( $cart, $key) {
                return unserialize($cart->cart);
            });

            foreach($carts as $cart){
                foreach($cart->items as $item){
                    $book= Book::where('id',$item['id'])->pluck('quantity');
                    $quantity = $book[0];

                }
            }
        }
        return $quantity;
// dd($quantity);
    }

    protected $sliders_location = '/coverpages/';

    public function getCoverAttribute($photo){
    	return $this->sliders_location . $photo;
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function borrower()
    {

      return $this->belongsTo('App\Borrower');

    }
    public function category()
    {

      return $this->belongsTo('App\Category');

    }
    public function wishlist(){
        return $this->hasMany(Wishlist::class);
     }




}
