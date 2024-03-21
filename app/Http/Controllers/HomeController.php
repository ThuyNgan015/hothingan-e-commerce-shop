<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $items = [
            ['name' => 'Traditional Wear'],
            ['name' => 'Western Wear'],
            ['name' => 'Swim & Beachwear'],
            ['name' => 'Winter & Seasonal Wear'],
            ['name' => 'Beauty & Grooming'],
            ['name' => 'Juwelley'],
            ['name' => 'Personal care Appliances'],
            ['name' => 'International Brands'],
            ['name' => 'Foot Wear'],
            ['name' => 'Watches'],
            ['name' => 'Accessories']
        ];
        $images = [
            [
                'name' => 'Red leather GUCCI bage',
                'price' => '200 Bdt',
                'discount' => '350 Bdt',
                'image' => 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcS710CDAG4XZ2GPms-kGTQ75PFsiD3NGBLrxmdtK-jOKkO-PNPm'
            ],
            [
                'name' => 'DZert Panda Kids',
                'price' => '200 Bdt',
                'discount' => '700 Bdt',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSszqAU1EBlokCrGmFrQgZreMACfp1aVoS6vAyBydCeR38DmpDB'
            ],
            [
                'name' => 'High Quality Child School',
                'price' => '2200 Bdt',
                'discount' => '6500 Bdt',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTExtvMHaBMsgn5R9DsNvftnhv2bzqJOVsAxKa1UNvF5Co82pWT'
            ],
            [
                'name' => '3 in 1 School Bag',
                'price' => '2400 Bdt',
                'discount' => '3400 Bdt',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlTQXIDyeAugk8aaBfK3yUYJR1X7_xpCzqPyoW_kmni4p2Ueeu'
            ],
            [
                'name' => 'ADSON Pricess Travel School',
                'price' => '2004 Bdt',
                'discount' => '3550 Bdt',
                'image' => 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSk2tWIMbwNXC9R0nVYWSU0mapJYgYTHD16JIW1ZPHf9KSQ8rJ0'
            ]
            ];
        return view('client',['items' => $items],['images'=> $images]);
    }
}
