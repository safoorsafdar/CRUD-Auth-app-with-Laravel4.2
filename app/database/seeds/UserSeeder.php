<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserSeeder
 *
 * @author safoor
 */
class UserSeeder extends DatabaseSeeder {

    public function run() {
        $users = [
            [
                "firstname" => "christopher",
                "lastname" => "pitt",
                "password" => Hash::make("safoor321"),
                "email" => "chris@example.com"
            ]
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }

}
