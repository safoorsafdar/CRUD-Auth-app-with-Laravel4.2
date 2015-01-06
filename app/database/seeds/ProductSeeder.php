<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProductSeeder
 *
 * @author safoor
 */
class ProductSeeder extends DatabaseSeeder {

    public function run() {
        $init_product = [
            ["name" => "product 1"]
        ];
        foreach ($init_product as $single) {
            Product::create($single);
        }
    }

}
