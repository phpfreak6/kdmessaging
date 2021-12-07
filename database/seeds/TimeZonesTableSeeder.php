<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class TimeZonesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('time_zones')->delete();
        
        \DB::table('time_zones')->insert(array (
            0 => 
            array (
                'id' => 1,
                'country_code' => 'AD',
                'zone_name' => 'Europe/Andorra',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'country_code' => 'AE',
                'zone_name' => 'Asia/Dubai',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'country_code' => 'AF',
                'zone_name' => 'Asia/Kabul',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'country_code' => 'AG',
                'zone_name' => 'America/Antigua',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'country_code' => 'AI',
                'zone_name' => 'America/Anguilla',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'country_code' => 'AL',
                'zone_name' => 'Europe/Tirane',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'country_code' => 'AM',
                'zone_name' => 'Asia/Yerevan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'country_code' => 'AO',
                'zone_name' => 'Africa/Luanda',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'country_code' => 'AQ',
                'zone_name' => 'Antarctica/Casey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'country_code' => 'AQ',
                'zone_name' => 'Antarctica/Davis',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'country_code' => 'AQ',
                'zone_name' => 'Antarctica/DumontDUrville',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'country_code' => 'AQ',
                'zone_name' => 'Antarctica/Mawson',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'country_code' => 'AQ',
                'zone_name' => 'Antarctica/McMurdo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'country_code' => 'AQ',
                'zone_name' => 'Antarctica/Palmer',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'country_code' => 'AQ',
                'zone_name' => 'Antarctica/Rothera',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'country_code' => 'AQ',
                'zone_name' => 'Antarctica/Syowa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'country_code' => 'AQ',
                'zone_name' => 'Antarctica/Troll',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'country_code' => 'AQ',
                'zone_name' => 'Antarctica/Vostok',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'country_code' => 'AR',
                'zone_name' => 'America/Argentina/Buenos_Aires',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'country_code' => 'AR',
                'zone_name' => 'America/Argentina/Catamarca',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'country_code' => 'AR',
                'zone_name' => 'America/Argentina/Cordoba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'country_code' => 'AR',
                'zone_name' => 'America/Argentina/Jujuy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'country_code' => 'AR',
                'zone_name' => 'America/Argentina/La_Rioja',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'country_code' => 'AR',
                'zone_name' => 'America/Argentina/Mendoza',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'country_code' => 'AR',
                'zone_name' => 'America/Argentina/Rio_Gallegos',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'country_code' => 'AR',
                'zone_name' => 'America/Argentina/Salta',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'country_code' => 'AR',
                'zone_name' => 'America/Argentina/San_Juan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'country_code' => 'AR',
                'zone_name' => 'America/Argentina/San_Luis',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'country_code' => 'AR',
                'zone_name' => 'America/Argentina/Tucuman',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'country_code' => 'AR',
                'zone_name' => 'America/Argentina/Ushuaia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'country_code' => 'AS',
                'zone_name' => 'Pacific/Pago_Pago',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'country_code' => 'AT',
                'zone_name' => 'Europe/Vienna',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'country_code' => 'AU',
                'zone_name' => 'Antarctica/Macquarie',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'country_code' => 'AU',
                'zone_name' => 'Australia/Adelaide',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'country_code' => 'AU',
                'zone_name' => 'Australia/Brisbane',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'country_code' => 'AU',
                'zone_name' => 'Australia/Broken_Hill',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'country_code' => 'AU',
                'zone_name' => 'Australia/Currie',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'country_code' => 'AU',
                'zone_name' => 'Australia/Darwin',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'country_code' => 'AU',
                'zone_name' => 'Australia/Eucla',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'country_code' => 'AU',
                'zone_name' => 'Australia/Hobart',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'country_code' => 'AU',
                'zone_name' => 'Australia/Lindeman',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'country_code' => 'AU',
                'zone_name' => 'Australia/Lord_Howe',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'country_code' => 'AU',
                'zone_name' => 'Australia/Melbourne',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'country_code' => 'AU',
                'zone_name' => 'Australia/Perth',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'country_code' => 'AU',
                'zone_name' => 'Australia/Sydney',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'country_code' => 'AW',
                'zone_name' => 'America/Aruba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'country_code' => 'AX',
                'zone_name' => 'Europe/Mariehamn',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'country_code' => 'AZ',
                'zone_name' => 'Asia/Baku',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'country_code' => 'BA',
                'zone_name' => 'Europe/Sarajevo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'country_code' => 'BB',
                'zone_name' => 'America/Barbados',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'country_code' => 'BD',
                'zone_name' => 'Asia/Dhaka',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'country_code' => 'BE',
                'zone_name' => 'Europe/Brussels',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'country_code' => 'BF',
                'zone_name' => 'Africa/Ouagadougou',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'country_code' => 'BG',
                'zone_name' => 'Europe/Sofia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'country_code' => 'BH',
                'zone_name' => 'Asia/Bahrain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'country_code' => 'BI',
                'zone_name' => 'Africa/Bujumbura',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'country_code' => 'BJ',
                'zone_name' => 'Africa/Porto-Novo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'country_code' => 'BL',
                'zone_name' => 'America/St_Barthelemy',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'country_code' => 'BM',
                'zone_name' => 'Atlantic/Bermuda',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'country_code' => 'BN',
                'zone_name' => 'Asia/Brunei',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'country_code' => 'BO',
                'zone_name' => 'America/La_Paz',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'country_code' => 'BQ',
                'zone_name' => 'America/Kralendijk',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'country_code' => 'BR',
                'zone_name' => 'America/Araguaina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'country_code' => 'BR',
                'zone_name' => 'America/Bahia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'country_code' => 'BR',
                'zone_name' => 'America/Belem',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'country_code' => 'BR',
                'zone_name' => 'America/Boa_Vista',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'country_code' => 'BR',
                'zone_name' => 'America/Campo_Grande',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'country_code' => 'BR',
                'zone_name' => 'America/Cuiaba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'country_code' => 'BR',
                'zone_name' => 'America/Eirunepe',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'country_code' => 'BR',
                'zone_name' => 'America/Fortaleza',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'country_code' => 'BR',
                'zone_name' => 'America/Maceio',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'country_code' => 'BR',
                'zone_name' => 'America/Manaus',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'country_code' => 'BR',
                'zone_name' => 'America/Noronha',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'country_code' => 'BR',
                'zone_name' => 'America/Porto_Velho',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'country_code' => 'BR',
                'zone_name' => 'America/Recife',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'country_code' => 'BR',
                'zone_name' => 'America/Rio_Branco',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'country_code' => 'BR',
                'zone_name' => 'America/Santarem',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'country_code' => 'BR',
                'zone_name' => 'America/Sao_Paulo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'country_code' => 'BS',
                'zone_name' => 'America/Nassau',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'country_code' => 'BT',
                'zone_name' => 'Asia/Thimphu',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'country_code' => 'BW',
                'zone_name' => 'Africa/Gaborone',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'country_code' => 'BY',
                'zone_name' => 'Europe/Minsk',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'country_code' => 'BZ',
                'zone_name' => 'America/Belize',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'country_code' => 'CA',
                'zone_name' => 'America/Atikokan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'country_code' => 'CA',
                'zone_name' => 'America/Blanc-Sablon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'country_code' => 'CA',
                'zone_name' => 'America/Cambridge_Bay',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'country_code' => 'CA',
                'zone_name' => 'America/Creston',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'country_code' => 'CA',
                'zone_name' => 'America/Dawson',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'country_code' => 'CA',
                'zone_name' => 'America/Dawson_Creek',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'country_code' => 'CA',
                'zone_name' => 'America/Edmonton',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'country_code' => 'CA',
                'zone_name' => 'America/Fort_Nelson',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'country_code' => 'CA',
                'zone_name' => 'America/Glace_Bay',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'country_code' => 'CA',
                'zone_name' => 'America/Goose_Bay',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'country_code' => 'CA',
                'zone_name' => 'America/Halifax',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'country_code' => 'CA',
                'zone_name' => 'America/Inuvik',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'country_code' => 'CA',
                'zone_name' => 'America/Iqaluit',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'country_code' => 'CA',
                'zone_name' => 'America/Moncton',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'country_code' => 'CA',
                'zone_name' => 'America/Nipigon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'country_code' => 'CA',
                'zone_name' => 'America/Pangnirtung',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'country_code' => 'CA',
                'zone_name' => 'America/Rainy_River',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'country_code' => 'CA',
                'zone_name' => 'America/Rankin_Inlet',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'country_code' => 'CA',
                'zone_name' => 'America/Regina',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'country_code' => 'CA',
                'zone_name' => 'America/Resolute',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'country_code' => 'CA',
                'zone_name' => 'America/St_Johns',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'country_code' => 'CA',
                'zone_name' => 'America/Swift_Current',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'country_code' => 'CA',
                'zone_name' => 'America/Thunder_Bay',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'country_code' => 'CA',
                'zone_name' => 'America/Toronto',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'country_code' => 'CA',
                'zone_name' => 'America/Vancouver',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'country_code' => 'CA',
                'zone_name' => 'America/Whitehorse',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'country_code' => 'CA',
                'zone_name' => 'America/Winnipeg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'country_code' => 'CA',
                'zone_name' => 'America/Yellowknife',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'country_code' => 'CC',
                'zone_name' => 'Indian/Cocos',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'country_code' => 'CD',
                'zone_name' => 'Africa/Kinshasa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'country_code' => 'CD',
                'zone_name' => 'Africa/Lubumbashi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'country_code' => 'CF',
                'zone_name' => 'Africa/Bangui',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'country_code' => 'CG',
                'zone_name' => 'Africa/Brazzaville',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'country_code' => 'CH',
                'zone_name' => 'Europe/Zurich',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'country_code' => 'CI',
                'zone_name' => 'Africa/Abidjan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'country_code' => 'CK',
                'zone_name' => 'Pacific/Rarotonga',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
                'country_code' => 'CL',
                'zone_name' => 'America/Punta_Arenas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'country_code' => 'CL',
                'zone_name' => 'America/Santiago',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
                'country_code' => 'CL',
                'zone_name' => 'Pacific/Easter',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'country_code' => 'CM',
                'zone_name' => 'Africa/Douala',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 124,
                'country_code' => 'CN',
                'zone_name' => 'Asia/Shanghai',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 125,
                'country_code' => 'CN',
                'zone_name' => 'Asia/Urumqi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
                'country_code' => 'CO',
                'zone_name' => 'America/Bogota',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 127,
                'country_code' => 'CR',
                'zone_name' => 'America/Costa_Rica',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 128,
                'country_code' => 'CU',
                'zone_name' => 'America/Havana',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 129,
                'country_code' => 'CV',
                'zone_name' => 'Atlantic/Cape_Verde',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 130,
                'country_code' => 'CW',
                'zone_name' => 'America/Curacao',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 131,
                'country_code' => 'CX',
                'zone_name' => 'Indian/Christmas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 132,
                'country_code' => 'CY',
                'zone_name' => 'Asia/Famagusta',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 133,
                'country_code' => 'CY',
                'zone_name' => 'Asia/Nicosia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 134,
                'country_code' => 'CZ',
                'zone_name' => 'Europe/Prague',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 135,
                'country_code' => 'DE',
                'zone_name' => 'Europe/Berlin',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 136,
                'country_code' => 'DE',
                'zone_name' => 'Europe/Busingen',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 137,
                'country_code' => 'DJ',
                'zone_name' => 'Africa/Djibouti',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 138,
                'country_code' => 'DK',
                'zone_name' => 'Europe/Copenhagen',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 139,
                'country_code' => 'DM',
                'zone_name' => 'America/Dominica',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 140,
                'country_code' => 'DO',
                'zone_name' => 'America/Santo_Domingo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 141,
                'country_code' => 'DZ',
                'zone_name' => 'Africa/Algiers',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 142,
                'country_code' => 'EC',
                'zone_name' => 'America/Guayaquil',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 143,
                'country_code' => 'EC',
                'zone_name' => 'Pacific/Galapagos',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 144,
                'country_code' => 'EE',
                'zone_name' => 'Europe/Tallinn',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 145,
                'country_code' => 'EG',
                'zone_name' => 'Africa/Cairo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 146,
                'country_code' => 'EH',
                'zone_name' => 'Africa/El_Aaiun',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 147,
                'country_code' => 'ER',
                'zone_name' => 'Africa/Asmara',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 148,
                'country_code' => 'ES',
                'zone_name' => 'Africa/Ceuta',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 149,
                'country_code' => 'ES',
                'zone_name' => 'Atlantic/Canary',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 150,
                'country_code' => 'ES',
                'zone_name' => 'Europe/Madrid',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 151,
                'country_code' => 'ET',
                'zone_name' => 'Africa/Addis_Ababa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 152,
                'country_code' => 'FI',
                'zone_name' => 'Europe/Helsinki',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 153,
                'country_code' => 'FJ',
                'zone_name' => 'Pacific/Fiji',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 154,
                'country_code' => 'FK',
                'zone_name' => 'Atlantic/Stanley',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 155,
                'country_code' => 'FM',
                'zone_name' => 'Pacific/Chuuk',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 156,
                'country_code' => 'FM',
                'zone_name' => 'Pacific/Kosrae',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 157,
                'country_code' => 'FM',
                'zone_name' => 'Pacific/Pohnpei',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 158,
                'country_code' => 'FO',
                'zone_name' => 'Atlantic/Faroe',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 159,
                'country_code' => 'FR',
                'zone_name' => 'Europe/Paris',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 160,
                'country_code' => 'GA',
                'zone_name' => 'Africa/Libreville',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 161,
                'country_code' => 'GB',
                'zone_name' => 'Europe/London',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 162,
                'country_code' => 'GD',
                'zone_name' => 'America/Grenada',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 163,
                'country_code' => 'GE',
                'zone_name' => 'Asia/Tbilisi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 164,
                'country_code' => 'GF',
                'zone_name' => 'America/Cayenne',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 165,
                'country_code' => 'GG',
                'zone_name' => 'Europe/Guernsey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 166,
                'country_code' => 'GH',
                'zone_name' => 'Africa/Accra',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 167,
                'country_code' => 'GI',
                'zone_name' => 'Europe/Gibraltar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 168,
                'country_code' => 'GL',
                'zone_name' => 'America/Danmarkshavn',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 169,
                'country_code' => 'GL',
                'zone_name' => 'America/Nuuk',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 170,
                'country_code' => 'GL',
                'zone_name' => 'America/Scoresbysund',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 171,
                'country_code' => 'GL',
                'zone_name' => 'America/Thule',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 172,
                'country_code' => 'GM',
                'zone_name' => 'Africa/Banjul',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 173,
                'country_code' => 'GN',
                'zone_name' => 'Africa/Conakry',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 174,
                'country_code' => 'GP',
                'zone_name' => 'America/Guadeloupe',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 175,
                'country_code' => 'GQ',
                'zone_name' => 'Africa/Malabo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 176,
                'country_code' => 'GR',
                'zone_name' => 'Europe/Athens',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 177,
                'country_code' => 'GS',
                'zone_name' => 'Atlantic/South_Georgia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 178,
                'country_code' => 'GT',
                'zone_name' => 'America/Guatemala',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 179,
                'country_code' => 'GU',
                'zone_name' => 'Pacific/Guam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 180,
                'country_code' => 'GW',
                'zone_name' => 'Africa/Bissau',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 181,
                'country_code' => 'GY',
                'zone_name' => 'America/Guyana',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 182,
                'country_code' => 'HK',
                'zone_name' => 'Asia/Hong_Kong',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 183,
                'country_code' => 'HN',
                'zone_name' => 'America/Tegucigalpa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 184,
                'country_code' => 'HR',
                'zone_name' => 'Europe/Zagreb',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 185,
                'country_code' => 'HT',
                'zone_name' => 'America/Port-au-Prince',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 186,
                'country_code' => 'HU',
                'zone_name' => 'Europe/Budapest',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 187,
                'country_code' => 'ID',
                'zone_name' => 'Asia/Jakarta',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 188,
                'country_code' => 'ID',
                'zone_name' => 'Asia/Jayapura',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 189,
                'country_code' => 'ID',
                'zone_name' => 'Asia/Makassar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 190,
                'country_code' => 'ID',
                'zone_name' => 'Asia/Pontianak',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 191,
                'country_code' => 'IE',
                'zone_name' => 'Europe/Dublin',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 192,
                'country_code' => 'IL',
                'zone_name' => 'Asia/Jerusalem',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 193,
                'country_code' => 'IM',
                'zone_name' => 'Europe/Isle_of_Man',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 194,
                'country_code' => 'IN',
                'zone_name' => 'Asia/Kolkata',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 195,
                'country_code' => 'IO',
                'zone_name' => 'Indian/Chagos',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 196,
                'country_code' => 'IQ',
                'zone_name' => 'Asia/Baghdad',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 197,
                'country_code' => 'IR',
                'zone_name' => 'Asia/Tehran',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 198,
                'country_code' => 'IS',
                'zone_name' => 'Atlantic/Reykjavik',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 199,
                'country_code' => 'IT',
                'zone_name' => 'Europe/Rome',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 200,
                'country_code' => 'JE',
                'zone_name' => 'Europe/Jersey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 201,
                'country_code' => 'JM',
                'zone_name' => 'America/Jamaica',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 202,
                'country_code' => 'JO',
                'zone_name' => 'Asia/Amman',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 203,
                'country_code' => 'JP',
                'zone_name' => 'Asia/Tokyo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 204,
                'country_code' => 'KE',
                'zone_name' => 'Africa/Nairobi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 205,
                'country_code' => 'KG',
                'zone_name' => 'Asia/Bishkek',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 206,
                'country_code' => 'KH',
                'zone_name' => 'Asia/Phnom_Penh',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 207,
                'country_code' => 'KI',
                'zone_name' => 'Pacific/Enderbury',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 208,
                'country_code' => 'KI',
                'zone_name' => 'Pacific/Kiritimati',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 209,
                'country_code' => 'KI',
                'zone_name' => 'Pacific/Tarawa',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 210,
                'country_code' => 'KM',
                'zone_name' => 'Indian/Comoro',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 211,
                'country_code' => 'KN',
                'zone_name' => 'America/St_Kitts',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 212,
                'country_code' => 'KP',
                'zone_name' => 'Asia/Pyongyang',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 213,
                'country_code' => 'KR',
                'zone_name' => 'Asia/Seoul',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 214,
                'country_code' => 'KW',
                'zone_name' => 'Asia/Kuwait',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 215,
                'country_code' => 'KY',
                'zone_name' => 'America/Cayman',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 216,
                'country_code' => 'KZ',
                'zone_name' => 'Asia/Almaty',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 217,
                'country_code' => 'KZ',
                'zone_name' => 'Asia/Aqtau',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 218,
                'country_code' => 'KZ',
                'zone_name' => 'Asia/Aqtobe',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 219,
                'country_code' => 'KZ',
                'zone_name' => 'Asia/Atyrau',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 220,
                'country_code' => 'KZ',
                'zone_name' => 'Asia/Oral',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 221,
                'country_code' => 'KZ',
                'zone_name' => 'Asia/Qostanay',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 222,
                'country_code' => 'KZ',
                'zone_name' => 'Asia/Qyzylorda',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 223,
                'country_code' => 'LA',
                'zone_name' => 'Asia/Vientiane',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 224,
                'country_code' => 'LB',
                'zone_name' => 'Asia/Beirut',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 225,
                'country_code' => 'LC',
                'zone_name' => 'America/St_Lucia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 226,
                'country_code' => 'LI',
                'zone_name' => 'Europe/Vaduz',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 227,
                'country_code' => 'LK',
                'zone_name' => 'Asia/Colombo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 228,
                'country_code' => 'LR',
                'zone_name' => 'Africa/Monrovia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 229,
                'country_code' => 'LS',
                'zone_name' => 'Africa/Maseru',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 230,
                'country_code' => 'LT',
                'zone_name' => 'Europe/Vilnius',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 231,
                'country_code' => 'LU',
                'zone_name' => 'Europe/Luxembourg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 232,
                'country_code' => 'LV',
                'zone_name' => 'Europe/Riga',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 233,
                'country_code' => 'LY',
                'zone_name' => 'Africa/Tripoli',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 234,
                'country_code' => 'MA',
                'zone_name' => 'Africa/Casablanca',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 235,
                'country_code' => 'MC',
                'zone_name' => 'Europe/Monaco',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 236,
                'country_code' => 'MD',
                'zone_name' => 'Europe/Chisinau',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 237,
                'country_code' => 'ME',
                'zone_name' => 'Europe/Podgorica',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 238,
                'country_code' => 'MF',
                'zone_name' => 'America/Marigot',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 239,
                'country_code' => 'MG',
                'zone_name' => 'Indian/Antananarivo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 240,
                'country_code' => 'MH',
                'zone_name' => 'Pacific/Kwajalein',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 241,
                'country_code' => 'MH',
                'zone_name' => 'Pacific/Majuro',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 242,
                'country_code' => 'MK',
                'zone_name' => 'Europe/Skopje',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 243,
                'country_code' => 'ML',
                'zone_name' => 'Africa/Bamako',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 244,
                'country_code' => 'MM',
                'zone_name' => 'Asia/Yangon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 245,
                'country_code' => 'MN',
                'zone_name' => 'Asia/Choibalsan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 246,
                'country_code' => 'MN',
                'zone_name' => 'Asia/Hovd',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 247,
                'country_code' => 'MN',
                'zone_name' => 'Asia/Ulaanbaatar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 248,
                'country_code' => 'MO',
                'zone_name' => 'Asia/Macau',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 249,
                'country_code' => 'MP',
                'zone_name' => 'Pacific/Saipan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 250,
                'country_code' => 'MQ',
                'zone_name' => 'America/Martinique',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 251,
                'country_code' => 'MR',
                'zone_name' => 'Africa/Nouakchott',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 252,
                'country_code' => 'MS',
                'zone_name' => 'America/Montserrat',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 253,
                'country_code' => 'MT',
                'zone_name' => 'Europe/Malta',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 254,
                'country_code' => 'MU',
                'zone_name' => 'Indian/Mauritius',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 255,
                'country_code' => 'MV',
                'zone_name' => 'Indian/Maldives',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 256,
                'country_code' => 'MW',
                'zone_name' => 'Africa/Blantyre',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 257,
                'country_code' => 'MX',
                'zone_name' => 'America/Bahia_Banderas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 258,
                'country_code' => 'MX',
                'zone_name' => 'America/Cancun',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 259,
                'country_code' => 'MX',
                'zone_name' => 'America/Chihuahua',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 260,
                'country_code' => 'MX',
                'zone_name' => 'America/Hermosillo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 261,
                'country_code' => 'MX',
                'zone_name' => 'America/Matamoros',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 262,
                'country_code' => 'MX',
                'zone_name' => 'America/Mazatlan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 263,
                'country_code' => 'MX',
                'zone_name' => 'America/Merida',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 264,
                'country_code' => 'MX',
                'zone_name' => 'America/Mexico_City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 265,
                'country_code' => 'MX',
                'zone_name' => 'America/Monterrey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 266,
                'country_code' => 'MX',
                'zone_name' => 'America/Ojinaga',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 267,
                'country_code' => 'MX',
                'zone_name' => 'America/Tijuana',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 268,
                'country_code' => 'MY',
                'zone_name' => 'Asia/Kuala_Lumpur',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 269,
                'country_code' => 'MY',
                'zone_name' => 'Asia/Kuching',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 270,
                'country_code' => 'MZ',
                'zone_name' => 'Africa/Maputo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 271,
                'country_code' => 'NA',
                'zone_name' => 'Africa/Windhoek',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 272,
                'country_code' => 'NC',
                'zone_name' => 'Pacific/Noumea',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 273,
                'country_code' => 'NE',
                'zone_name' => 'Africa/Niamey',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 274,
                'country_code' => 'NF',
                'zone_name' => 'Pacific/Norfolk',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 275,
                'country_code' => 'NG',
                'zone_name' => 'Africa/Lagos',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 276,
                'country_code' => 'NI',
                'zone_name' => 'America/Managua',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 277,
                'country_code' => 'NL',
                'zone_name' => 'Europe/Amsterdam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 278,
                'country_code' => 'NO',
                'zone_name' => 'Europe/Oslo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 279,
                'country_code' => 'NP',
                'zone_name' => 'Asia/Kathmandu',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 280,
                'country_code' => 'NR',
                'zone_name' => 'Pacific/Nauru',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 281,
                'country_code' => 'NU',
                'zone_name' => 'Pacific/Niue',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 282,
                'country_code' => 'NZ',
                'zone_name' => 'Pacific/Auckland',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 283,
                'country_code' => 'NZ',
                'zone_name' => 'Pacific/Chatham',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 284,
                'country_code' => 'OM',
                'zone_name' => 'Asia/Muscat',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 285,
                'country_code' => 'PA',
                'zone_name' => 'America/Panama',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 286,
                'country_code' => 'PE',
                'zone_name' => 'America/Lima',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 287,
                'country_code' => 'PF',
                'zone_name' => 'Pacific/Gambier',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 288,
                'country_code' => 'PF',
                'zone_name' => 'Pacific/Marquesas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 289,
                'country_code' => 'PF',
                'zone_name' => 'Pacific/Tahiti',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 290,
                'country_code' => 'PG',
                'zone_name' => 'Pacific/Bougainville',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 291,
                'country_code' => 'PG',
                'zone_name' => 'Pacific/Port_Moresby',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 292,
                'country_code' => 'PH',
                'zone_name' => 'Asia/Manila',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 293,
                'country_code' => 'PK',
                'zone_name' => 'Asia/Karachi',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 294,
                'country_code' => 'PL',
                'zone_name' => 'Europe/Warsaw',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 295,
                'country_code' => 'PM',
                'zone_name' => 'America/Miquelon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 296,
                'country_code' => 'PN',
                'zone_name' => 'Pacific/Pitcairn',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 297,
                'country_code' => 'PR',
                'zone_name' => 'America/Puerto_Rico',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 298,
                'country_code' => 'PS',
                'zone_name' => 'Asia/Gaza',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 299,
                'country_code' => 'PS',
                'zone_name' => 'Asia/Hebron',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 300,
                'country_code' => 'PT',
                'zone_name' => 'Atlantic/Azores',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 301,
                'country_code' => 'PT',
                'zone_name' => 'Atlantic/Madeira',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 302,
                'country_code' => 'PT',
                'zone_name' => 'Europe/Lisbon',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 303,
                'country_code' => 'PW',
                'zone_name' => 'Pacific/Palau',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 304,
                'country_code' => 'PY',
                'zone_name' => 'America/Asuncion',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 305,
                'country_code' => 'QA',
                'zone_name' => 'Asia/Qatar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 306,
                'country_code' => 'RE',
                'zone_name' => 'Indian/Reunion',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 307,
                'country_code' => 'RO',
                'zone_name' => 'Europe/Bucharest',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 308,
                'country_code' => 'RS',
                'zone_name' => 'Europe/Belgrade',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 309,
                'country_code' => 'RU',
                'zone_name' => 'Asia/Anadyr',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 310,
                'country_code' => 'RU',
                'zone_name' => 'Asia/Barnaul',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 311,
                'country_code' => 'RU',
                'zone_name' => 'Asia/Chita',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 312,
                'country_code' => 'RU',
                'zone_name' => 'Asia/Irkutsk',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 313,
                'country_code' => 'RU',
                'zone_name' => 'Asia/Kamchatka',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 314,
                'country_code' => 'RU',
                'zone_name' => 'Asia/Khandyga',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 315,
                'country_code' => 'RU',
                'zone_name' => 'Asia/Krasnoyarsk',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 316,
                'country_code' => 'RU',
                'zone_name' => 'Asia/Magadan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 317,
                'country_code' => 'RU',
                'zone_name' => 'Asia/Novokuznetsk',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 318,
                'country_code' => 'RU',
                'zone_name' => 'Asia/Novosibirsk',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 319,
                'country_code' => 'RU',
                'zone_name' => 'Asia/Omsk',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 320,
                'country_code' => 'RU',
                'zone_name' => 'Asia/Sakhalin',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 321,
                'country_code' => 'RU',
                'zone_name' => 'Asia/Srednekolymsk',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 322,
                'country_code' => 'RU',
                'zone_name' => 'Asia/Tomsk',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 323,
                'country_code' => 'RU',
                'zone_name' => 'Asia/Ust-Nera',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 324,
                'country_code' => 'RU',
                'zone_name' => 'Asia/Vladivostok',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 325,
                'country_code' => 'RU',
                'zone_name' => 'Asia/Yakutsk',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 326,
                'country_code' => 'RU',
                'zone_name' => 'Asia/Yekaterinburg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 327,
                'country_code' => 'RU',
                'zone_name' => 'Europe/Astrakhan',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 328,
                'country_code' => 'RU',
                'zone_name' => 'Europe/Kaliningrad',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 329,
                'country_code' => 'RU',
                'zone_name' => 'Europe/Kirov',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 330,
                'country_code' => 'RU',
                'zone_name' => 'Europe/Moscow',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 331,
                'country_code' => 'RU',
                'zone_name' => 'Europe/Samara',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 332,
                'country_code' => 'RU',
                'zone_name' => 'Europe/Saratov',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 333,
                'country_code' => 'RU',
                'zone_name' => 'Europe/Ulyanovsk',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 334,
                'country_code' => 'RU',
                'zone_name' => 'Europe/Volgograd',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 335,
                'country_code' => 'RW',
                'zone_name' => 'Africa/Kigali',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 336,
                'country_code' => 'SA',
                'zone_name' => 'Asia/Riyadh',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 337,
                'country_code' => 'SB',
                'zone_name' => 'Pacific/Guadalcanal',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 338,
                'country_code' => 'SC',
                'zone_name' => 'Indian/Mahe',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 339,
                'country_code' => 'SD',
                'zone_name' => 'Africa/Khartoum',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 340,
                'country_code' => 'SE',
                'zone_name' => 'Europe/Stockholm',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 341,
                'country_code' => 'SG',
                'zone_name' => 'Asia/Singapore',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 342,
                'country_code' => 'SH',
                'zone_name' => 'Atlantic/St_Helena',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 343,
                'country_code' => 'SI',
                'zone_name' => 'Europe/Ljubljana',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 344,
                'country_code' => 'SJ',
                'zone_name' => 'Arctic/Longyearbyen',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 345,
                'country_code' => 'SK',
                'zone_name' => 'Europe/Bratislava',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 346,
                'country_code' => 'SL',
                'zone_name' => 'Africa/Freetown',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 347,
                'country_code' => 'SM',
                'zone_name' => 'Europe/San_Marino',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 348,
                'country_code' => 'SN',
                'zone_name' => 'Africa/Dakar',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 349,
                'country_code' => 'SO',
                'zone_name' => 'Africa/Mogadishu',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 350,
                'country_code' => 'SR',
                'zone_name' => 'America/Paramaribo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 351,
                'country_code' => 'SS',
                'zone_name' => 'Africa/Juba',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 352,
                'country_code' => 'ST',
                'zone_name' => 'Africa/Sao_Tome',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 353,
                'country_code' => 'SV',
                'zone_name' => 'America/El_Salvador',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 354,
                'country_code' => 'SX',
                'zone_name' => 'America/Lower_Princes',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 355,
                'country_code' => 'SY',
                'zone_name' => 'Asia/Damascus',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 356,
                'country_code' => 'SZ',
                'zone_name' => 'Africa/Mbabane',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 357,
                'country_code' => 'TC',
                'zone_name' => 'America/Grand_Turk',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 358,
                'country_code' => 'TD',
                'zone_name' => 'Africa/Ndjamena',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 359,
                'country_code' => 'TF',
                'zone_name' => 'Indian/Kerguelen',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 360,
                'country_code' => 'TG',
                'zone_name' => 'Africa/Lome',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 361,
                'country_code' => 'TH',
                'zone_name' => 'Asia/Bangkok',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 362,
                'country_code' => 'TJ',
                'zone_name' => 'Asia/Dushanbe',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 363,
                'country_code' => 'TK',
                'zone_name' => 'Pacific/Fakaofo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 364,
                'country_code' => 'TL',
                'zone_name' => 'Asia/Dili',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 365,
                'country_code' => 'TM',
                'zone_name' => 'Asia/Ashgabat',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 366,
                'country_code' => 'TN',
                'zone_name' => 'Africa/Tunis',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 367,
                'country_code' => 'TO',
                'zone_name' => 'Pacific/Tongatapu',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 368,
                'country_code' => 'TR',
                'zone_name' => 'Europe/Istanbul',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 369,
                'country_code' => 'TT',
                'zone_name' => 'America/Port_of_Spain',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 370,
                'country_code' => 'TV',
                'zone_name' => 'Pacific/Funafuti',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 371,
                'country_code' => 'TW',
                'zone_name' => 'Asia/Taipei',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 372,
                'country_code' => 'TZ',
                'zone_name' => 'Africa/Dar_es_Salaam',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 373,
                'country_code' => 'UA',
                'zone_name' => 'Europe/Kiev',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 374,
                'country_code' => 'UA',
                'zone_name' => 'Europe/Simferopol',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 375,
                'country_code' => 'UA',
                'zone_name' => 'Europe/Uzhgorod',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 376,
                'country_code' => 'UA',
                'zone_name' => 'Europe/Zaporozhye',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 377,
                'country_code' => 'UG',
                'zone_name' => 'Africa/Kampala',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 378,
                'country_code' => 'UM',
                'zone_name' => 'Pacific/Midway',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 379,
                'country_code' => 'UM',
                'zone_name' => 'Pacific/Wake',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 380,
                'country_code' => 'US',
                'zone_name' => 'America/Adak',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 381,
                'country_code' => 'US',
                'zone_name' => 'America/Anchorage',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 382,
                'country_code' => 'US',
                'zone_name' => 'America/Boise',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 383,
                'country_code' => 'US',
                'zone_name' => 'America/Chicago',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 384,
                'country_code' => 'US',
                'zone_name' => 'America/Denver',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 385,
                'country_code' => 'US',
                'zone_name' => 'America/Detroit',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 386,
                'country_code' => 'US',
                'zone_name' => 'America/Indiana/Indianapolis',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 387,
                'country_code' => 'US',
                'zone_name' => 'America/Indiana/Knox',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 388,
                'country_code' => 'US',
                'zone_name' => 'America/Indiana/Marengo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 389,
                'country_code' => 'US',
                'zone_name' => 'America/Indiana/Petersburg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 390,
                'country_code' => 'US',
                'zone_name' => 'America/Indiana/Tell_City',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 391,
                'country_code' => 'US',
                'zone_name' => 'America/Indiana/Vevay',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 392,
                'country_code' => 'US',
                'zone_name' => 'America/Indiana/Vincennes',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 393,
                'country_code' => 'US',
                'zone_name' => 'America/Indiana/Winamac',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 394,
                'country_code' => 'US',
                'zone_name' => 'America/Juneau',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 395,
                'country_code' => 'US',
                'zone_name' => 'America/Kentucky/Louisville',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 396,
                'country_code' => 'US',
                'zone_name' => 'America/Kentucky/Monticello',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 397,
                'country_code' => 'US',
                'zone_name' => 'America/Los_Angeles',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 398,
                'country_code' => 'US',
                'zone_name' => 'America/Menominee',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 399,
                'country_code' => 'US',
                'zone_name' => 'America/Metlakatla',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 400,
                'country_code' => 'US',
                'zone_name' => 'America/New_York',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 401,
                'country_code' => 'US',
                'zone_name' => 'America/Nome',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 402,
                'country_code' => 'US',
                'zone_name' => 'America/North_Dakota/Beulah',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 403,
                'country_code' => 'US',
                'zone_name' => 'America/North_Dakota/Center',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 404,
                'country_code' => 'US',
                'zone_name' => 'America/North_Dakota/New_Salem',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 405,
                'country_code' => 'US',
                'zone_name' => 'America/Phoenix',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 406,
                'country_code' => 'US',
                'zone_name' => 'America/Sitka',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 407,
                'country_code' => 'US',
                'zone_name' => 'America/Yakutat',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 408,
                'country_code' => 'US',
                'zone_name' => 'Pacific/Honolulu',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 409,
                'country_code' => 'UY',
                'zone_name' => 'America/Montevideo',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 410,
                'country_code' => 'UZ',
                'zone_name' => 'Asia/Samarkand',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 411,
                'country_code' => 'UZ',
                'zone_name' => 'Asia/Tashkent',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 412,
                'country_code' => 'VA',
                'zone_name' => 'Europe/Vatican',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 413,
                'country_code' => 'VC',
                'zone_name' => 'America/St_Vincent',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 414,
                'country_code' => 'VE',
                'zone_name' => 'America/Caracas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 415,
                'country_code' => 'VG',
                'zone_name' => 'America/Tortola',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 416,
                'country_code' => 'VI',
                'zone_name' => 'America/St_Thomas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 417,
                'country_code' => 'VN',
                'zone_name' => 'Asia/Ho_Chi_Minh',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 418,
                'country_code' => 'VU',
                'zone_name' => 'Pacific/Efate',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 419,
                'country_code' => 'WF',
                'zone_name' => 'Pacific/Wallis',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 420,
                'country_code' => 'WS',
                'zone_name' => 'Pacific/Apia',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 421,
                'country_code' => 'YE',
                'zone_name' => 'Asia/Aden',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 422,
                'country_code' => 'YT',
                'zone_name' => 'Indian/Mayotte',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 423,
                'country_code' => 'ZA',
                'zone_name' => 'Africa/Johannesburg',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 424,
                'country_code' => 'ZM',
                'zone_name' => 'Africa/Lusaka',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 425,
                'country_code' => 'ZW',
                'zone_name' => 'Africa/Harare',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}