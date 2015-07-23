<?php

    $factory('printon\User',[
        'name'              => $faker->firstName,
        'email'             => $faker->email,
        'password'          => bcrypt("password1"),
        'remember_token'    => NULL
    ]);
    
    $factory('Bican\Roles\Models\Permission',[  
        'name'              => 'Developer',
        'slug'              => "developer",
        'description'       => 'Creators'
    ]);

    $factory('Bican\Roles\Models\Role',[  
        'name'              => 'Jedi',
        'slug'              => "jedi",
        'description'       => 'Tylko my',
        'level'             => '50'
    ]);

    $factory('printon\Tag',[
        'name'              => $faker->unique()->word,
        'slug'              => $faker->unique()->word,
        'body'              => $faker->text,
        'owner_id'         => 'factory:printon\User',
        'created_id'       => 'factory:printon\User',
        'updated_id'       => 'factory:printon\User'
    ]);

    $factory('printon\Parameter',[
        'name'              => $faker->unique()->word,
        'slug'              => $faker->unique()->word,
        'body'              => $faker->text,    
        'owner_id'         => 'factory:printon\User',
        'created_id'       => 'factory:printon\User',
        'updated_id'       => 'factory:printon\User'
    ]);

    $factory('printon\Option',[
        'name'              => $faker->unique()->word,
        'slug'              => $faker->unique()->word,
        'body'              => $faker->text,
        'owner_id'         => 'factory:printon\User',
        'created_id'       => 'factory:printon\User',
        'updated_id'       => 'factory:printon\User'
    ]);

    $factory('printon\OptionSub',[
        'name'              => $faker->unique()->word,
        'slug'              => $faker->unique()->word,
        'body'              => $faker->text
        // 'option_id'         => 'factory:printon\Option'
    ]);

    $factory('printon\ParameterSub',[
        'name'              => $faker->unique()->word,
        'slug'              => $faker->unique()->word,
        'body'              => $faker->text,
    ]);

    $factory('printon\Image',[
        'slug'              => $faker->unique()->word,
        'img_name'          => $faker->file($sourceDir = 'C:/Users/Qba/webProjects/Code/printon/tests/test_images', $targetDir = 'C:\Users\Qba\webProjects\Code\printon\tests\test_images\stored'),
        'body'              => $faker->text,
        'unique_id'         => $faker->unique()->numberBetween($min = 1000, $max = 5000)
    ]);

    $factory('printon\Format',[
        'name'              => $faker->unique()->city,
        'slug'              => $faker->unique()->name,
        'body'              => $faker->text
    ]);

    $factory('printon\File',[
        'tag_id'            => 'factory:printon\Tag',
        'file_name'         => $faker->file($sourceDir = 'C:/Users/Qba/webProjects/Code/printon/tests/test_files', $targetDir = 'C:\Users\Qba\webProjects\Code\printon\tests\test_files\stored'),
        'slug'              => $faker->unique()->company,
        'body'              => $faker->text
    ]);


?>


