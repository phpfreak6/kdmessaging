<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class AwsRegionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('aws_regions')->delete();

        \DB::table('aws_regions')->insert(array(
            0 =>
            array(
                'id' => 3,
                'title' => 'Asia Pacific(Sydney)',
                'value' => 'ap-southeast-2',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 =>
            array(
                'id' => 8,
                'title' => 'Europe(Frankfurt)',
                'value' => 'eu-central-1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 =>
            array(
                'id' => 9,
                'title' => 'Europe(Ireland)',
                'value' => 'eu-west-1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 =>
            array(
                'id' => 19,
                'title' => 'US East(N.Virginia)',
                'value' => 'us-east-1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 =>
            array(
                'id' => 21,
                'title' => 'US West(Oregon)',
                'value' => 'us-west-2',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 =>
            array(
                'id' => 24,
                'title' => 'Asia Pacific(Mumbai)',
                'value' => 'ap-south-1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
    }
}
