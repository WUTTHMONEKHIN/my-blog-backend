<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class SubscriptionController extends Controller
{
    public function toggle(Blog $blog)
    {
         if($blog->isSubscribedBy(auth()->user()))
         {
               //subscribe -> unsubscribe -> delete the data
               $blog->subscribedUsers()->detach(auth()->id());

         }else{
               //not subscribe -> subscribe -> store the data
               $blog->subscribedUsers()->attach(auth()->id());
         }
         return back();
    }
}
