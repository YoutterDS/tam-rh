<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('countries')->delete();
        \DB::table('countries')->insert(array (
            0 =>
            array (
                'code' => 'AU',
                'name' => 'Australia',
                'type' => 'I',
            ),
            1 =>
            array (
                'code' => 'CN',
                'name' => 'China',
                'type' => 'I',
            ),
            2 =>
            array (
                'code' => 'JP',
                'name' => 'Japan',
                'type' => 'I',
            ),
            3 =>
            array (
                'code' => 'TH',
                'name' => 'Thailand',
                'type' => 'I',
            ),
            4 =>
            array (
                'code' => 'IN',
                'name' => 'India',
                'type' => 'I',
            ),
            5 =>
            array (
                'code' => 'MY',
                'name' => 'Malaysia',
                'type' => 'I',
            ),
            6 =>
            array (
                'code' => 'KR',
                'name' => 'Kore',
                'type' => 'I',
            ),
            7 =>
            array (
                'code' => 'HK',
                'name' => 'Hong Kong',
                'type' => 'I',
            ),
            8 =>
            array (
                'code' => 'TW',
                'name' => 'Taiwan',
                'type' => 'I',
            ),
            9 =>
            array (
                'code' => 'PH',
                'name' => 'Philippines',
                'type' => 'I',
            ),
            10 =>
            array (
                'code' => 'VN',
                'name' => 'Vietnam',
                'type' => 'I',
            ),
            11 =>
            array (
                'code' => 'FR',
                'name' => 'France',
                'type' => 'EU',
            ),
            12 =>
            array (
                'code' => 'DE',
                'name' => 'Germany',
                'type' => 'EU',
            ),
            13 =>
            array (
                'code' => 'SE',
                'name' => 'Sweden',
                'type' => 'EU',
            ),
            14 =>
            array (
                'code' => 'IT',
                'name' => 'Italy',
                'type' => 'EU',
            ),
            15 =>
            array (
                'code' => 'GR',
                'name' => 'Greece',
                'type' => 'EU',
            ),
            16 =>
            array (
                'code' => 'ES',
                'name' => 'España',
                'type' => 'ES',
            ),
            17 =>
            array (
                'code' => 'AT',
                'name' => 'Austria',
                'type' => 'EU',
            ),
            18 =>
            array (
                'code' => 'GB',
                'name' => 'United Kingdom',
                'type' => 'EU',
            ),
            19 =>
            array (
                'code' => 'NL',
                'name' => 'Netherlands',
                'type' => 'EU',
            ),
            20 =>
            array (
                'code' => 'BE',
                'name' => 'Belgium',
                'type' => 'EU',
            ),
            21 =>
            array (
                'code' => 'CH',
                'name' => 'Switzerland',
                'type' => 'I',
            ),
            22 =>
            array (
                'code' => 'AE',
                'name' => 'United Arab Emirates',
                'type' => 'I',
            ),
            23 =>
            array (
                'code' => 'IL',
                'name' => 'Israel',
                'type' => 'I',
            ),
            24 =>
            array (
                'code' => 'UA',
                'name' => 'Ukraine',
                'type' => 'I',
            ),
            25 =>
            array (
                'code' => 'RU',
                'name' => 'Russian Federation',
                'type' => 'I',
            ),
            26 =>
            array (
                'code' => 'KZ',
                'name' => 'Kazakhstan',
                'type' => 'I',
            ),
            27 =>
            array (
                'code' => 'PT',
                'name' => 'Portugal',
                'type' => 'EU',
            ),
            28 =>
            array (
                'code' => 'SA',
                'name' => 'Saudi Arabia',
                'type' => 'I',
            ),
            29 =>
            array (
                'code' => 'DK',
                'name' => 'Denmark',
                'type' => 'EU',
            ),
            30 =>
            array (
                'code' => 'IR',
                'name' => 'Ira',
                'type' => 'I',
            ),
            31 =>
            array (
                'code' => 'NO',
                'name' => 'Norway',
                'type' => 'I',
            ),
            32 =>
            array (
                'code' => 'US',
                'name' => 'United States',
                'type' => 'I',
            ),
            33 =>
            array (
                'code' => 'MX',
                'name' => 'Mexico',
                'type' => 'I',
            ),
            34 =>
            array (
                'code' => 'CA',
                'name' => 'Canada',
                'type' => 'I',
            ),
            /* 35 =>
            array (
                'code' => 'A1',
                'name' => 'Anonymous Proxy',
                'type' => 'I',
            ),*/
            36 =>
            array (
                'code' => 'SY',
                'name' => 'Syrian Arab Republic',
                'type' => 'I',
            ),
            37 =>
            array (
                'code' => 'CY',
                'name' => 'Cyprus',
                'type' => 'EU',
            ),
            38 =>
            array (
                'code' => 'CZ',
                'name' => 'Czech Republic',
                'type' => 'EU',
            ),
            39 =>
            array (
                'code' => 'IQ',
                'name' => 'Iraq',
                'type' => 'I',
            ),
            40 =>
            array (
                'code' => 'TR',
                'name' => 'Turkey',
                'type' => 'I',
            ),
            41 =>
            array (
                'code' => 'RO',
                'name' => 'Romania',
                'type' => 'EU',
            ),
            42 =>
            array (
                'code' => 'LB',
                'name' => 'Lebanon',
                'type' => 'I',
            ),
            43 =>
            array (
                'code' => 'HU',
                'name' => 'Hungary',
                'type' => 'EU',
            ),
            44 =>
            array (
                'code' => 'GE',
                'name' => 'Georgia',
                'type' => 'I',
            ),
            45 =>
            array (
                'code' => 'BR',
                'name' => 'Brazil',
                'type' => 'I',
            ),
            46 =>
            array (
                'code' => 'AZ',
                'name' => 'Azerbaijan',
                'type' => 'I',
            ),
           /* 47 =>
            array (
                'code' => 'A2',
                'name' => 'Satellite Provider',
                'type' => 'I',
            ), */
            48 =>
            array (
                'code' => 'PS',
                'name' => 'Palestinian Territory',
                'type' => 'I',
            ),
            49 =>
            array (
                'code' => 'LT',
                'name' => 'Lithuania',
                'type' => 'EU',
            ),
            50 =>
            array (
                'code' => 'OM',
                'name' => 'Oman',
                'type' => 'I',
            ),
            51 =>
            array (
                'code' => 'SK',
                'name' => 'Slovakia',
                'type' => 'EU',
            ),
            52 =>
            array (
                'code' => 'RS',
                'name' => 'Serbia',
                'type' => 'I',
            ),
            53 =>
            array (
                'code' => 'FI',
                'name' => 'Finland',
                'type' => 'EU',
            ),
            54 =>
            array (
                'code' => 'IS',
                'name' => 'Iceland',
                'type' => 'I',
            ),
            55 =>
            array (
                'code' => 'BG',
                'name' => 'Bulgaria',
                'type' => 'EU',
            ),
            56 =>
            array (
                'code' => 'SI',
                'name' => 'Slovenia',
                'type' => 'EU',
            ),
            57 =>
            array (
                'code' => 'MD',
                'name' => 'Moldov',
                'type' => 'I',
            ),
            58 =>
            array (
                'code' => 'MK',
                'name' => 'Macedonia',
                'type' => 'I',
            ),
            59 =>
            array (
                'code' => 'LI',
                'name' => 'Liechtenstein',
                'type' => 'I',
            ),
            60 =>
            array (
                'code' => 'JE',
                'name' => 'Jersey',
                'type' => 'I',
            ),
            61 =>
            array (
                'code' => 'PL',
                'name' => 'Poland',
                'type' => 'EU',
            ),
            62 =>
            array (
                'code' => 'HR',
                'name' => 'Croatia',
                'type' => 'EU',
            ),
            63 =>
            array (
                'code' => 'BA',
                'name' => 'Bosnia and Herzegovina',
                'type' => 'I',
            ),
            64 =>
            array (
                'code' => 'EE',
                'name' => 'Estonia',
                'type' => 'EU',
            ),
            65 =>
            array (
                'code' => 'LV',
                'name' => 'Latvia',
                'type' => 'EU',
            ),
            66 =>
            array (
                'code' => 'JO',
                'name' => 'Jordan',
                'type' => 'I',
            ),
            67 =>
            array (
                'code' => 'KG',
                'name' => 'Kyrgyzstan',
                'type' => 'I',
            ),
            68 =>
            array (
                'code' => 'RE',
                'name' => 'Reunion',
                'type' => 'I',
            ),
            69 =>
            array (
                'code' => 'IE',
                'name' => 'Ireland',
                'type' => 'EU',
            ),
            70 =>
            array (
                'code' => 'LY',
                'name' => 'Libya',
                'type' => 'I',
            ),
            71 =>
            array (
                'code' => 'LU',
                'name' => 'Luxembourg',
                'type' => 'EU',
            ),
            72 =>
            array (
                'code' => 'AM',
                'name' => 'Armenia',
                'type' => 'I',
            ),
            73 =>
            array (
                'code' => 'VG',
                'name' => 'Virgin Island',
                'type' => 'I',
            ),
            74 =>
            array (
                'code' => 'YE',
                'name' => 'Yemen',
                'type' => 'I',
            ),
            75 =>
            array (
                'code' => 'BY',
                'name' => 'Belarus',
                'type' => 'I',
            ),
            76 =>
            array (
                'code' => 'GI',
                'name' => 'Gibraltar',
                'type' => 'I',
            ),
            77 =>
            array (
                'code' => 'MQ',
                'name' => 'Martinique',
                'type' => 'I',
            ),
            78 =>
            array (
                'code' => 'PA',
                'name' => 'Panama',
                'type' => 'I',
            ),
            79 =>
            array (
                'code' => 'DO',
                'name' => 'Dominican Republic',
                'type' => 'I',
            ),
            80 =>
            array (
                'code' => 'GU',
                'name' => 'Guam',
                'type' => 'I',
            ),
            81 =>
            array (
                'code' => 'PR',
                'name' => 'Puerto Rico',
                'type' => 'I',
            ),
            82 =>
            array (
                'code' => 'VI',
                'name' => 'Virgin Island',
                'type' => 'I',
            ),
            83 =>
            array (
                'code' => 'MN',
                'name' => 'Mongolia',
                'type' => 'I',
            ),
            84 =>
            array (
                'code' => 'NZ',
                'name' => 'New Zealand',
                'type' => 'I',
            ),
            85 =>
            array (
                'code' => 'SG',
                'name' => 'Singapore',
                'type' => 'I',
            ),
            86 =>
            array (
                'code' => 'ID',
                'name' => 'Indonesia',
                'type' => 'I',
            ),
            87 =>
            array (
                'code' => 'NP',
                'name' => 'Nepal',
                'type' => 'I',
            ),
            88 =>
            array (
                'code' => 'PG',
                'name' => 'Papua New Guinea',
                'type' => 'I',
            ),
            89 =>
            array (
                'code' => 'PK',
                'name' => 'Pakistan',
                'type' => 'I',
            ),
            90 =>
            array (
                'code' => 'AP',
                'name' => 'Asia/Pacific Region',
                'type' => 'I',
            ),
            91 =>
            array (
                'code' => 'BS',
                'name' => 'Bahamas',
                'type' => 'I',
            ),
            92 =>
            array (
                'code' => 'LC',
                'name' => 'Saint Lucia',
                'type' => 'I',
            ),
            93 =>
            array (
                'code' => 'AR',
                'name' => 'Argentina',
                'type' => 'I',
            ),
            94 =>
            array (
                'code' => 'BD',
                'name' => 'Bangladesh',
                'type' => 'I',
            ),
            95 =>
            array (
                'code' => 'TK',
                'name' => 'Tokelau',
                'type' => 'I',
            ),
            96 =>
            array (
                'code' => 'KH',
                'name' => 'Cambodia',
                'type' => 'I',
            ),
            97 =>
            array (
                'code' => 'MO',
                'name' => 'Macau',
                'type' => 'I',
            ),
            98 =>
            array (
                'code' => 'MV',
                'name' => 'Maldives',
                'type' => 'I',
            ),
            99 =>
            array (
                'code' => 'AF',
                'name' => 'Afghanistan',
                'type' => 'I',
            ),
            100 =>
            array (
                'code' => 'NC',
                'name' => 'New Caledonia',
                'type' => 'I',
            ),
            101 =>
            array (
                'code' => 'FJ',
                'name' => 'Fiji',
                'type' => 'I',
            ),
            102 =>
            array (
                'code' => 'WF',
                'name' => 'Wallis and Futuna',
                'type' => 'I',
            ),
            103 =>
            array (
                'code' => 'QA',
                'name' => 'Qatar',
                'type' => 'I',
            ),
            104 =>
            array (
                'code' => 'AL',
                'name' => 'Albania',
                'type' => 'EU',
            ),
            105 =>
            array (
                'code' => 'BZ',
                'name' => 'Belize',
                'type' => 'I',
            ),
            106 =>
            array (
                'code' => 'UZ',
                'name' => 'Uzbekistan',
                'type' => 'I',
            ),
            107 =>
            array (
                'code' => 'KW',
                'name' => 'Kuwait',
                'type' => 'I',
            ),
            108 =>
            array (
                'code' => 'ME',
                'name' => 'Montenegro',
                'type' => 'I',
            ),
            109 =>
            array (
                'code' => 'PE',
                'name' => 'Peru',
                'type' => 'I',
            ),
            110 =>
            array (
                'code' => 'BM',
                'name' => 'Bermuda',
                'type' => 'I',
            ),
            111 =>
            array (
                'code' => 'CW',
                'name' => 'Curacao',
                'type' => 'I',
            ),
            112 =>
            array (
                'code' => 'CO',
                'name' => 'Colombia',
                'type' => 'I',
            ),
            113 =>
            array (
                'code' => 'VE',
                'name' => 'Venezuela',
                'type' => 'I',
            ),
            114 =>
            array (
                'code' => 'CL',
                'name' => 'Chile',
                'type' => 'I',
            ),
            115 =>
            array (
                'code' => 'EC',
                'name' => 'Ecuador',
                'type' => 'I',
            ),
            116 =>
            array (
                'code' => 'ZA',
                'name' => 'South Africa',
                'type' => 'I',
            ),
            117 =>
            array (
                'code' => 'IM',
                'name' => 'Isle of Man',
                'type' => 'I',
            ),
            118 =>
            array (
                'code' => 'BO',
                'name' => 'Bolivia',
                'type' => 'I',
            ),
            119 =>
            array (
                'code' => 'GG',
                'name' => 'Guernsey',
                'type' => 'I',
            ),
            120 =>
            array (
                'code' => 'MT',
                'name' => 'Malta',
                'type' => 'EU',
            ),
            121 =>
            array (
                'code' => 'TJ',
                'name' => 'Tajikistan',
                'type' => 'I',
            ),
            122 =>
            array (
                'code' => 'SC',
                'name' => 'Seychelles',
                'type' => 'I',
            ),
            123 =>
            array (
                'code' => 'BH',
                'name' => 'Bahrain',
                'type' => 'I',
            ),
            124 =>
            array (
                'code' => 'EG',
                'name' => 'Egypt',
                'type' => 'I',
            ),
            125 =>
            array (
                'code' => 'ZW',
                'name' => 'Zimbabwe',
                'type' => 'I',
            ),
            126 =>
            array (
                'code' => 'LR',
                'name' => 'Liberia',
                'type' => 'I',
            ),
            127 =>
            array (
                'code' => 'KE',
                'name' => 'Kenya',
                'type' => 'I',
            ),
            128 =>
            array (
                'code' => 'GH',
                'name' => 'Ghana',
                'type' => 'I',
            ),
            129 =>
            array (
                'code' => 'NG',
                'name' => 'Nigeria',
                'type' => 'I',
            ),
            130 =>
            array (
                'code' => 'TZ',
                'name' => 'Tanzani',
                'type' => 'I',
            ),
            131 =>
            array (
                'code' => 'ZM',
                'name' => 'Zambia',
                'type' => 'I',
            ),
            132 =>
            array (
                'code' => 'MG',
                'name' => 'Madagascar',
                'type' => 'I',
            ),
            133 =>
            array (
                'code' => 'AO',
                'name' => 'Angola',
                'type' => 'I',
            ),
            134 =>
            array (
                'code' => 'NA',
                'name' => 'Namibia',
                'type' => 'I',
            ),
            135 =>
            array (
                'code' => 'CI',
                'name' => 'Cote D\'Ivoire',
                'type' => 'I',
            ),
            136 =>
            array (
                'code' => 'SD',
                'name' => 'Sudan',
                'type' => 'I',
            ),
            137 =>
            array (
                'code' => 'CM',
                'name' => 'Cameroon',
                'type' => 'I',
            ),
            138 =>
            array (
                'code' => 'MW',
                'name' => 'Malawi',
                'type' => 'I',
            ),
            139 =>
            array (
                'code' => 'GA',
                'name' => 'Gabon',
                'type' => 'I',
            ),
            140 =>
            array (
                'code' => 'ML',
                'name' => 'Mali',
                'type' => 'I',
            ),
            141 =>
            array (
                'code' => 'BJ',
                'name' => 'Benin',
                'type' => 'I',
            ),
            142 =>
            array (
                'code' => 'TD',
                'name' => 'Chad',
                'type' => 'I',
            ),
            143 =>
            array (
                'code' => 'BW',
                'name' => 'Botswana',
                'type' => 'I',
            ),
            144 =>
            array (
                'code' => 'CV',
                'name' => 'Cape Verde',
                'type' => 'I',
            ),
            145 =>
            array (
                'code' => 'RW',
                'name' => 'Rwanda',
                'type' => 'I',
            ),
            146 =>
            array (
                'code' => 'CG',
                'name' => 'Congo',
                'type' => 'I',
            ),
            147 =>
            array (
                'code' => 'UG',
                'name' => 'Uganda',
                'type' => 'I',
            ),
            148 =>
            array (
                'code' => 'MZ',
                'name' => 'Mozambique',
                'type' => 'I',
            ),
            149 =>
            array (
                'code' => 'GM',
                'name' => 'Gambia',
                'type' => 'I',
            ),
            150 =>
            array (
                'code' => 'LS',
                'name' => 'Lesotho',
                'type' => 'I',
            ),
            151 =>
            array (
                'code' => 'MU',
                'name' => 'Mauritius',
                'type' => 'I',
            ),
            152 =>
            array (
                'code' => 'MA',
                'name' => 'Morocco',
                'type' => 'I',
            ),
            153 =>
            array (
                'code' => 'DZ',
                'name' => 'Algeria',
                'type' => 'I',
            ),
            154 =>
            array (
                'code' => 'GN',
                'name' => 'Guinea',
                'type' => 'I',
            ),
            155 =>
            array (
                'code' => 'CD',
                'name' => 'Cong',
                'type' => 'I',
            ),
            156 =>
            array (
                'code' => 'SZ',
                'name' => 'Swaziland',
                'type' => 'I',
            ),
            157 =>
            array (
                'code' => 'BF',
                'name' => 'Burkina Faso',
                'type' => 'I',
            ),
            158 =>
            array (
                'code' => 'SL',
                'name' => 'Sierra Leone',
                'type' => 'I',
            ),
            159 =>
            array (
                'code' => 'SO',
                'name' => 'Somalia',
                'type' => 'I',
            ),
            160 =>
            array (
                'code' => 'NE',
                'name' => 'Niger',
                'type' => 'I',
            ),
            161 =>
            array (
                'code' => 'CF',
                'name' => 'Central African Republic',
                'type' => 'I',
            ),
            162 =>
            array (
                'code' => 'TG',
                'name' => 'Togo',
                'type' => 'I',
            ),
            163 =>
            array (
                'code' => 'BI',
                'name' => 'Burundi',
                'type' => 'I',
            ),
            164 =>
            array (
                'code' => 'GQ',
                'name' => 'Equatorial Guinea',
                'type' => 'I',
            ),
            165 =>
            array (
                'code' => 'SS',
                'name' => 'South Sudan',
                'type' => 'I',
            ),
            166 =>
            array (
                'code' => 'SN',
                'name' => 'Senegal',
                'type' => 'I',
            ),
            167 =>
            array (
                'code' => 'MR',
                'name' => 'Mauritania',
                'type' => 'I',
            ),
            168 =>
            array (
                'code' => 'DJ',
                'name' => 'Djibouti',
                'type' => 'I',
            ),
            169 =>
            array (
                'code' => 'KM',
                'name' => 'Comoros',
                'type' => 'I',
            ),
            170 =>
            array (
                'code' => 'IO',
                'name' => 'British Indian Ocean Territory',
                'type' => 'I',
            ),
            171 =>
            array (
                'code' => 'TN',
                'name' => 'Tunisia',
                'type' => 'I',
            ),
            172 =>
            array (
                'code' => 'GL',
                'name' => 'Greenland',
                'type' => 'I',
            ),
            173 =>
            array (
                'code' => 'VA',
                'name' => 'Holy See (Vatican City State)',
                'type' => 'I',
            ),
            174 =>
            array (
                'code' => 'CR',
                'name' => 'Costa Rica',
                'type' => 'I',
            ),
            175 =>
            array (
                'code' => 'KY',
                'name' => 'Cayman Islands',
                'type' => 'I',
            ),
            176 =>
            array (
                'code' => 'JM',
                'name' => 'Jamaica',
                'type' => 'I',
            ),
            177 =>
            array (
                'code' => 'GT',
                'name' => 'Guatemala',
                'type' => 'I',
            ),
            178 =>
            array (
                'code' => 'MH',
                'name' => 'Marshall Islands',
                'type' => 'I',
            ),
            179 =>
            array (
                'code' => 'AQ',
                'name' => 'Antarctica',
                'type' => 'I',
            ),
            180 =>
            array (
                'code' => 'BB',
                'name' => 'Barbados',
                'type' => 'I',
            ),
            181 =>
            array (
                'code' => 'AW',
                'name' => 'Aruba',
                'type' => 'I',
            ),
            182 =>
            array (
                'code' => 'MC',
                'name' => 'Monaco',
                'type' => 'I',
            ),
            183 =>
            array (
                'code' => 'AI',
                'name' => 'Anguilla',
                'type' => 'I',
            ),
            184 =>
            array (
                'code' => 'KN',
                'name' => 'Saint Kitts and Nevis',
                'type' => 'I',
            ),
            185 =>
            array (
                'code' => 'GD',
                'name' => 'Grenada',
                'type' => 'I',
            ),
            186 =>
            array (
                'code' => 'PY',
                'name' => 'Paraguay',
                'type' => 'I',
            ),
            187 =>
            array (
                'code' => 'MS',
                'name' => 'Montserrat',
                'type' => 'I',
            ),
            188 =>
            array (
                'code' => 'TC',
                'name' => 'Turks and Caicos Islands',
                'type' => 'I',
            ),
            189 =>
            array (
                'code' => 'AG',
                'name' => 'Antigua and Barbuda',
                'type' => 'I',
            ),
            190 =>
            array (
                'code' => 'TV',
                'name' => 'Tuvalu',
                'type' => 'I',
            ),
            191 =>
            array (
                'code' => 'PF',
                'name' => 'French Polynesia',
                'type' => 'I',
            ),
            192 =>
            array (
                'code' => 'SB',
                'name' => 'Solomon Islands',
                'type' => 'I',
            ),
            193 =>
            array (
                'code' => 'VU',
                'name' => 'Vanuatu',
                'type' => 'I',
            ),
            194 =>
            array (
                'code' => 'ER',
                'name' => 'Eritrea',
                'type' => 'I',
            ),
            195 =>
            array (
                'code' => 'TT',
                'name' => 'Trinidad and Tobago',
                'type' => 'I',
            ),
            196 =>
            array (
                'code' => 'AD',
                'name' => 'Andorra',
                'type' => 'AD',
            ),
            197 =>
            array (
                'code' => 'HT',
                'name' => 'Haiti',
                'type' => 'I',
            ),
            198 =>
            array (
                'code' => 'SH',
                'name' => 'Saint Helena',
                'type' => 'I',
            ),
            199 =>
            array (
                'code' => 'FM',
                'name' => 'Micronesi',
                'type' => 'I',
            ),
            200 =>
            array (
                'code' => 'SV',
                'name' => 'El Salvador',
                'type' => 'I',
            ),
            201 =>
            array (
                'code' => 'HN',
                'name' => 'Honduras',
                'type' => 'I',
            ),
            202 =>
            array (
                'code' => 'UY',
                'name' => 'Uruguay',
                'type' => 'I',
            ),
            203 =>
            array (
                'code' => 'LK',
                'name' => 'Sri Lanka',
                'type' => 'I',
            ),
            204 =>
            array (
                'code' => 'EH',
                'name' => 'Western Sahara',
                'type' => 'I',
            ),
            205 =>
            array (
                'code' => 'CX',
                'name' => 'Christmas Island',
                'type' => 'I',
            ),
            206 =>
            array (
                'code' => 'WS',
                'name' => 'Samoa',
                'type' => 'I',
            ),
            207 =>
            array (
                'code' => 'SR',
                'name' => 'Suriname',
                'type' => 'I',
            ),
            208 =>
            array (
                'code' => 'CK',
                'name' => 'Cook Islands',
                'type' => 'I',
            ),
            209 =>
            array (
                'code' => 'KI',
                'name' => 'Kiribati',
                'type' => 'I',
            ),
            210 =>
            array (
                'code' => 'NU',
                'name' => 'Niue',
                'type' => 'I',
            ),
            211 =>
            array (
                'code' => 'TO',
                'name' => 'Tonga',
                'type' => 'I',
            ),
            212 =>
            array (
                'code' => 'TF',
                'name' => 'French Southern Territories',
                'type' => 'I',
            ),
            213 =>
            array (
                'code' => 'YT',
                'name' => 'Mayotte',
                'type' => 'I',
            ),
            214 =>
            array (
                'code' => 'NF',
                'name' => 'Norfolk Island',
                'type' => 'I',
            ),
            215 =>
            array (
                'code' => 'BN',
                'name' => 'Brunei Darussalam',
                'type' => 'I',
            ),
            216 =>
            array (
                'code' => 'TM',
                'name' => 'Turkmenistan',
                'type' => 'I',
            ),
            217 =>
            array (
                'code' => 'PN',
                'name' => 'Pitcairn Islands',
                'type' => 'I',
            ),
            218 =>
            array (
                'code' => 'SM',
                'name' => 'San Marino',
                'type' => 'I',
            ),
            219 =>
            array (
                'code' => 'AX',
                'name' => 'Aland Islands',
                'type' => 'I',
            ),
            220 =>
            array (
                'code' => 'FO',
                'name' => 'Faroe Islands',
                'type' => 'I',
            ),
            221 =>
            array (
                'code' => 'SJ',
                'name' => 'Svalbard and Jan Mayen',
                'type' => 'I',
            ),
            222 =>
            array (
                'code' => 'CC',
                'name' => 'Cocos (Keeling) Islands',
                'type' => 'I',
            ),
            223 =>
            array (
                'code' => 'NR',
                'name' => 'Nauru',
                'type' => 'I',
            ),
            224 =>
            array (
                'code' => 'GS',
                'name' => 'South Georgia and the South Sandwich Islands',
                'type' => 'I',
            ),
            225 =>
            array (
                'code' => 'UM',
                'name' => 'United States Minor Outlying Islands',
                'type' => 'I',
            ),
            226 =>
            array (
                'code' => 'GW',
                'name' => 'Guinea-Bissau',
                'type' => 'I',
            ),
            227 =>
            array (
                'code' => 'PW',
                'name' => 'Palau',
                'type' => 'I',
            ),
            228 =>
            array (
                'code' => 'AS',
                'name' => 'American Samoa',
                'type' => 'I',
            ),
            229 =>
            array (
                'code' => 'BT',
                'name' => 'Bhutan',
                'type' => 'I',
            ),
            230 =>
            array (
                'code' => 'GF',
                'name' => 'French Guiana',
                'type' => 'I',
            ),
            231 =>
            array (
                'code' => 'GP',
                'name' => 'Guadeloupe',
                'type' => 'I',
            ),
            232 =>
            array (
                'code' => 'MF',
                'name' => 'Saint Martin',
                'type' => 'I',
            ),
            233 =>
            array (
                'code' => 'VC',
                'name' => 'Saint Vincent and the Grenadines',
                'type' => 'I',
            ),
            234 =>
            array (
                'code' => 'PM',
                'name' => 'Saint Pierre and Miquelon',
                'type' => 'I',
            ),
            235 =>
            array (
                'code' => 'BL',
                'name' => 'Saint Barthelemy',
                'type' => 'I',
            ),
            236 =>
            array (
                'code' => 'DM',
                'name' => 'Dominica',
                'type' => 'I',
            ),
            237 =>
            array (
                'code' => 'ST',
                'name' => 'Sao Tome and Principe',
                'type' => 'I',
            ),
            238 =>
            array (
                'code' => 'KP',
                'name' => 'Kore',
                'type' => 'I',
            ),
            239 =>
            array (
                'code' => 'FK',
                'name' => 'Falkland Islands (Malvinas)',
                'type' => 'I',
            ),
            240 =>
            array (
                'code' => 'MP',
                'name' => 'Northern Mariana Islands',
                'type' => 'I',
            ),
            241 =>
            array (
                'code' => 'TL',
                'name' => 'Timor-Leste',
                'type' => 'I',
            ),
            242 =>
            array (
                'code' => 'BQ',
                'name' => 'Bonair',
                'type' => 'I',
            ),
            243 =>
            array (
                'code' => 'MM',
                'name' => 'Myanmar',
                'type' => 'I',
            ),
            244 =>
            array (
                'code' => 'NI',
                'name' => 'Nicaragua',
                'type' => 'I',
            ),
            245 =>
            array (
                'code' => 'SX',
                'name' => 'Sint Maarten (Dutch part)',
                'type' => 'I',
            ),
            246 =>
            array (
                'code' => 'GY',
                'name' => 'Guyana',
                'type' => 'I',
            ),
            247 =>
            array (
                'code' => 'LA',
                'name' => 'Lao People\'s Democratic Republic',
                'type' => 'I',
            ),
            248 =>
            array (
                'code' => 'CU',
                'name' => 'Cuba',
                'type' => 'I',
            ),
            249 =>
            array (
                'code' => 'ET',
                'name' => 'Ethiopia',
                'type' => 'I',
            ),

            250 =>
            array (
                'code' => 'BAL',
                'name' => 'Baleares',
                'type' => 'BAL',
            ),
            251 =>
            array (
                'code' => 'CAN',
                'name' => 'Canarias',
                'type' => 'CAN',
            ),
            251 =>
            array (
                'code' => 'CE',
                'name' => 'Ceuta',
                'type' => 'CE',
            ),
            251 =>
            array (
                'code' => 'MEL',
                'name' => 'Melilla',
                'type' => 'MEL',
            ),
        ));
    }
}
