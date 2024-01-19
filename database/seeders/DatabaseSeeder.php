<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(3)->create();
        // number 10 for how many user he will create

        // Listing::create([
        //         'id'=>1,
        //         'title' => 'title one',
        //         'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        //                           Iste debitis consequuntur, quam eum illo saepe neque quia
        //                           deleniti amet autem est incidunt itaque a blanditiis ipsum.
        //                           Debitis aspernatur voluptas ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        //                           Iste debitis consequuntur, quam eum illo saepe neque quia
        //                           deleniti amet autem est incidunt itaque a blanditiis ipsum.
        //                           Debitis aspernatur voluptas ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        //                           Iste debitis consequuntur, quam eum illo saepe neque quia
        //                           deleniti amet autem est incidunt itaque a blanditiis ipsum.
        //                           Debitis aspernatur voluptas ut.',
        //         'tag' => 'laravel,javascript',
        //         'email' => 'ali@hotmail.com',
        //         'location' => 'beirut city',
        //         'website' => 'www.ali.com',
        //         'company' => 'ali company'

        // ]);

        // Listing::create([
        //         'id'=>2,
        //         'title' => 'title two',
        //         'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        //                           Iste debitis consequuntur, quam eum illo saepe neque quia
        //                           deleniti amet autem est incidunt itaque a blanditiis ipsum.
        //                           Debitis aspernatur voluptas ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        //                           Iste debitis consequuntur, quam eum illo saepe neque quia
        //                           deleniti amet autem est incidunt itaque a blanditiis ipsum.
        //                           Debitis aspernatur voluptas ut.Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        //                           Iste debitis consequuntur, quam eum illo saepe neque quia
        //                           deleniti amet autem est incidunt itaque a blanditiis ipsum.
        //                           Debitis aspernatur voluptas ut.',
        //         'tag' => 'html,javascript,CSS',
        //         'company' => 'amer company',
        //         'email' => 'amer@hotmail.com',
        //         'location' => 'abidjan city',
        //         'website' => 'www.amer.com'
        // ]);

        Listing::factory(6)->create();

}
}