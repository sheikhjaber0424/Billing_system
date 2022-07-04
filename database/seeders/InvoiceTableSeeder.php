<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\InvoiceProduct;
use App\Models\Invoice;

use Illuminate\Database\Seeder;

class InvoiceTableSeeder extends Seeder
{
    
    public function run()
    {
        $faker = Factory:: create();

        Invoice::truncate();

        InvoiceProduct ::truncate();

        foreach(range(1,20) as  $i){
            $products  = collect();

            foreach(range(1, mt_rand(2,10)) as $j){
                $price = $faker->numberBetween(100,1000);
                $qty = $faker->numberBetween(1,20);
                $products->push(new InvoiceProduct([
                    'name' => $faker->sentence,
                    'price' =>  $price,
                    'qty'   =>$qty,
                    'total' =>($qty * $price)
                ]));
            }

            $subTotal = $products->sum('total');
            $discount = $faker->numberBetween(10,20);
            $grandTotal = $subTotal - $discount;

            $invoice = Invoice::create([
                'client' => $faker->name,
                'title'=> $faker->sentence,
                'invoice_no' => $faker->numberBetween(10000, 40000),
                'invoice_date' => $faker->date(),
                'due_date' =>  $faker->date(),
                'discount' =>  $discount,
                'sub_total' =>  $subTotal,
                'grand_total' => $grandTotal

            ]);

            $invoice->products()->saveMany($products);
        }
    }
}

