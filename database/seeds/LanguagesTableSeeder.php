<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('languages')->delete();
        
        \DB::table('languages')->insert(array (
            0 => 
            array (
                'id' => 'aa',
                'value' => 'Afar',
            ),
            1 => 
            array (
                'id' => 'ab',
                'value' => 'Abkhazian',
            ),
            2 => 
            array (
                'id' => 'ace',
                'value' => 'Achinese',
            ),
            3 => 
            array (
                'id' => 'ach',
                'value' => 'Acoli',
            ),
            4 => 
            array (
                'id' => 'ada',
                'value' => 'Adangme',
            ),
            5 => 
            array (
                'id' => 'ady',
                'value' => 'Adyghe',
            ),
            6 => 
            array (
                'id' => 'ae',
                'value' => 'Avestan',
            ),
            7 => 
            array (
                'id' => 'aeb',
                'value' => 'Tunisian Arabic',
            ),
            8 => 
            array (
                'id' => 'af',
                'value' => 'Afrikaans',
            ),
            9 => 
            array (
                'id' => 'afh',
                'value' => 'Afrihili',
            ),
            10 => 
            array (
                'id' => 'agq',
                'value' => 'Aghem',
            ),
            11 => 
            array (
                'id' => 'ain',
                'value' => 'Ainu',
            ),
            12 => 
            array (
                'id' => 'ak',
                'value' => 'Akan',
            ),
            13 => 
            array (
                'id' => 'akk',
                'value' => 'Akkadian',
            ),
            14 => 
            array (
                'id' => 'akz',
                'value' => 'Alabama',
            ),
            15 => 
            array (
                'id' => 'ale',
                'value' => 'Aleut',
            ),
            16 => 
            array (
                'id' => 'aln',
                'value' => 'Gheg Albanian',
            ),
            17 => 
            array (
                'id' => 'alt',
                'value' => 'Southern Altai',
            ),
            18 => 
            array (
                'id' => 'am',
                'value' => 'Amarik',
            ),
            19 => 
            array (
                'id' => 'an',
                'value' => 'Aragonese',
            ),
            20 => 
            array (
                'id' => 'ang',
                'value' => 'Old English',
            ),
            21 => 
            array (
                'id' => 'anp',
                'value' => 'Angika',
            ),
            22 => 
            array (
                'id' => 'ar',
                'value' => 'Arabik',
            ),
            23 => 
            array (
                'id' => 'ar_001',
                'value' => 'Modern Standard Arabic',
            ),
            24 => 
            array (
                'id' => 'arc',
                'value' => 'Aramaic',
            ),
            25 => 
            array (
                'id' => 'arn',
                'value' => 'Mapuche',
            ),
            26 => 
            array (
                'id' => 'aro',
                'value' => 'Araona',
            ),
            27 => 
            array (
                'id' => 'arp',
                'value' => 'Arapaho',
            ),
            28 => 
            array (
                'id' => 'arq',
                'value' => 'Algerian Arabic',
            ),
            29 => 
            array (
                'id' => 'arw',
                'value' => 'Arawak',
            ),
            30 => 
            array (
                'id' => 'ary',
                'value' => 'Moroccan Arabic',
            ),
            31 => 
            array (
                'id' => 'arz',
                'value' => 'Egyptian Arabic',
            ),
            32 => 
            array (
                'id' => 'as',
                'value' => 'Assamese',
            ),
            33 => 
            array (
                'id' => 'asa',
                'value' => 'Asu',
            ),
            34 => 
            array (
                'id' => 'ase',
                'value' => 'American Sign Language',
            ),
            35 => 
            array (
                'id' => 'ast',
                'value' => 'Asturian',
            ),
            36 => 
            array (
                'id' => 'av',
                'value' => 'Avaric',
            ),
            37 => 
            array (
                'id' => 'avk',
                'value' => 'Kotava',
            ),
            38 => 
            array (
                'id' => 'awa',
                'value' => 'Awadhi',
            ),
            39 => 
            array (
                'id' => 'ay',
                'value' => 'Aymara',
            ),
            40 => 
            array (
                'id' => 'az',
                'value' => 'Azerbaijani',
            ),
            41 => 
            array (
                'id' => 'azb',
                'value' => 'South Azerbaijani',
            ),
            42 => 
            array (
                'id' => 'ba',
                'value' => 'Bashkir',
            ),
            43 => 
            array (
                'id' => 'bal',
                'value' => 'Baluchi',
            ),
            44 => 
            array (
                'id' => 'ban',
                'value' => 'Balinese',
            ),
            45 => 
            array (
                'id' => 'bar',
                'value' => 'Bavarian',
            ),
            46 => 
            array (
                'id' => 'bas',
                'value' => 'Basaa',
            ),
            47 => 
            array (
                'id' => 'bax',
                'value' => 'Bamun',
            ),
            48 => 
            array (
                'id' => 'bbc',
                'value' => 'Batak Toba',
            ),
            49 => 
            array (
                'id' => 'bbj',
                'value' => 'Ghomala',
            ),
            50 => 
            array (
                'id' => 'be',
                'value' => 'Belarus kasa',
            ),
            51 => 
            array (
                'id' => 'bej',
                'value' => 'Beja',
            ),
            52 => 
            array (
                'id' => 'bem',
                'value' => 'Bemba',
            ),
            53 => 
            array (
                'id' => 'bew',
                'value' => 'Betawi',
            ),
            54 => 
            array (
                'id' => 'bez',
                'value' => 'Bena',
            ),
            55 => 
            array (
                'id' => 'bfd',
                'value' => 'Bafut',
            ),
            56 => 
            array (
                'id' => 'bfq',
                'value' => 'Badaga',
            ),
            57 => 
            array (
                'id' => 'bg',
                'value' => 'Bɔlgeria kasa',
            ),
            58 => 
            array (
                'id' => 'bho',
                'value' => 'Bhojpuri',
            ),
            59 => 
            array (
                'id' => 'bi',
                'value' => 'Bislama',
            ),
            60 => 
            array (
                'id' => 'bik',
                'value' => 'Bikol',
            ),
            61 => 
            array (
                'id' => 'bin',
                'value' => 'Bini',
            ),
            62 => 
            array (
                'id' => 'bjn',
                'value' => 'Banjar',
            ),
            63 => 
            array (
                'id' => 'bkm',
                'value' => 'Kom',
            ),
            64 => 
            array (
                'id' => 'bla',
                'value' => 'Siksika',
            ),
            65 => 
            array (
                'id' => 'bm',
                'value' => 'Bambara',
            ),
            66 => 
            array (
                'id' => 'bn',
                'value' => 'Bengali kasa',
            ),
            67 => 
            array (
                'id' => 'bo',
                'value' => 'Tibetan',
            ),
            68 => 
            array (
                'id' => 'bpy',
                'value' => 'Bishnupriya',
            ),
            69 => 
            array (
                'id' => 'bqi',
                'value' => 'Bakhtiari',
            ),
            70 => 
            array (
                'id' => 'br',
                'value' => 'Breton',
            ),
            71 => 
            array (
                'id' => 'bra',
                'value' => 'Braj',
            ),
            72 => 
            array (
                'id' => 'brh',
                'value' => 'Brahui',
            ),
            73 => 
            array (
                'id' => 'brx',
                'value' => 'Bodo',
            ),
            74 => 
            array (
                'id' => 'bs',
                'value' => 'Bosnian',
            ),
            75 => 
            array (
                'id' => 'bss',
                'value' => 'Akoose',
            ),
            76 => 
            array (
                'id' => 'bua',
                'value' => 'Buriat',
            ),
            77 => 
            array (
                'id' => 'bug',
                'value' => 'Buginese',
            ),
            78 => 
            array (
                'id' => 'bum',
                'value' => 'Bulu',
            ),
            79 => 
            array (
                'id' => 'byn',
                'value' => 'Blin',
            ),
            80 => 
            array (
                'id' => 'byv',
                'value' => 'Medumba',
            ),
            81 => 
            array (
                'id' => 'ca',
                'value' => 'Catalan',
            ),
            82 => 
            array (
                'id' => 'cad',
                'value' => 'Caddo',
            ),
            83 => 
            array (
                'id' => 'car',
                'value' => 'Carib',
            ),
            84 => 
            array (
                'id' => 'cay',
                'value' => 'Cayuga',
            ),
            85 => 
            array (
                'id' => 'cch',
                'value' => 'Atsam',
            ),
            86 => 
            array (
                'id' => 'ce',
                'value' => 'Chechen',
            ),
            87 => 
            array (
                'id' => 'ceb',
                'value' => 'Cebuano',
            ),
            88 => 
            array (
                'id' => 'cgg',
                'value' => 'Chiga',
            ),
            89 => 
            array (
                'id' => 'ch',
                'value' => 'Chamorro',
            ),
            90 => 
            array (
                'id' => 'chb',
                'value' => 'Chibcha',
            ),
            91 => 
            array (
                'id' => 'chg',
                'value' => 'Chagatai',
            ),
            92 => 
            array (
                'id' => 'chk',
                'value' => 'Chuukese',
            ),
            93 => 
            array (
                'id' => 'chm',
                'value' => 'Mari',
            ),
            94 => 
            array (
                'id' => 'chn',
                'value' => 'Chinook Jargon',
            ),
            95 => 
            array (
                'id' => 'cho',
                'value' => 'Choctaw',
            ),
            96 => 
            array (
                'id' => 'chp',
                'value' => 'Chipewyan',
            ),
            97 => 
            array (
                'id' => 'chr',
                'value' => 'Cherokee',
            ),
            98 => 
            array (
                'id' => 'chy',
                'value' => 'Cheyenne',
            ),
            99 => 
            array (
                'id' => 'ckb',
                'value' => 'Central Kurdish',
            ),
            100 => 
            array (
                'id' => 'co',
                'value' => 'Corsican',
            ),
            101 => 
            array (
                'id' => 'cop',
                'value' => 'Coptic',
            ),
            102 => 
            array (
                'id' => 'cps',
                'value' => 'Capiznon',
            ),
            103 => 
            array (
                'id' => 'cr',
                'value' => 'Cree',
            ),
            104 => 
            array (
                'id' => 'crh',
                'value' => 'Crimean Turkish',
            ),
            105 => 
            array (
                'id' => 'cs',
                'value' => 'Kyɛk kasa',
            ),
            106 => 
            array (
                'id' => 'csb',
                'value' => 'Kashubian',
            ),
            107 => 
            array (
                'id' => 'cu',
                'value' => 'Church Slavic',
            ),
            108 => 
            array (
                'id' => 'cv',
                'value' => 'Chuvash',
            ),
            109 => 
            array (
                'id' => 'cy',
                'value' => 'Welsh',
            ),
            110 => 
            array (
                'id' => 'da',
                'value' => 'Danish',
            ),
            111 => 
            array (
                'id' => 'dak',
                'value' => 'Dakota',
            ),
            112 => 
            array (
                'id' => 'dar',
                'value' => 'Dargwa',
            ),
            113 => 
            array (
                'id' => 'dav',
                'value' => 'Taita',
            ),
            114 => 
            array (
                'id' => 'de',
                'value' => 'Gyaaman',
            ),
            115 => 
            array (
                'id' => 'de_AT',
                'value' => 'Austrian German',
            ),
            116 => 
            array (
                'id' => 'de_CH',
                'value' => 'Swiss High German',
            ),
            117 => 
            array (
                'id' => 'del',
                'value' => 'Delaware',
            ),
            118 => 
            array (
                'id' => 'den',
                'value' => 'Slave',
            ),
            119 => 
            array (
                'id' => 'dgr',
                'value' => 'Dogrib',
            ),
            120 => 
            array (
                'id' => 'din',
                'value' => 'Dinka',
            ),
            121 => 
            array (
                'id' => 'dje',
                'value' => 'Zarma',
            ),
            122 => 
            array (
                'id' => 'doi',
                'value' => 'Dogri',
            ),
            123 => 
            array (
                'id' => 'dsb',
                'value' => 'Lower Sorbian',
            ),
            124 => 
            array (
                'id' => 'dtp',
                'value' => 'Central Dusun',
            ),
            125 => 
            array (
                'id' => 'dua',
                'value' => 'Duala',
            ),
            126 => 
            array (
                'id' => 'dum',
                'value' => 'Middle Dutch',
            ),
            127 => 
            array (
                'id' => 'dv',
                'value' => 'Divehi',
            ),
            128 => 
            array (
                'id' => 'dyo',
                'value' => 'Jola-Fonyi',
            ),
            129 => 
            array (
                'id' => 'dyu',
                'value' => 'Dyula',
            ),
            130 => 
            array (
                'id' => 'dz',
                'value' => 'Dzongkha',
            ),
            131 => 
            array (
                'id' => 'dzg',
                'value' => 'Dazaga',
            ),
            132 => 
            array (
                'id' => 'ebu',
                'value' => 'Embu',
            ),
            133 => 
            array (
                'id' => 'ee',
                'value' => 'Ewe',
            ),
            134 => 
            array (
                'id' => 'efi',
                'value' => 'Efik',
            ),
            135 => 
            array (
                'id' => 'egl',
                'value' => 'Emilian',
            ),
            136 => 
            array (
                'id' => 'egy',
                'value' => 'Ancient Egyptian',
            ),
            137 => 
            array (
                'id' => 'eka',
                'value' => 'Ekajuk',
            ),
            138 => 
            array (
                'id' => 'el',
                'value' => 'Greek kasa',
            ),
            139 => 
            array (
                'id' => 'elx',
                'value' => 'Elamite',
            ),
            140 => 
            array (
                'id' => 'en',
                'value' => 'Borɔfo',
            ),
            141 => 
            array (
                'id' => 'en_AU',
                'value' => 'Australian English',
            ),
            142 => 
            array (
                'id' => 'en_CA',
                'value' => 'Canadian English',
            ),
            143 => 
            array (
                'id' => 'en_GB',
                'value' => 'British English',
            ),
            144 => 
            array (
                'id' => 'en_US',
                'value' => 'American English',
            ),
            145 => 
            array (
                'id' => 'enm',
                'value' => 'Middle English',
            ),
            146 => 
            array (
                'id' => 'eo',
                'value' => 'Esperanto',
            ),
            147 => 
            array (
                'id' => 'es',
                'value' => 'Spain kasa',
            ),
            148 => 
            array (
                'id' => 'es_419',
                'value' => 'Latin American Spanish',
            ),
            149 => 
            array (
                'id' => 'es_ES',
                'value' => 'European Spanish',
            ),
            150 => 
            array (
                'id' => 'es_MX',
                'value' => 'Mexican Spanish',
            ),
            151 => 
            array (
                'id' => 'esu',
                'value' => 'Central Yupik',
            ),
            152 => 
            array (
                'id' => 'et',
                'value' => 'Estonian',
            ),
            153 => 
            array (
                'id' => 'eu',
                'value' => 'Basque',
            ),
            154 => 
            array (
                'id' => 'ewo',
                'value' => 'Ewondo',
            ),
            155 => 
            array (
                'id' => 'ext',
                'value' => 'Extremaduran',
            ),
            156 => 
            array (
                'id' => 'fa',
                'value' => 'Pɛɛhyia kasa',
            ),
            157 => 
            array (
                'id' => 'fan',
                'value' => 'Fang',
            ),
            158 => 
            array (
                'id' => 'fat',
                'value' => 'Fanti',
            ),
            159 => 
            array (
                'id' => 'ff',
                'value' => 'Fulah',
            ),
            160 => 
            array (
                'id' => 'fi',
                'value' => 'Finnish',
            ),
            161 => 
            array (
                'id' => 'fil',
                'value' => 'Filipino',
            ),
            162 => 
            array (
                'id' => 'fit',
                'value' => 'Tornedalen Finnish',
            ),
            163 => 
            array (
                'id' => 'fj',
                'value' => 'Fijian',
            ),
            164 => 
            array (
                'id' => 'fo',
                'value' => 'Faroese',
            ),
            165 => 
            array (
                'id' => 'fon',
                'value' => 'Fon',
            ),
            166 => 
            array (
                'id' => 'fr',
                'value' => 'Frɛnkye',
            ),
            167 => 
            array (
                'id' => 'fr_CA',
                'value' => 'Canadian French',
            ),
            168 => 
            array (
                'id' => 'fr_CH',
                'value' => 'Swiss French',
            ),
            169 => 
            array (
                'id' => 'frc',
                'value' => 'Cajun French',
            ),
            170 => 
            array (
                'id' => 'frm',
                'value' => 'Middle French',
            ),
            171 => 
            array (
                'id' => 'fro',
                'value' => 'Old French',
            ),
            172 => 
            array (
                'id' => 'frp',
                'value' => 'Arpitan',
            ),
            173 => 
            array (
                'id' => 'frr',
                'value' => 'Northern Frisian',
            ),
            174 => 
            array (
                'id' => 'frs',
                'value' => 'Eastern Frisian',
            ),
            175 => 
            array (
                'id' => 'fur',
                'value' => 'Friulian',
            ),
            176 => 
            array (
                'id' => 'fy',
                'value' => 'Western Frisian',
            ),
            177 => 
            array (
                'id' => 'ga',
                'value' => 'Irish',
            ),
            178 => 
            array (
                'id' => 'gaa',
                'value' => 'Ga',
            ),
            179 => 
            array (
                'id' => 'gag',
                'value' => 'Gagauz',
            ),
            180 => 
            array (
                'id' => 'gan',
                'value' => 'Gan Chinese',
            ),
            181 => 
            array (
                'id' => 'gay',
                'value' => 'Gayo',
            ),
            182 => 
            array (
                'id' => 'gba',
                'value' => 'Gbaya',
            ),
            183 => 
            array (
                'id' => 'gbz',
                'value' => 'Zoroastrian Dari',
            ),
            184 => 
            array (
                'id' => 'gd',
                'value' => 'Scottish Gaelic',
            ),
            185 => 
            array (
                'id' => 'gez',
                'value' => 'Geez',
            ),
            186 => 
            array (
                'id' => 'gil',
                'value' => 'Gilbertese',
            ),
            187 => 
            array (
                'id' => 'gl',
                'value' => 'Galician',
            ),
            188 => 
            array (
                'id' => 'glk',
                'value' => 'Gilaki',
            ),
            189 => 
            array (
                'id' => 'gmh',
                'value' => 'Middle High German',
            ),
            190 => 
            array (
                'id' => 'gn',
                'value' => 'Guarani',
            ),
            191 => 
            array (
                'id' => 'goh',
                'value' => 'Old High German',
            ),
            192 => 
            array (
                'id' => 'gom',
                'value' => 'Goan Konkani',
            ),
            193 => 
            array (
                'id' => 'gon',
                'value' => 'Gondi',
            ),
            194 => 
            array (
                'id' => 'gor',
                'value' => 'Gorontalo',
            ),
            195 => 
            array (
                'id' => 'got',
                'value' => 'Gothic',
            ),
            196 => 
            array (
                'id' => 'grb',
                'value' => 'Grebo',
            ),
            197 => 
            array (
                'id' => 'grc',
                'value' => 'Ancient Greek',
            ),
            198 => 
            array (
                'id' => 'gsw',
                'value' => 'Swiss German',
            ),
            199 => 
            array (
                'id' => 'gu',
                'value' => 'Gujarati',
            ),
            200 => 
            array (
                'id' => 'guc',
                'value' => 'Wayuu',
            ),
            201 => 
            array (
                'id' => 'gur',
                'value' => 'Frafra',
            ),
            202 => 
            array (
                'id' => 'guz',
                'value' => 'Gusii',
            ),
            203 => 
            array (
                'id' => 'gv',
                'value' => 'Manx',
            ),
            204 => 
            array (
                'id' => 'gwi',
                'value' => 'Gwichʼin',
            ),
            205 => 
            array (
                'id' => 'ha',
                'value' => 'Hausa',
            ),
            206 => 
            array (
                'id' => 'hai',
                'value' => 'Haida',
            ),
            207 => 
            array (
                'id' => 'hak',
                'value' => 'Hakka Chinese',
            ),
            208 => 
            array (
                'id' => 'haw',
                'value' => 'Hawaiian',
            ),
            209 => 
            array (
                'id' => 'he',
                'value' => 'Hebrew',
            ),
            210 => 
            array (
                'id' => 'hi',
                'value' => 'Hindi',
            ),
            211 => 
            array (
                'id' => 'hif',
                'value' => 'Fiji Hindi',
            ),
            212 => 
            array (
                'id' => 'hil',
                'value' => 'Hiligaynon',
            ),
            213 => 
            array (
                'id' => 'hit',
                'value' => 'Hittite',
            ),
            214 => 
            array (
                'id' => 'hmn',
                'value' => 'Hmong',
            ),
            215 => 
            array (
                'id' => 'ho',
                'value' => 'Hiri Motu',
            ),
            216 => 
            array (
                'id' => 'hr',
                'value' => 'Croatian',
            ),
            217 => 
            array (
                'id' => 'hsb',
                'value' => 'Upper Sorbian',
            ),
            218 => 
            array (
                'id' => 'hsn',
                'value' => 'Xiang Chinese',
            ),
            219 => 
            array (
                'id' => 'ht',
                'value' => 'Haitian',
            ),
            220 => 
            array (
                'id' => 'hu',
                'value' => 'Hangri kasa',
            ),
            221 => 
            array (
                'id' => 'hup',
                'value' => 'Hupa',
            ),
            222 => 
            array (
                'id' => 'hy',
                'value' => 'Armenian',
            ),
            223 => 
            array (
                'id' => 'hz',
                'value' => 'Herero',
            ),
            224 => 
            array (
                'id' => 'ia',
                'value' => 'Interlingua',
            ),
            225 => 
            array (
                'id' => 'iba',
                'value' => 'Iban',
            ),
            226 => 
            array (
                'id' => 'ibb',
                'value' => 'Ibibio',
            ),
            227 => 
            array (
                'id' => 'id',
                'value' => 'Indonihyia kasa',
            ),
            228 => 
            array (
                'id' => 'ie',
                'value' => 'Interlingue',
            ),
            229 => 
            array (
                'id' => 'ig',
                'value' => 'Igbo',
            ),
            230 => 
            array (
                'id' => 'ii',
                'value' => 'Sichuan Yi',
            ),
            231 => 
            array (
                'id' => 'ik',
                'value' => 'Inupiaq',
            ),
            232 => 
            array (
                'id' => 'ilo',
                'value' => 'Iloko',
            ),
            233 => 
            array (
                'id' => 'inh',
                'value' => 'Ingush',
            ),
            234 => 
            array (
                'id' => 'io',
                'value' => 'Ido',
            ),
            235 => 
            array (
                'id' => 'is',
                'value' => 'Icelandic',
            ),
            236 => 
            array (
                'id' => 'it',
                'value' => 'Italy kasa',
            ),
            237 => 
            array (
                'id' => 'iu',
                'value' => 'Inuktitut',
            ),
            238 => 
            array (
                'id' => 'izh',
                'value' => 'Ingrian',
            ),
            239 => 
            array (
                'id' => 'ja',
                'value' => 'Gyapan kasa',
            ),
            240 => 
            array (
                'id' => 'jam',
                'value' => 'Jamaican Creole English',
            ),
            241 => 
            array (
                'id' => 'jbo',
                'value' => 'Lojban',
            ),
            242 => 
            array (
                'id' => 'jgo',
                'value' => 'Ngomba',
            ),
            243 => 
            array (
                'id' => 'jmc',
                'value' => 'Machame',
            ),
            244 => 
            array (
                'id' => 'jpr',
                'value' => 'Judeo-Persian',
            ),
            245 => 
            array (
                'id' => 'jrb',
                'value' => 'Judeo-Arabic',
            ),
            246 => 
            array (
                'id' => 'jut',
                'value' => 'Jutish',
            ),
            247 => 
            array (
                'id' => 'jv',
                'value' => 'Gyabanis kasa',
            ),
            248 => 
            array (
                'id' => 'ka',
                'value' => 'Georgian',
            ),
            249 => 
            array (
                'id' => 'kaa',
                'value' => 'Kara-Kalpak',
            ),
            250 => 
            array (
                'id' => 'kab',
                'value' => 'Kabyle',
            ),
            251 => 
            array (
                'id' => 'kac',
                'value' => 'Kachin',
            ),
            252 => 
            array (
                'id' => 'kaj',
                'value' => 'Jju',
            ),
            253 => 
            array (
                'id' => 'kam',
                'value' => 'Kamba',
            ),
            254 => 
            array (
                'id' => 'kaw',
                'value' => 'Kawi',
            ),
            255 => 
            array (
                'id' => 'kbd',
                'value' => 'Kabardian',
            ),
            256 => 
            array (
                'id' => 'kbl',
                'value' => 'Kanembu',
            ),
            257 => 
            array (
                'id' => 'kcg',
                'value' => 'Tyap',
            ),
            258 => 
            array (
                'id' => 'kde',
                'value' => 'Makonde',
            ),
            259 => 
            array (
                'id' => 'kea',
                'value' => 'Kabuverdianu',
            ),
            260 => 
            array (
                'id' => 'ken',
                'value' => 'Kenyang',
            ),
            261 => 
            array (
                'id' => 'kfo',
                'value' => 'Koro',
            ),
            262 => 
            array (
                'id' => 'kg',
                'value' => 'Kongo',
            ),
            263 => 
            array (
                'id' => 'kgp',
                'value' => 'Kaingang',
            ),
            264 => 
            array (
                'id' => 'kha',
                'value' => 'Khasi',
            ),
            265 => 
            array (
                'id' => 'kho',
                'value' => 'Khotanese',
            ),
            266 => 
            array (
                'id' => 'khq',
                'value' => 'Koyra Chiini',
            ),
            267 => 
            array (
                'id' => 'khw',
                'value' => 'Khowar',
            ),
            268 => 
            array (
                'id' => 'ki',
                'value' => 'Kikuyu',
            ),
            269 => 
            array (
                'id' => 'kiu',
                'value' => 'Kirmanjki',
            ),
            270 => 
            array (
                'id' => 'kj',
                'value' => 'Kuanyama',
            ),
            271 => 
            array (
                'id' => 'kk',
                'value' => 'Kazakh',
            ),
            272 => 
            array (
                'id' => 'kkj',
                'value' => 'Kako',
            ),
            273 => 
            array (
                'id' => 'kl',
                'value' => 'Kalaallisut',
            ),
            274 => 
            array (
                'id' => 'kln',
                'value' => 'Kalenjin',
            ),
            275 => 
            array (
                'id' => 'km',
                'value' => 'Kambodia kasa',
            ),
            276 => 
            array (
                'id' => 'kmb',
                'value' => 'Kimbundu',
            ),
            277 => 
            array (
                'id' => 'kn',
                'value' => 'Kannada',
            ),
            278 => 
            array (
                'id' => 'ko',
                'value' => 'Korea kasa',
            ),
            279 => 
            array (
                'id' => 'koi',
                'value' => 'Komi-Permyak',
            ),
            280 => 
            array (
                'id' => 'kok',
                'value' => 'Konkani',
            ),
            281 => 
            array (
                'id' => 'kos',
                'value' => 'Kosraean',
            ),
            282 => 
            array (
                'id' => 'kpe',
                'value' => 'Kpelle',
            ),
            283 => 
            array (
                'id' => 'kr',
                'value' => 'Kanuri',
            ),
            284 => 
            array (
                'id' => 'krc',
                'value' => 'Karachay-Balkar',
            ),
            285 => 
            array (
                'id' => 'kri',
                'value' => 'Krio',
            ),
            286 => 
            array (
                'id' => 'krj',
                'value' => 'Kinaray-a',
            ),
            287 => 
            array (
                'id' => 'krl',
                'value' => 'Karelian',
            ),
            288 => 
            array (
                'id' => 'kru',
                'value' => 'Kurukh',
            ),
            289 => 
            array (
                'id' => 'ks',
                'value' => 'Kashmiri',
            ),
            290 => 
            array (
                'id' => 'ksb',
                'value' => 'Shambala',
            ),
            291 => 
            array (
                'id' => 'ksf',
                'value' => 'Bafia',
            ),
            292 => 
            array (
                'id' => 'ksh',
                'value' => 'Colognian',
            ),
            293 => 
            array (
                'id' => 'ku',
                'value' => 'Kurdish',
            ),
            294 => 
            array (
                'id' => 'kum',
                'value' => 'Kumyk',
            ),
            295 => 
            array (
                'id' => 'kut',
                'value' => 'Kutenai',
            ),
            296 => 
            array (
                'id' => 'kv',
                'value' => 'Komi',
            ),
            297 => 
            array (
                'id' => 'kw',
                'value' => 'Cornish',
            ),
            298 => 
            array (
                'id' => 'ky',
                'value' => 'Kyrgyz',
            ),
            299 => 
            array (
                'id' => 'la',
                'value' => 'Latin',
            ),
            300 => 
            array (
                'id' => 'lad',
                'value' => 'Ladino',
            ),
            301 => 
            array (
                'id' => 'lag',
                'value' => 'Langi',
            ),
            302 => 
            array (
                'id' => 'lah',
                'value' => 'Lahnda',
            ),
            303 => 
            array (
                'id' => 'lam',
                'value' => 'Lamba',
            ),
            304 => 
            array (
                'id' => 'lb',
                'value' => 'Luxembourgish',
            ),
            305 => 
            array (
                'id' => 'lez',
                'value' => 'Lezghian',
            ),
            306 => 
            array (
                'id' => 'lfn',
                'value' => 'Lingua Franca Nova',
            ),
            307 => 
            array (
                'id' => 'lg',
                'value' => 'Ganda',
            ),
            308 => 
            array (
                'id' => 'li',
                'value' => 'Limburgish',
            ),
            309 => 
            array (
                'id' => 'lij',
                'value' => 'Ligurian',
            ),
            310 => 
            array (
                'id' => 'liv',
                'value' => 'Livonian',
            ),
            311 => 
            array (
                'id' => 'lkt',
                'value' => 'Lakota',
            ),
            312 => 
            array (
                'id' => 'lmo',
                'value' => 'Lombard',
            ),
            313 => 
            array (
                'id' => 'ln',
                'value' => 'Lingala',
            ),
            314 => 
            array (
                'id' => 'lo',
                'value' => 'Lao',
            ),
            315 => 
            array (
                'id' => 'lol',
                'value' => 'Mongo',
            ),
            316 => 
            array (
                'id' => 'loz',
                'value' => 'Lozi',
            ),
            317 => 
            array (
                'id' => 'lt',
                'value' => 'Lithuanian',
            ),
            318 => 
            array (
                'id' => 'ltg',
                'value' => 'Latgalian',
            ),
            319 => 
            array (
                'id' => 'lu',
                'value' => 'Luba-Katanga',
            ),
            320 => 
            array (
                'id' => 'lua',
                'value' => 'Luba-Lulua',
            ),
            321 => 
            array (
                'id' => 'lui',
                'value' => 'Luiseno',
            ),
            322 => 
            array (
                'id' => 'lun',
                'value' => 'Lunda',
            ),
            323 => 
            array (
                'id' => 'luo',
                'value' => 'Luo',
            ),
            324 => 
            array (
                'id' => 'lus',
                'value' => 'Mizo',
            ),
            325 => 
            array (
                'id' => 'luy',
                'value' => 'Luyia',
            ),
            326 => 
            array (
                'id' => 'lv',
                'value' => 'Latvian',
            ),
            327 => 
            array (
                'id' => 'lzh',
                'value' => 'Literary Chinese',
            ),
            328 => 
            array (
                'id' => 'lzz',
                'value' => 'Laz',
            ),
            329 => 
            array (
                'id' => 'mad',
                'value' => 'Madurese',
            ),
            330 => 
            array (
                'id' => 'maf',
                'value' => 'Mafa',
            ),
            331 => 
            array (
                'id' => 'mag',
                'value' => 'Magahi',
            ),
            332 => 
            array (
                'id' => 'mai',
                'value' => 'Maithili',
            ),
            333 => 
            array (
                'id' => 'mak',
                'value' => 'Makasar',
            ),
            334 => 
            array (
                'id' => 'man',
                'value' => 'Mandingo',
            ),
            335 => 
            array (
                'id' => 'mas',
                'value' => 'Masai',
            ),
            336 => 
            array (
                'id' => 'mde',
                'value' => 'Maba',
            ),
            337 => 
            array (
                'id' => 'mdf',
                'value' => 'Moksha',
            ),
            338 => 
            array (
                'id' => 'mdr',
                'value' => 'Mandar',
            ),
            339 => 
            array (
                'id' => 'men',
                'value' => 'Mende',
            ),
            340 => 
            array (
                'id' => 'mer',
                'value' => 'Meru',
            ),
            341 => 
            array (
                'id' => 'mfe',
                'value' => 'Morisyen',
            ),
            342 => 
            array (
                'id' => 'mg',
                'value' => 'Malagasy',
            ),
            343 => 
            array (
                'id' => 'mga',
                'value' => 'Middle Irish',
            ),
            344 => 
            array (
                'id' => 'mgh',
                'value' => 'Makhuwa-Meetto',
            ),
            345 => 
            array (
                'id' => 'mgo',
                'value' => 'Metaʼ',
            ),
            346 => 
            array (
                'id' => 'mh',
                'value' => 'Marshallese',
            ),
            347 => 
            array (
                'id' => 'mi',
                'value' => 'Maori',
            ),
            348 => 
            array (
                'id' => 'mic',
                'value' => 'Micmac',
            ),
            349 => 
            array (
                'id' => 'min',
                'value' => 'Minangkabau',
            ),
            350 => 
            array (
                'id' => 'mk',
                'value' => 'Macedonian',
            ),
            351 => 
            array (
                'id' => 'ml',
                'value' => 'Malayalam',
            ),
            352 => 
            array (
                'id' => 'mn',
                'value' => 'Mongolian',
            ),
            353 => 
            array (
                'id' => 'mnc',
                'value' => 'Manchu',
            ),
            354 => 
            array (
                'id' => 'mni',
                'value' => 'Manipuri',
            ),
            355 => 
            array (
                'id' => 'moh',
                'value' => 'Mohawk',
            ),
            356 => 
            array (
                'id' => 'mos',
                'value' => 'Mossi',
            ),
            357 => 
            array (
                'id' => 'mr',
                'value' => 'Marathi',
            ),
            358 => 
            array (
                'id' => 'mrj',
                'value' => 'Western Mari',
            ),
            359 => 
            array (
                'id' => 'ms',
                'value' => 'Malay kasa',
            ),
            360 => 
            array (
                'id' => 'mt',
                'value' => 'Maltese',
            ),
            361 => 
            array (
                'id' => 'mua',
                'value' => 'Mundang',
            ),
            362 => 
            array (
                'id' => 'mul',
                'value' => 'Multiple Languages',
            ),
            363 => 
            array (
                'id' => 'mus',
                'value' => 'Creek',
            ),
            364 => 
            array (
                'id' => 'mwl',
                'value' => 'Mirandese',
            ),
            365 => 
            array (
                'id' => 'mwr',
                'value' => 'Marwari',
            ),
            366 => 
            array (
                'id' => 'mwv',
                'value' => 'Mentawai',
            ),
            367 => 
            array (
                'id' => 'my',
                'value' => 'Bɛɛmis kasa',
            ),
            368 => 
            array (
                'id' => 'mye',
                'value' => 'Myene',
            ),
            369 => 
            array (
                'id' => 'myv',
                'value' => 'Erzya',
            ),
            370 => 
            array (
                'id' => 'mzn',
                'value' => 'Mazanderani',
            ),
            371 => 
            array (
                'id' => 'na',
                'value' => 'Nauru',
            ),
            372 => 
            array (
                'id' => 'nan',
                'value' => 'Min Nan Chinese',
            ),
            373 => 
            array (
                'id' => 'nap',
                'value' => 'Neapolitan',
            ),
            374 => 
            array (
                'id' => 'naq',
                'value' => 'Nama',
            ),
            375 => 
            array (
                'id' => 'nb',
                'value' => 'Norwegian Bokmål',
            ),
            376 => 
            array (
                'id' => 'nd',
                'value' => 'North Ndebele',
            ),
            377 => 
            array (
                'id' => 'nds',
                'value' => 'Low German',
            ),
            378 => 
            array (
                'id' => 'ne',
                'value' => 'Nɛpal kasa',
            ),
            379 => 
            array (
                'id' => 'new',
                'value' => 'Newari',
            ),
            380 => 
            array (
                'id' => 'ng',
                'value' => 'Ndonga',
            ),
            381 => 
            array (
                'id' => 'nia',
                'value' => 'Nias',
            ),
            382 => 
            array (
                'id' => 'niu',
                'value' => 'Niuean',
            ),
            383 => 
            array (
                'id' => 'njo',
                'value' => 'Ao Naga',
            ),
            384 => 
            array (
                'id' => 'nl',
                'value' => 'Dɛɛkye',
            ),
            385 => 
            array (
                'id' => 'nl_BE',
                'value' => 'Flemish',
            ),
            386 => 
            array (
                'id' => 'nmg',
                'value' => 'Kwasio',
            ),
            387 => 
            array (
                'id' => 'nn',
                'value' => 'Norwegian Nynorsk',
            ),
            388 => 
            array (
                'id' => 'nnh',
                'value' => 'Ngiemboon',
            ),
            389 => 
            array (
                'id' => 'no',
                'value' => 'Norwegian',
            ),
            390 => 
            array (
                'id' => 'nog',
                'value' => 'Nogai',
            ),
            391 => 
            array (
                'id' => 'non',
                'value' => 'Old Norse',
            ),
            392 => 
            array (
                'id' => 'nov',
                'value' => 'Novial',
            ),
            393 => 
            array (
                'id' => 'nqo',
                'value' => 'NʼKo',
            ),
            394 => 
            array (
                'id' => 'nr',
                'value' => 'South Ndebele',
            ),
            395 => 
            array (
                'id' => 'nso',
                'value' => 'Northern Sotho',
            ),
            396 => 
            array (
                'id' => 'nus',
                'value' => 'Nuer',
            ),
            397 => 
            array (
                'id' => 'nv',
                'value' => 'Navajo',
            ),
            398 => 
            array (
                'id' => 'nwc',
                'value' => 'Classical Newari',
            ),
            399 => 
            array (
                'id' => 'ny',
                'value' => 'Nyanja',
            ),
            400 => 
            array (
                'id' => 'nym',
                'value' => 'Nyamwezi',
            ),
            401 => 
            array (
                'id' => 'nyn',
                'value' => 'Nyankole',
            ),
            402 => 
            array (
                'id' => 'nyo',
                'value' => 'Nyoro',
            ),
            403 => 
            array (
                'id' => 'nzi',
                'value' => 'Nzima',
            ),
            404 => 
            array (
                'id' => 'oc',
                'value' => 'Occitan',
            ),
            405 => 
            array (
                'id' => 'oj',
                'value' => 'Ojibwa',
            ),
            406 => 
            array (
                'id' => 'om',
                'value' => 'Oromo',
            ),
            407 => 
            array (
                'id' => 'or',
                'value' => 'Oriya',
            ),
            408 => 
            array (
                'id' => 'os',
                'value' => 'Ossetic',
            ),
            409 => 
            array (
                'id' => 'osa',
                'value' => 'Osage',
            ),
            410 => 
            array (
                'id' => 'ota',
                'value' => 'Ottoman Turkish',
            ),
            411 => 
            array (
                'id' => 'pa',
                'value' => 'Pungyabi kasa',
            ),
            412 => 
            array (
                'id' => 'pag',
                'value' => 'Pangasinan',
            ),
            413 => 
            array (
                'id' => 'pal',
                'value' => 'Pahlavi',
            ),
            414 => 
            array (
                'id' => 'pam',
                'value' => 'Pampanga',
            ),
            415 => 
            array (
                'id' => 'pap',
                'value' => 'Papiamento',
            ),
            416 => 
            array (
                'id' => 'pau',
                'value' => 'Palauan',
            ),
            417 => 
            array (
                'id' => 'pcd',
                'value' => 'Picard',
            ),
            418 => 
            array (
                'id' => 'pdc',
                'value' => 'Pennsylvania German',
            ),
            419 => 
            array (
                'id' => 'pdt',
                'value' => 'Plautdietsch',
            ),
            420 => 
            array (
                'id' => 'peo',
                'value' => 'Old Persian',
            ),
            421 => 
            array (
                'id' => 'pfl',
                'value' => 'Palatine German',
            ),
            422 => 
            array (
                'id' => 'phn',
                'value' => 'Phoenician',
            ),
            423 => 
            array (
                'id' => 'pi',
                'value' => 'Pali',
            ),
            424 => 
            array (
                'id' => 'pl',
                'value' => 'Pɔland kasa',
            ),
            425 => 
            array (
                'id' => 'pms',
                'value' => 'Piedmontese',
            ),
            426 => 
            array (
                'id' => 'pnt',
                'value' => 'Pontic',
            ),
            427 => 
            array (
                'id' => 'pon',
                'value' => 'Pohnpeian',
            ),
            428 => 
            array (
                'id' => 'prg',
                'value' => 'Prussian',
            ),
            429 => 
            array (
                'id' => 'pro',
                'value' => 'Old Provençal',
            ),
            430 => 
            array (
                'id' => 'ps',
                'value' => 'Pashto',
            ),
            431 => 
            array (
                'id' => 'pt',
                'value' => 'Pɔɔtugal kasa',
            ),
            432 => 
            array (
                'id' => 'pt_BR',
                'value' => 'Brazilian Portuguese',
            ),
            433 => 
            array (
                'id' => 'pt_PT',
                'value' => 'European Portuguese',
            ),
            434 => 
            array (
                'id' => 'qu',
                'value' => 'Quechua',
            ),
            435 => 
            array (
                'id' => 'quc',
                'value' => 'Kʼicheʼ',
            ),
            436 => 
            array (
                'id' => 'qug',
                'value' => 'Chimborazo Highland Quichua',
            ),
            437 => 
            array (
                'id' => 'raj',
                'value' => 'Rajasthani',
            ),
            438 => 
            array (
                'id' => 'rap',
                'value' => 'Rapanui',
            ),
            439 => 
            array (
                'id' => 'rar',
                'value' => 'Rarotongan',
            ),
            440 => 
            array (
                'id' => 'rgn',
                'value' => 'Romagnol',
            ),
            441 => 
            array (
                'id' => 'rif',
                'value' => 'Riffian',
            ),
            442 => 
            array (
                'id' => 'rm',
                'value' => 'Romansh',
            ),
            443 => 
            array (
                'id' => 'rn',
                'value' => 'Rundi',
            ),
            444 => 
            array (
                'id' => 'ro',
                'value' => 'Romenia kasa',
            ),
            445 => 
            array (
                'id' => 'ro_MD',
                'value' => 'Moldavian',
            ),
            446 => 
            array (
                'id' => 'rof',
                'value' => 'Rombo',
            ),
            447 => 
            array (
                'id' => 'rom',
                'value' => 'Romany',
            ),
            448 => 
            array (
                'id' => 'root',
                'value' => 'Root',
            ),
            449 => 
            array (
                'id' => 'rtm',
                'value' => 'Rotuman',
            ),
            450 => 
            array (
                'id' => 'ru',
                'value' => 'Rahyia kasa',
            ),
            451 => 
            array (
                'id' => 'rue',
                'value' => 'Rusyn',
            ),
            452 => 
            array (
                'id' => 'rug',
                'value' => 'Roviana',
            ),
            453 => 
            array (
                'id' => 'rup',
                'value' => 'Aromanian',
            ),
            454 => 
            array (
                'id' => 'rw',
                'value' => 'Rewanda kasa',
            ),
            455 => 
            array (
                'id' => 'rwk',
                'value' => 'Rwa',
            ),
            456 => 
            array (
                'id' => 'sa',
                'value' => 'Sanskrit',
            ),
            457 => 
            array (
                'id' => 'sad',
                'value' => 'Sandawe',
            ),
            458 => 
            array (
                'id' => 'sah',
                'value' => 'Sakha',
            ),
            459 => 
            array (
                'id' => 'sam',
                'value' => 'Samaritan Aramaic',
            ),
            460 => 
            array (
                'id' => 'saq',
                'value' => 'Samburu',
            ),
            461 => 
            array (
                'id' => 'sas',
                'value' => 'Sasak',
            ),
            462 => 
            array (
                'id' => 'sat',
                'value' => 'Santali',
            ),
            463 => 
            array (
                'id' => 'saz',
                'value' => 'Saurashtra',
            ),
            464 => 
            array (
                'id' => 'sba',
                'value' => 'Ngambay',
            ),
            465 => 
            array (
                'id' => 'sbp',
                'value' => 'Sangu',
            ),
            466 => 
            array (
                'id' => 'sc',
                'value' => 'Sardinian',
            ),
            467 => 
            array (
                'id' => 'scn',
                'value' => 'Sicilian',
            ),
            468 => 
            array (
                'id' => 'sco',
                'value' => 'Scots',
            ),
            469 => 
            array (
                'id' => 'sd',
                'value' => 'Sindhi',
            ),
            470 => 
            array (
                'id' => 'sdc',
                'value' => 'Sassarese Sardinian',
            ),
            471 => 
            array (
                'id' => 'se',
                'value' => 'Northern Sami',
            ),
            472 => 
            array (
                'id' => 'see',
                'value' => 'Seneca',
            ),
            473 => 
            array (
                'id' => 'seh',
                'value' => 'Sena',
            ),
            474 => 
            array (
                'id' => 'sei',
                'value' => 'Seri',
            ),
            475 => 
            array (
                'id' => 'sel',
                'value' => 'Selkup',
            ),
            476 => 
            array (
                'id' => 'ses',
                'value' => 'Koyraboro Senni',
            ),
            477 => 
            array (
                'id' => 'sg',
                'value' => 'Sango',
            ),
            478 => 
            array (
                'id' => 'sga',
                'value' => 'Old Irish',
            ),
            479 => 
            array (
                'id' => 'sgs',
                'value' => 'Samogitian',
            ),
            480 => 
            array (
                'id' => 'sh',
                'value' => 'Serbo-Croatian',
            ),
            481 => 
            array (
                'id' => 'shi',
                'value' => 'Tachelhit',
            ),
            482 => 
            array (
                'id' => 'shn',
                'value' => 'Shan',
            ),
            483 => 
            array (
                'id' => 'shu',
                'value' => 'Chadian Arabic',
            ),
            484 => 
            array (
                'id' => 'si',
                'value' => 'Sinhala',
            ),
            485 => 
            array (
                'id' => 'sid',
                'value' => 'Sidamo',
            ),
            486 => 
            array (
                'id' => 'sk',
                'value' => 'Slovak',
            ),
            487 => 
            array (
                'id' => 'sl',
                'value' => 'Slovenian',
            ),
            488 => 
            array (
                'id' => 'sli',
                'value' => 'Lower Silesian',
            ),
            489 => 
            array (
                'id' => 'sly',
                'value' => 'Selayar',
            ),
            490 => 
            array (
                'id' => 'sm',
                'value' => 'Samoan',
            ),
            491 => 
            array (
                'id' => 'sma',
                'value' => 'Southern Sami',
            ),
            492 => 
            array (
                'id' => 'smj',
                'value' => 'Lule Sami',
            ),
            493 => 
            array (
                'id' => 'smn',
                'value' => 'Inari Sami',
            ),
            494 => 
            array (
                'id' => 'sms',
                'value' => 'Skolt Sami',
            ),
            495 => 
            array (
                'id' => 'sn',
                'value' => 'Shona',
            ),
            496 => 
            array (
                'id' => 'snk',
                'value' => 'Soninke',
            ),
            497 => 
            array (
                'id' => 'so',
                'value' => 'Somalia kasa',
            ),
            498 => 
            array (
                'id' => 'sog',
                'value' => 'Sogdien',
            ),
            499 => 
            array (
                'id' => 'sq',
                'value' => 'Albanian',
            ),
        ));
        \DB::table('languages')->insert(array (
            0 => 
            array (
                'id' => 'sr',
                'value' => 'Serbian',
            ),
            1 => 
            array (
                'id' => 'srn',
                'value' => 'Sranan Tongo',
            ),
            2 => 
            array (
                'id' => 'srr',
                'value' => 'Serer',
            ),
            3 => 
            array (
                'id' => 'ss',
                'value' => 'Swati',
            ),
            4 => 
            array (
                'id' => 'ssy',
                'value' => 'Saho',
            ),
            5 => 
            array (
                'id' => 'st',
                'value' => 'Southern Sotho',
            ),
            6 => 
            array (
                'id' => 'stq',
                'value' => 'Saterland Frisian',
            ),
            7 => 
            array (
                'id' => 'su',
                'value' => 'Sundanese',
            ),
            8 => 
            array (
                'id' => 'suk',
                'value' => 'Sukuma',
            ),
            9 => 
            array (
                'id' => 'sus',
                'value' => 'Susu',
            ),
            10 => 
            array (
                'id' => 'sux',
                'value' => 'Sumerian',
            ),
            11 => 
            array (
                'id' => 'sv',
                'value' => 'Sweden kasa',
            ),
            12 => 
            array (
                'id' => 'sw',
                'value' => 'Swahili',
            ),
            13 => 
            array (
                'id' => 'swb',
                'value' => 'Comorian',
            ),
            14 => 
            array (
                'id' => 'swc',
                'value' => 'Congo Swahili',
            ),
            15 => 
            array (
                'id' => 'syc',
                'value' => 'Classical Syriac',
            ),
            16 => 
            array (
                'id' => 'syr',
                'value' => 'Syriac',
            ),
            17 => 
            array (
                'id' => 'szl',
                'value' => 'Silesian',
            ),
            18 => 
            array (
                'id' => 'ta',
                'value' => 'Tamil kasa',
            ),
            19 => 
            array (
                'id' => 'tcy',
                'value' => 'Tulu',
            ),
            20 => 
            array (
                'id' => 'te',
                'value' => 'Telugu',
            ),
            21 => 
            array (
                'id' => 'tem',
                'value' => 'Timne',
            ),
            22 => 
            array (
                'id' => 'teo',
                'value' => 'Teso',
            ),
            23 => 
            array (
                'id' => 'ter',
                'value' => 'Tereno',
            ),
            24 => 
            array (
                'id' => 'tet',
                'value' => 'Tetum',
            ),
            25 => 
            array (
                'id' => 'tg',
                'value' => 'Tajik',
            ),
            26 => 
            array (
                'id' => 'th',
                'value' => 'Taeland kasa',
            ),
            27 => 
            array (
                'id' => 'ti',
                'value' => 'Tigrinya',
            ),
            28 => 
            array (
                'id' => 'tig',
                'value' => 'Tigre',
            ),
            29 => 
            array (
                'id' => 'tiv',
                'value' => 'Tiv',
            ),
            30 => 
            array (
                'id' => 'tk',
                'value' => 'Turkmen',
            ),
            31 => 
            array (
                'id' => 'tkl',
                'value' => 'Tokelau',
            ),
            32 => 
            array (
                'id' => 'tkr',
                'value' => 'Tsakhur',
            ),
            33 => 
            array (
                'id' => 'tl',
                'value' => 'Tagalog',
            ),
            34 => 
            array (
                'id' => 'tlh',
                'value' => 'Klingon',
            ),
            35 => 
            array (
                'id' => 'tli',
                'value' => 'Tlingit',
            ),
            36 => 
            array (
                'id' => 'tly',
                'value' => 'Talysh',
            ),
            37 => 
            array (
                'id' => 'tmh',
                'value' => 'Tamashek',
            ),
            38 => 
            array (
                'id' => 'tn',
                'value' => 'Tswana',
            ),
            39 => 
            array (
                'id' => 'to',
                'value' => 'Tongan',
            ),
            40 => 
            array (
                'id' => 'tog',
                'value' => 'Nyasa Tonga',
            ),
            41 => 
            array (
                'id' => 'tpi',
                'value' => 'Tok Pisin',
            ),
            42 => 
            array (
                'id' => 'tr',
                'value' => 'Tɛɛki kasa',
            ),
            43 => 
            array (
                'id' => 'tru',
                'value' => 'Turoyo',
            ),
            44 => 
            array (
                'id' => 'trv',
                'value' => 'Taroko',
            ),
            45 => 
            array (
                'id' => 'ts',
                'value' => 'Tsonga',
            ),
            46 => 
            array (
                'id' => 'tsd',
                'value' => 'Tsakonian',
            ),
            47 => 
            array (
                'id' => 'tsi',
                'value' => 'Tsimshian',
            ),
            48 => 
            array (
                'id' => 'tt',
                'value' => 'Tatar',
            ),
            49 => 
            array (
                'id' => 'ttt',
                'value' => 'Muslim Tat',
            ),
            50 => 
            array (
                'id' => 'tum',
                'value' => 'Tumbuka',
            ),
            51 => 
            array (
                'id' => 'tvl',
                'value' => 'Tuvalu',
            ),
            52 => 
            array (
                'id' => 'tw',
                'value' => 'Twi',
            ),
            53 => 
            array (
                'id' => 'twq',
                'value' => 'Tasawaq',
            ),
            54 => 
            array (
                'id' => 'ty',
                'value' => 'Tahitian',
            ),
            55 => 
            array (
                'id' => 'tyv',
                'value' => 'Tuvinian',
            ),
            56 => 
            array (
                'id' => 'tzm',
                'value' => 'Central Atlas Tamazight',
            ),
            57 => 
            array (
                'id' => 'udm',
                'value' => 'Udmurt',
            ),
            58 => 
            array (
                'id' => 'ug',
                'value' => 'Uyghur',
            ),
            59 => 
            array (
                'id' => 'uga',
                'value' => 'Ugaritic',
            ),
            60 => 
            array (
                'id' => 'uk',
                'value' => 'Ukren kasa',
            ),
            61 => 
            array (
                'id' => 'umb',
                'value' => 'Umbundu',
            ),
            62 => 
            array (
                'id' => 'und',
                'value' => 'Unknown Language',
            ),
            63 => 
            array (
                'id' => 'ur',
                'value' => 'Urdu kasa',
            ),
            64 => 
            array (
                'id' => 'uz',
                'value' => 'Uzbek',
            ),
            65 => 
            array (
                'id' => 'vai',
                'value' => 'Vai',
            ),
            66 => 
            array (
                'id' => 've',
                'value' => 'Venda',
            ),
            67 => 
            array (
                'id' => 'vec',
                'value' => 'Venetian',
            ),
            68 => 
            array (
                'id' => 'vep',
                'value' => 'Veps',
            ),
            69 => 
            array (
                'id' => 'vi',
                'value' => 'Viɛtnam kasa',
            ),
            70 => 
            array (
                'id' => 'vls',
                'value' => 'West Flemish',
            ),
            71 => 
            array (
                'id' => 'vmf',
                'value' => 'Main-Franconian',
            ),
            72 => 
            array (
                'id' => 'vo',
                'value' => 'Volapük',
            ),
            73 => 
            array (
                'id' => 'vot',
                'value' => 'Votic',
            ),
            74 => 
            array (
                'id' => 'vro',
                'value' => 'Võro',
            ),
            75 => 
            array (
                'id' => 'vun',
                'value' => 'Vunjo',
            ),
            76 => 
            array (
                'id' => 'wa',
                'value' => 'Walloon',
            ),
            77 => 
            array (
                'id' => 'wae',
                'value' => 'Walser',
            ),
            78 => 
            array (
                'id' => 'wal',
                'value' => 'Wolaytta',
            ),
            79 => 
            array (
                'id' => 'war',
                'value' => 'Waray',
            ),
            80 => 
            array (
                'id' => 'was',
                'value' => 'Washo',
            ),
            81 => 
            array (
                'id' => 'wbp',
                'value' => 'Warlpiri',
            ),
            82 => 
            array (
                'id' => 'wo',
                'value' => 'Wolof',
            ),
            83 => 
            array (
                'id' => 'wuu',
                'value' => 'Wu Chinese',
            ),
            84 => 
            array (
                'id' => 'xal',
                'value' => 'Kalmyk',
            ),
            85 => 
            array (
                'id' => 'xh',
                'value' => 'Xhosa',
            ),
            86 => 
            array (
                'id' => 'xmf',
                'value' => 'Mingrelian',
            ),
            87 => 
            array (
                'id' => 'xog',
                'value' => 'Soga',
            ),
            88 => 
            array (
                'id' => 'yao',
                'value' => 'Yao',
            ),
            89 => 
            array (
                'id' => 'yap',
                'value' => 'Yapese',
            ),
            90 => 
            array (
                'id' => 'yav',
                'value' => 'Yangben',
            ),
            91 => 
            array (
                'id' => 'ybb',
                'value' => 'Yemba',
            ),
            92 => 
            array (
                'id' => 'yi',
                'value' => 'Yiddish',
            ),
            93 => 
            array (
                'id' => 'yo',
                'value' => 'Yoruba',
            ),
            94 => 
            array (
                'id' => 'yrl',
                'value' => 'Nheengatu',
            ),
            95 => 
            array (
                'id' => 'yue',
                'value' => 'Cantonese',
            ),
            96 => 
            array (
                'id' => 'za',
                'value' => 'Zhuang',
            ),
            97 => 
            array (
                'id' => 'zap',
                'value' => 'Zapotec',
            ),
            98 => 
            array (
                'id' => 'zbl',
                'value' => 'Blissymbols',
            ),
            99 => 
            array (
                'id' => 'zea',
                'value' => 'Zeelandic',
            ),
            100 => 
            array (
                'id' => 'zen',
                'value' => 'Zenaga',
            ),
            101 => 
            array (
                'id' => 'zgh',
                'value' => 'Standard Moroccan Tamazight',
            ),
            102 => 
            array (
                'id' => 'zh',
                'value' => 'Kyaena kasa',
            ),
            103 => 
            array (
                'id' => 'zh_Hans',
                'value' => 'Simplified Chinese',
            ),
            104 => 
            array (
                'id' => 'zh_Hant',
                'value' => 'Traditional Chinese',
            ),
            105 => 
            array (
                'id' => 'zu',
                'value' => 'Zulu',
            ),
            106 => 
            array (
                'id' => 'zun',
                'value' => 'Zuni',
            ),
            107 => 
            array (
                'id' => 'zxx',
                'value' => 'No linguistic content',
            ),
            108 => 
            array (
                'id' => 'zza',
                'value' => 'Zaza',
            ),
        ));
        
        
    }
}