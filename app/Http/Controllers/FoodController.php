<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    //Blog Page Load
    public function showHomePage(){
        return view('foods.home');
    }

    //Menu Page Load
    public function showMenuPage(){
        return view('foods.menu');
    }

    //Location Page Load
    public function showLocationPage(){
        return view('foods.location');
    }

     //Blog Page Load
     public function showBlogPage(){
        return view('foods.blog');
    }


    //Reservation Page Load
    public function showReservationPage(){
        return view('foods.reservation');
    }

     //News Page Load
     public function showNewsPage(){
        return view('foods.news');
    }
    //Staff Page Load
    public function showStaffPage(){
        return view('foods.our_staff');
    }

     //Gallery Page Load
     public function showGalleryPage(){
        return view('foods.gallery');
    }





    








}
