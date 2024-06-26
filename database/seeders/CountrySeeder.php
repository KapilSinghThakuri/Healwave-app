<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $countries = [
            ['english_name' => 'Afghanistan', 'country_code' => 'AF'],
            ['english_name' => 'Åland Islands', 'country_code' => 'AX'],
            ['english_name' => 'Albania', 'country_code' => 'AL'],
            ['english_name' => 'Algeria', 'country_code' => 'DZ'],
            ['english_name' => 'American Samoa', 'country_code' => 'AS'],
            ['english_name' => 'Andorra', 'country_code' => 'AD'],
            ['english_name' => 'Angola', 'country_code' => 'AO'],
            ['english_name' => 'Anguilla', 'country_code' => 'AI'],
            ['english_name' => 'Antarctica', 'country_code' => 'AQ'],
            ['english_name' => 'Antigua and Barbuda', 'country_code' => 'AG'],
            ['english_name' => 'Argentina', 'country_code' => 'AR'],
            ['english_name' => 'Armenia', 'country_code' => 'AM'],
            ['english_name' => 'Aruba', 'country_code' => 'AW'],
            ['english_name' => 'Australia', 'country_code' => 'AU'],
            ['english_name' => 'Austria', 'country_code' => 'AT'],
            ['english_name' => 'Azerbaijan', 'country_code' => 'AZ'],
            ['english_name' => 'Bahamas', 'country_code' => 'BS'],
            ['english_name' => 'Bahrain', 'country_code' => 'BH'],
            ['english_name' => 'Bangladesh', 'country_code' => 'BD'],
            ['english_name' => 'Barbados', 'country_code' => 'BB'],
            ['english_name' => 'Belarus', 'country_code' => 'BY'],
            ['english_name' => 'Belgium', 'country_code' => 'BE'],
            ['english_name' => 'Belize', 'country_code' => 'BZ'],
            ['english_name' => 'Benin', 'country_code' => 'BJ'],
            ['english_name' => 'Bermuda', 'country_code' => 'BM'],
            ['english_name' => 'Bhutan', 'country_code' => 'BT'],
            ['english_name' => 'Bolivia, Plurinational State of', 'country_code' => 'BO'],
            ['english_name' => 'Bonaire, Sint Eustatius and Saba', 'country_code' => 'BQ'],
            ['english_name' => 'Bosnia and Herzegovina', 'country_code' => 'BA'],
            ['english_name' => 'Botswana', 'country_code' => 'BW'],
            ['english_name' => 'Bouvet Island', 'country_code' => 'BV'],
            ['english_name' => 'Brazil', 'country_code' => 'BR'],
            ['english_name' => 'British Indian Ocean Territory', 'country_code' => 'IO'],
            ['english_name' => 'Brunei Darussalam', 'country_code' => 'BN'],
            ['english_name' => 'Bulgaria', 'country_code' => 'BG'],
            ['english_name' => 'Burkina Faso', 'country_code' => 'BF'],
            ['english_name' => 'Burundi', 'country_code' => 'BI'],
            ['english_name' => 'Cambodia', 'country_code' => 'KH'],
            ['english_name' => 'Cameroon', 'country_code' => 'CM'],
            ['english_name' => 'Canada', 'country_code' => 'CA'],
            ['english_name' => 'Cape Verde', 'country_code' => 'CV'],
            ['english_name' => 'Cayman Islands', 'country_code' => 'KY'],
            ['english_name' => 'Central African Republic', 'country_code' => 'CF'],
            ['english_name' => 'Chad', 'country_code' => 'TD'],
            ['english_name' => 'Chile', 'country_code' => 'CL'],
            ['english_name' => 'China', 'country_code' => 'CN'],
            ['english_name' => 'Christmas Island', 'country_code' => 'CX'],
            ['english_name' => 'Cocos (Keeling) Islands', 'country_code' => 'CC'],
            ['english_name' => 'Colombia', 'country_code' => 'CO'],
            ['english_name' => 'Comoros', 'country_code' => 'KM'],
            ['english_name' => 'Congo', 'country_code' => 'CG'],
            ['english_name' => 'Congo, the Democratic Republic of the', 'country_code' => 'CD'],
            ['english_name' => 'Cook Islands', 'country_code' => 'CK'],
            ['english_name' => 'Costa Rica', 'country_code' => 'CR'],
            ['english_name' => 'Côte d\'Ivoire', 'country_code' => 'CI'],
            ['english_name' => 'Croatia', 'country_code' => 'HR'],
            ['english_name' => 'Cuba', 'country_code' => 'CU'],
            ['english_name' => 'Curaçao', 'country_code' => 'CW'],
            ['english_name' => 'Cyprus', 'country_code' => 'CY'],
            ['english_name' => 'Czech Republic', 'country_code' => 'CZ'],
            ['english_name' => 'Denmark', 'country_code' => 'DK'],
            ['english_name' => 'Djibouti', 'country_code' => 'DJ'],
            ['english_name' => 'Dominica', 'country_code' => 'DM'],
            ['english_name' => 'Dominican Republic', 'country_code' => 'DO'],
            ['english_name' => 'Ecuador', 'country_code' => 'EC'],
            ['english_name' => 'Egypt', 'country_code' => 'EG'],
            ['english_name' => 'El Salvador', 'country_code' => 'SV'],
            ['english_name' => 'Equatorial Guinea', 'country_code' => 'GQ'],
            ['english_name' => 'Eritrea', 'country_code' => 'ER'],
            ['english_name' => 'Estonia', 'country_code' => 'EE'],
            ['english_name' => 'Ethiopia', 'country_code' => 'ET'],
            ['english_name' => 'Falkland Islands (Malvinas)', 'country_code' => 'FK'],
            ['english_name' => 'Faroe Islands', 'country_code' => 'FO'],
            ['english_name' => 'Fiji', 'country_code' => 'FJ'],
            ['english_name' => 'Finland', 'country_code' => 'FI'],
            ['english_name' => 'France', 'country_code' => 'FR'],
            ['english_name' => 'French Guiana', 'country_code' => 'GF'],
            ['english_name' => 'French Polynesia', 'country_code' => 'PF'],
            ['english_name' => 'French Southern Territories', 'country_code' => 'TF'],
            ['english_name' => 'Gabon', 'country_code' => 'GA'],
            ['english_name' => 'Gambia', 'country_code' => 'GM'],
            ['english_name' => 'Georgia', 'country_code' => 'GE'],
            ['english_name' => 'Germany', 'country_code' => 'DE'],
            ['english_name' => 'Ghana', 'country_code' => 'GH'],
            ['english_name' => 'Gibraltar', 'country_code' => 'GI'],
            ['english_name' => 'Greece', 'country_code' => 'GR'],
            ['english_name' => 'Greenland', 'country_code' => 'GL'],
            ['english_name' => 'Grenada', 'country_code' => 'GD'],
            ['english_name' => 'Guadeloupe', 'country_code' => 'GP'],
            ['english_name' => 'Guam', 'country_code' => 'GU'],
            ['english_name' => 'Guatemala', 'country_code' => 'GT'],
            ['english_name' => 'Guernsey', 'country_code' => 'GG'],
            ['english_name' => 'Guinea', 'country_code' => 'GN'],
            ['english_name' => 'Guinea-Bissau', 'country_code' => 'GW'],
            ['english_name' => 'Guyana', 'country_code' => 'GY'],
            ['english_name' => 'Haiti', 'country_code' => 'HT'],
            ['english_name' => 'Heard Island and McDonald Mcdonald Islands', 'country_code' => 'HM'],
            ['english_name' => 'Holy See (Vatican City State)', 'country_code' => 'VA'],
            ['english_name' => 'Honduras', 'country_code' => 'HN'],
            ['english_name' => 'Hong Kong', 'country_code' => 'HK'],
            ['english_name' => 'Hungary', 'country_code' => 'HU'],
            ['english_name' => 'Iceland', 'country_code' => 'IS'],
            ['english_name' => 'India', 'country_code' => 'IN'],
            ['english_name' => 'Indonesia', 'country_code' => 'ID'],
            ['english_name' => 'Iran, Islamic Republic of', 'country_code' => 'IR'],
            ['english_name' => 'Iraq', 'country_code' => 'IQ'],
            ['english_name' => 'Ireland', 'country_code' => 'IE'],
            ['english_name' => 'Isle of Man', 'country_code' => 'IM'],
            ['english_name' => 'Israel', 'country_code' => 'IL'],
            ['english_name' => 'Italy', 'country_code' => 'IT'],
            ['english_name' => 'Jamaica', 'country_code' => 'JM'],
            ['english_name' => 'Japan', 'country_code' => 'JP'],
            ['english_name' => 'Jersey', 'country_code' => 'JE'],
            ['english_name' => 'Jordan', 'country_code' => 'JO'],
            ['english_name' => 'Kazakhstan', 'country_code' => 'KZ'],
            ['english_name' => 'Kenya', 'country_code' => 'KE'],
            ['english_name' => 'Kiribati', 'country_code' => 'KI'],
            ['english_name' => 'Korea, Democratic People\'s Republic of', 'country_code' => 'KP'],
            ['english_name' => 'Korea, Republic of', 'country_code' => 'KR'],
            ['english_name' => 'Kuwait', 'country_code' => 'KW'],
            ['english_name' => 'Kyrgyzstan', 'country_code' => 'KG'],
            ['english_name' => 'Lao People\'s Democratic Republic', 'country_code' => 'LA'],
            ['english_name' => 'Latvia', 'country_code' => 'LV'],
            ['english_name' => 'Lebanon', 'country_code' => 'LB'],
            ['english_name' => 'Lesotho', 'country_code' => 'LS'],
            ['english_name' => 'Liberia', 'country_code' => 'LR'],
            ['english_name' => 'Libya', 'country_code' => 'LY'],
            ['english_name' => 'Liechtenstein', 'country_code' => 'LI'],
            ['english_name' => 'Lithuania', 'country_code' => 'LT'],
            ['english_name' => 'Luxembourg', 'country_code' => 'LU'],
            ['english_name' => 'Macao', 'country_code' => 'MO'],
            ['english_name' => 'Macedonia, the Former Yugoslav Republic of', 'country_code' => 'MK'],
            ['english_name' => 'Madagascar', 'country_code' => 'MG'],
            ['english_name' => 'Malawi', 'country_code' => 'MW'],
            ['english_name' => 'Malaysia', 'country_code' => 'MY'],
            ['english_name' => 'Maldives', 'country_code' => 'MV'],
            ['english_name' => 'Mali', 'country_code' => 'ML'],
            ['english_name' => 'Malta', 'country_code' => 'MT'],
            ['english_name' => 'Marshall Islands', 'country_code' => 'MH'],
            ['english_name' => 'Martinique', 'country_code' => 'MQ'],
            ['english_name' => 'Mauritania', 'country_code' => 'MR'],
            ['english_name' => 'Mauritius', 'country_code' => 'MU'],
            ['english_name' => 'Mayotte', 'country_code' => 'YT'],
            ['english_name' => 'Mexico', 'country_code' => 'MX'],
            ['english_name' => 'Micronesia, Federated States of', 'country_code' => 'FM'],
            ['english_name' => 'Moldova, Republic of', 'country_code' => 'MD'],
            ['english_name' => 'Monaco', 'country_code' => 'MC'],
            ['english_name' => 'Mongolia', 'country_code' => 'MN'],
            ['english_name' => 'Montenegro', 'country_code' => 'ME'],
            ['english_name' => 'Montserrat', 'country_code' => 'MS'],
            ['english_name' => 'Morocco', 'country_code' => 'MA'],
            ['english_name' => 'Mozambique', 'country_code' => 'MZ'],
            ['english_name' => 'Myanmar', 'country_code' => 'MM'],
            ['english_name' => 'Namibia', 'country_code' => 'NA'],
            ['english_name' => 'Nauru', 'country_code' => 'NR'],
            ['english_name' => 'Nepal', 'country_code' => 'NP'],
            ['english_name' => 'Netherlands', 'country_code' => 'NL'],
            ['english_name' => 'New Caledonia', 'country_code' => 'NC'],
            ['english_name' => 'New Zealand', 'country_code' => 'NZ'],
            ['english_name' => 'Nicaragua', 'country_code' => 'NI'],
            ['english_name' => 'Niger', 'country_code' => 'NE'],
            ['english_name' => 'Nigeria', 'country_code' => 'NG'],
            ['english_name' => 'Niue', 'country_code' => 'NU'],
            ['english_name' => 'Norfolk Island', 'country_code' => 'NF'],
            ['english_name' => 'Northern Mariana Islands', 'country_code' => 'MP'],
            ['english_name' => 'Norway', 'country_code' => 'NO'],
            ['english_name' => 'Oman', 'country_code' => 'OM'],
            ['english_name' => 'Pakistan', 'country_code' => 'PK'],
            ['english_name' => 'Palau', 'country_code' => 'PW'],
            ['english_name' => 'Palestine, State of', 'country_code' => 'PS'],
            ['english_name' => 'Panama', 'country_code' => 'PA'],
            ['english_name' => 'Papua New Guinea', 'country_code' => 'PG'],
            ['english_name' => 'Paraguay', 'country_code' => 'PY'],
            ['english_name' => 'Peru', 'country_code' => 'PE'],
            ['english_name' => 'Philippines', 'country_code' => 'PH'],
            ['english_name' => 'Pitcairn', 'country_code' => 'PN'],
            ['english_name' => 'Poland', 'country_code' => 'PL'],
            ['english_name' => 'Portugal', 'country_code' => 'PT'],
            ['english_name' => 'Puerto Rico', 'country_code' => 'PR'],
            ['english_name' => 'Qatar', 'country_code' => 'QA'],
            ['english_name' => 'Réunion', 'country_code' => 'RE'],
            ['english_name' => 'Romania', 'country_code' => 'RO'],
            ['english_name' => 'Russian Federation', 'country_code' => 'RU'],
            ['english_name' => 'Rwanda', 'country_code' => 'RW'],
            ['english_name' => 'Saint Barthélemy', 'country_code' => 'BL'],
            ['english_name' => 'Saint Helena, Ascension and Tristan da Cunha', 'country_code' => 'SH'],
            ['english_name' => 'Saint Kitts and Nevis', 'country_code' => 'KN'],
            ['english_name' => 'Saint Lucia', 'country_code' => 'LC'],
            ['english_name' => 'Saint Martin (French part)', 'country_code' => 'MF'],
            ['english_name' => 'Saint Pierre and Miquelon', 'country_code' => 'PM'],
            ['english_name' => 'Saint Vincent and the Grenadines', 'country_code' => 'VC'],
            ['english_name' => 'Samoa', 'country_code' => 'WS'],
            ['english_name' => 'San Marino', 'country_code' => 'SM'],
            ['english_name' => 'Sao Tome and Principe', 'country_code' => 'ST'],
            ['english_name' => 'Saudi Arabia', 'country_code' => 'SA'],
            ['english_name' => 'Senegal', 'country_code' => 'SN'],
            ['english_name' => 'Serbia', 'country_code' => 'RS'],
            ['english_name' => 'Seychelles', 'country_code' => 'SC'],
            ['english_name' => 'Sierra Leone', 'country_code' => 'SL'],
            ['english_name' => 'Singapore', 'country_code' => 'SG'],
            ['english_name' => 'Sint Maarten (Dutch part)', 'country_code' => 'SX'],
            ['english_name' => 'Slovakia', 'country_code' => 'SK'],
            ['english_name' => 'Slovenia', 'country_code' => 'SI'],
            ['english_name' => 'Solomon Islands', 'country_code' => 'SB'],
            ['english_name' => 'Somalia', 'country_code' => 'SO'],
            ['english_name' => 'South Africa', 'country_code' => 'ZA'],
            ['english_name' => 'South Georgia and the South Sandwich Islands', 'country_code' => 'GS'],
            ['english_name' => 'South Sudan', 'country_code' => 'SS'],
            ['english_name' => 'Spain', 'country_code' => 'ES'],
            ['english_name' => 'Sri Lanka', 'country_code' => 'LK'],
            ['english_name' => 'Sudan', 'country_code' => 'SD'],
            ['english_name' => 'Suriname', 'country_code' => 'SR'],
            ['english_name' => 'Svalbard and Jan Mayen', 'country_code' => 'SJ'],
            ['english_name' => 'Swaziland', 'country_code' => 'SZ'],
            ['english_name' => 'Sweden', 'country_code' => 'SE'],
            ['english_name' => 'Switzerland', 'country_code' => 'CH'],
            ['english_name' => 'Syrian Arab Republic', 'country_code' => 'SY'],
            ['english_name' => 'Taiwan', 'country_code' => 'TW'],
            ['english_name' => 'Tajikistan', 'country_code' => 'TJ'],
            ['english_name' => 'Tanzania, United Republic of', 'country_code' => 'TZ'],
            ['english_name' => 'Thailand', 'country_code' => 'TH'],
            ['english_name' => 'Timor-Leste', 'country_code' => 'TL'],
            ['english_name' => 'Togo', 'country_code' => 'TG'],
            ['english_name' => 'Tokelau', 'country_code' => 'TK'],
            ['english_name' => 'Tonga', 'country_code' => 'TO'],
            ['english_name' => 'Trinidad and Tobago', 'country_code' => 'TT'],
            ['english_name' => 'Tunisia', 'country_code' => 'TN'],
            ['english_name' => 'Turkey', 'country_code' => 'TR'],
            ['english_name' => 'Turkmenistan', 'country_code' => 'TM'],
            ['english_name' => 'Turks and Caicos Islands', 'country_code' => 'TC'],
            ['english_name' => 'Tuvalu', 'country_code' => 'TV'],
            ['english_name' => 'Uganda', 'country_code' => 'UG'],
            ['english_name' => 'Ukraine', 'country_code' => 'UA'],
            ['english_name' => 'United Arab Emirates', 'country_code' => 'AE'],
            ['english_name' => 'United Kingdom', 'country_code' => 'GB'],
            ['english_name' => 'United States', 'country_code' => 'US'],
            ['english_name' => 'United States Minor Outlying Islands', 'country_code' => 'UM'],
            ['english_name' => 'Uruguay', 'country_code' => 'UY'],
            ['english_name' => 'Uzbekistan', 'country_code' => 'UZ'],
            ['english_name' => 'Vanuatu', 'country_code' => 'VU'],
            ['english_name' => 'Venezuela, Bolivarian Republic of', 'country_code' => 'VE'],
            ['english_name' => 'Viet Nam', 'country_code' => 'VN'],
            ['english_name' => 'Virgin Islands, British', 'country_code' => 'VG'],
            ['english_name' => 'Virgin Islands, U.S.', 'country_code' => 'VI'],
            ['english_name' => 'Wallis and Futuna', 'country_code' => 'WF'],
            ['english_name' => 'Western Sahara', 'country_code' => 'EH'],
            ['english_name' => 'Yemen', 'country_code' => 'YE'],
            ['english_name' => 'Zambia', 'country_code' => 'ZM'],
            ['english_name' => 'Zimbabwe', 'country_code' => 'ZW'],
        ];

        foreach ($countries as $key => $value) {
            DB::table('countries')->insert($value);
        }
    }
}
