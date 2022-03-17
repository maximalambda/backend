<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CountryCodeController extends Controller
{
    public function index()
    {
        $json = [
            [
                "name"=> "Afghanistan",
                "alpha_code_2"=> "AF",
                "\"Alpha-3 code\""=> "AFG",
                "\"Numeric code\""=> "4",
                "\"Latitude (average)\""=> "33",
                "\"Longitude (average)\""=> "65"
            ],
            [
                "name"=> "Albania",
                "alpha_code_2"=> "AL",
                "\"Alpha-3 code\""=> "ALB",
                "\"Numeric code\""=> "8",
                "\"Latitude (average)\""=> "41",
                "\"Longitude (average)\""=> "20"
            ],
            [
                "name"=> "Algeria",
                "alpha_code_2"=> "DZ",
                "\"Alpha-3 code\""=> "DZA",
                "\"Numeric code\""=> "12",
                "\"Latitude (average)\""=> "28",
                "\"Longitude (average)\""=> "3"
            ],
            [
                "name"=> "American Samoa",
                "alpha_code_2"=> "AS",
                "\"Alpha-3 code\""=> "ASM",
                "\"Numeric code\""=> "16",
                "\"Latitude (average)\""=> "-14.3333",
                "\"Longitude (average)\""=> "-170"
            ],
            [
                "name"=> "Andorra",
                "alpha_code_2"=> "AD",
                "\"Alpha-3 code\""=> "AND",
                "\"Numeric code\""=> "20",
                "\"Latitude (average)\""=> "42.5",
                "\"Longitude (average)\""=> "1.6"
            ],
            [
                "name"=> "Angola",
                "alpha_code_2"=> "AO",
                "\"Alpha-3 code\""=> "AGO",
                "\"Numeric code\""=> "24",
                "\"Latitude (average)\""=> "-12.5",
                "\"Longitude (average)\""=> "18.5"
            ],
            [
                "name"=> "Anguilla",
                "alpha_code_2"=> "AI",
                "\"Alpha-3 code\""=> "AIA",
                "\"Numeric code\""=> "660",
                "\"Latitude (average)\""=> "18.25",
                "\"Longitude (average)\""=> "-63.1667"
            ],
            [
                "name"=> "Antarctica",
                "alpha_code_2"=> "AQ",
                "\"Alpha-3 code\""=> "ATA",
                "\"Numeric code\""=> "10",
                "\"Latitude (average)\""=> "-90",
                "\"Longitude (average)\""=> "0"
            ],
            [
                "name"=> "Antigua and Barbuda",
                "alpha_code_2"=> "AG",
                "\"Alpha-3 code\""=> "ATG",
                "\"Numeric code\""=> "28",
                "\"Latitude (average)\""=> "17.05",
                "\"Longitude (average)\""=> "-61.8"
            ],
            [
                "name"=> "Argentina",
                "alpha_code_2"=> "AR",
                "\"Alpha-3 code\""=> "ARG",
                "\"Numeric code\""=> "32",
                "\"Latitude (average)\""=> "-34",
                "\"Longitude (average)\""=> "-64"
            ],
            [
                "name"=> "Armenia",
                "alpha_code_2"=> "AM",
                "\"Alpha-3 code\""=> "ARM",
                "\"Numeric code\""=> "51",
                "\"Latitude (average)\""=> "40",
                "\"Longitude (average)\""=> "45"
            ],
            [
                "name"=> "Aruba",
                "alpha_code_2"=> "AW",
                "\"Alpha-3 code\""=> "ABW",
                "\"Numeric code\""=> "533",
                "\"Latitude (average)\""=> "12.5",
                "\"Longitude (average)\""=> "-69.9667"
            ],
            [
                "name"=> "Australia",
                "alpha_code_2"=> "AU",
                "\"Alpha-3 code\""=> "AUS",
                "\"Numeric code\""=> "36",
                "\"Latitude (average)\""=> "-27",
                "\"Longitude (average)\""=> "133"
            ],
            [
                "name"=> "Austria",
                "alpha_code_2"=> "AT",
                "\"Alpha-3 code\""=> "AUT",
                "\"Numeric code\""=> "40",
                "\"Latitude (average)\""=> "47.3333",
                "\"Longitude (average)\""=> "13.3333"
            ],
            [
                "name"=> "Azerbaijan",
                "alpha_code_2"=> "AZ",
                "\"Alpha-3 code\""=> "AZE",
                "\"Numeric code\""=> "31",
                "\"Latitude (average)\""=> "40.5",
                "\"Longitude (average)\""=> "47.5"
            ],
            [
                "name"=> "Bahamas",
                "alpha_code_2"=> "BS",
                "\"Alpha-3 code\""=> "BHS",
                "\"Numeric code\""=> "44",
                "\"Latitude (average)\""=> "24.25",
                "\"Longitude (average)\""=> "-76"
            ],
            [
                "name"=> "Bahrain",
                "alpha_code_2"=> "BH",
                "\"Alpha-3 code\""=> "BHR",
                "\"Numeric code\""=> "48",
                "\"Latitude (average)\""=> "26",
                "\"Longitude (average)\""=> "50.55"
            ],
            [
                "name"=> "Bangladesh",
                "alpha_code_2"=> "BD",
                "\"Alpha-3 code\""=> "BGD",
                "\"Numeric code\""=> "50",
                "\"Latitude (average)\""=> "24",
                "\"Longitude (average)\""=> "90"
            ],
            [
                "name"=> "Barbados",
                "alpha_code_2"=> "BB",
                "\"Alpha-3 code\""=> "BRB",
                "\"Numeric code\""=> "52",
                "\"Latitude (average)\""=> "13.1667",
                "\"Longitude (average)\""=> "-59.5333"
            ],
            [
                "name"=> "Belarus",
                "alpha_code_2"=> "BY",
                "\"Alpha-3 code\""=> "BLR",
                "\"Numeric code\""=> "112",
                "\"Latitude (average)\""=> "53",
                "\"Longitude (average)\""=> "28"
            ],
            [
                "name"=> "Belgium",
                "alpha_code_2"=> "BE",
                "\"Alpha-3 code\""=> "BEL",
                "\"Numeric code\""=> "56",
                "\"Latitude (average)\""=> "50.8333",
                "\"Longitude (average)\""=> "4"
            ],
            [
                "name"=> "Belize",
                "alpha_code_2"=> "BZ",
                "\"Alpha-3 code\""=> "BLZ",
                "\"Numeric code\""=> "84",
                "\"Latitude (average)\""=> "17.25",
                "\"Longitude (average)\""=> "-88.75"
            ],
            [
                "name"=> "Benin",
                "alpha_code_2"=> "BJ",
                "\"Alpha-3 code\""=> "BEN",
                "\"Numeric code\""=> "204",
                "\"Latitude (average)\""=> "9.5",
                "\"Longitude (average)\""=> "2.25"
            ],
            [
                "name"=> "Bermuda",
                "alpha_code_2"=> "BM",
                "\"Alpha-3 code\""=> "BMU",
                "\"Numeric code\""=> "60",
                "\"Latitude (average)\""=> "32.3333",
                "\"Longitude (average)\""=> "-64.75"
            ],
            [
                "name"=> "Bhutan",
                "alpha_code_2"=> "BT",
                "\"Alpha-3 code\""=> "BTN",
                "\"Numeric code\""=> "64",
                "\"Latitude (average)\""=> "27.5",
                "\"Longitude (average)\""=> "90.5"
            ],
            [
                "name"=> "Bolivia, Plurinational State of",
                "alpha_code_2"=> "BO",
                "\"Alpha-3 code\""=> "BOL",
                "\"Numeric code\""=> "68",
                "\"Latitude (average)\""=> "-17",
                "\"Longitude (average)\""=> "-65"
            ],
            [
                "name"=> "Bolivia",
                "alpha_code_2"=> "BO",
                "\"Alpha-3 code\""=> "BOL",
                "\"Numeric code\""=> "68",
                "\"Latitude (average)\""=> "-17",
                "\"Longitude (average)\""=> "-65"
            ],
            [
                "name"=> "Bosnia and Herzegovina",
                "alpha_code_2"=> "BA",
                "\"Alpha-3 code\""=> "BIH",
                "\"Numeric code\""=> "70",
                "\"Latitude (average)\""=> "44",
                "\"Longitude (average)\""=> "18"
            ],
            [
                "name"=> "Botswana",
                "alpha_code_2"=> "BW",
                "\"Alpha-3 code\""=> "BWA",
                "\"Numeric code\""=> "72",
                "\"Latitude (average)\""=> "-22",
                "\"Longitude (average)\""=> "24"
            ],
            [
                "name"=> "Bouvet Island",
                "alpha_code_2"=> "BV",
                "\"Alpha-3 code\""=> "BVT",
                "\"Numeric code\""=> "74",
                "\"Latitude (average)\""=> "-54.4333",
                "\"Longitude (average)\""=> "3.4"
            ],
            [
                "name"=> "Brazil",
                "alpha_code_2"=> "BR",
                "\"Alpha-3 code\""=> "BRA",
                "\"Numeric code\""=> "76",
                "\"Latitude (average)\""=> "-10",
                "\"Longitude (average)\""=> "-55"
            ],
            [
                "name"=> "British Indian Ocean Territory",
                "alpha_code_2"=> "IO",
                "\"Alpha-3 code\""=> "IOT",
                "\"Numeric code\""=> "86",
                "\"Latitude (average)\""=> "-6",
                "\"Longitude (average)\""=> "71.5"
            ],
            [
                "name"=> "Brunei Darussalam",
                "alpha_code_2"=> "BN",
                "\"Alpha-3 code\""=> "BRN",
                "\"Numeric code\""=> "96",
                "\"Latitude (average)\""=> "4.5",
                "\"Longitude (average)\""=> "114.6667"
            ],
            [
                "name"=> "Brunei",
                "alpha_code_2"=> "BN",
                "\"Alpha-3 code\""=> "BRN",
                "\"Numeric code\""=> "96",
                "\"Latitude (average)\""=> "4.5",
                "\"Longitude (average)\""=> "114.6667"
            ],
            [
                "name"=> "Bulgaria",
                "alpha_code_2"=> "BG",
                "\"Alpha-3 code\""=> "BGR",
                "\"Numeric code\""=> "100",
                "\"Latitude (average)\""=> "43",
                "\"Longitude (average)\""=> "25"
            ],
            [
                "name"=> "Burkina Faso",
                "alpha_code_2"=> "BF",
                "\"Alpha-3 code\""=> "BFA",
                "\"Numeric code\""=> "854",
                "\"Latitude (average)\""=> "13",
                "\"Longitude (average)\""=> "-2"
            ],
            [
                "name"=> "Burundi",
                "alpha_code_2"=> "BI",
                "\"Alpha-3 code\""=> "BDI",
                "\"Numeric code\""=> "108",
                "\"Latitude (average)\""=> "-3.5",
                "\"Longitude (average)\""=> "30"
            ],
            [
                "name"=> "Cambodia",
                "alpha_code_2"=> "KH",
                "\"Alpha-3 code\""=> "KHM",
                "\"Numeric code\""=> "116",
                "\"Latitude (average)\""=> "13",
                "\"Longitude (average)\""=> "105"
            ],
            [
                "name"=> "Cameroon",
                "alpha_code_2"=> "CM",
                "\"Alpha-3 code\""=> "CMR",
                "\"Numeric code\""=> "120",
                "\"Latitude (average)\""=> "6",
                "\"Longitude (average)\""=> "12"
            ],
            [
                "name"=> "Canada",
                "alpha_code_2"=> "CA",
                "\"Alpha-3 code\""=> "CAN",
                "\"Numeric code\""=> "124",
                "\"Latitude (average)\""=> "60",
                "\"Longitude (average)\""=> "-95"
            ],
            [
                "name"=> "Cape Verde",
                "alpha_code_2"=> "CV",
                "\"Alpha-3 code\""=> "CPV",
                "\"Numeric code\""=> "132",
                "\"Latitude (average)\""=> "16",
                "\"Longitude (average)\""=> "-24"
            ],
            [
                "name"=> "Cayman Islands",
                "alpha_code_2"=> "KY",
                "\"Alpha-3 code\""=> "CYM",
                "\"Numeric code\""=> "136",
                "\"Latitude (average)\""=> "19.5",
                "\"Longitude (average)\""=> "-80.5"
            ],
            [
                "name"=> "Central African Republic",
                "alpha_code_2"=> "CF",
                "\"Alpha-3 code\""=> "CAF",
                "\"Numeric code\""=> "140",
                "\"Latitude (average)\""=> "7",
                "\"Longitude (average)\""=> "21"
            ],
            [
                "name"=> "Chad",
                "alpha_code_2"=> "TD",
                "\"Alpha-3 code\""=> "TCD",
                "\"Numeric code\""=> "148",
                "\"Latitude (average)\""=> "15",
                "\"Longitude (average)\""=> "19"
            ],
            [
                "name"=> "Chile",
                "alpha_code_2"=> "CL",
                "\"Alpha-3 code\""=> "CHL",
                "\"Numeric code\""=> "152",
                "\"Latitude (average)\""=> "-30",
                "\"Longitude (average)\""=> "-71"
            ],
            [
                "name"=> "China",
                "alpha_code_2"=> "CN",
                "\"Alpha-3 code\""=> "CHN",
                "\"Numeric code\""=> "156",
                "\"Latitude (average)\""=> "35",
                "\"Longitude (average)\""=> "105"
            ],
            [
                "name"=> "Christmas Island",
                "alpha_code_2"=> "CX",
                "\"Alpha-3 code\""=> "CXR",
                "\"Numeric code\""=> "162",
                "\"Latitude (average)\""=> "-10.5",
                "\"Longitude (average)\""=> "105.6667"
            ],
            [
                "name"=> "Cocos (Keeling) Islands",
                "alpha_code_2"=> "CC",
                "\"Alpha-3 code\""=> "CCK",
                "\"Numeric code\""=> "166",
                "\"Latitude (average)\""=> "-12.5",
                "\"Longitude (average)\""=> "96.8333"
            ],
            [
                "name"=> "Colombia",
                "alpha_code_2"=> "CO",
                "\"Alpha-3 code\""=> "COL",
                "\"Numeric code\""=> "170",
                "\"Latitude (average)\""=> "4",
                "\"Longitude (average)\""=> "-72"
            ],
            [
                "name"=> "Comoros",
                "alpha_code_2"=> "KM",
                "\"Alpha-3 code\""=> "COM",
                "\"Numeric code\""=> "174",
                "\"Latitude (average)\""=> "-12.1667",
                "\"Longitude (average)\""=> "44.25"
            ],
            [
                "name"=> "Congo",
                "alpha_code_2"=> "CG",
                "\"Alpha-3 code\""=> "COG",
                "\"Numeric code\""=> "178",
                "\"Latitude (average)\""=> "-1",
                "\"Longitude (average)\""=> "15"
            ],
            [
                "name"=> "Congo, the Democratic Republic of the",
                "alpha_code_2"=> "CD",
                "\"Alpha-3 code\""=> "COD",
                "\"Numeric code\""=> "180",
                "\"Latitude (average)\""=> "0",
                "\"Longitude (average)\""=> "25"
            ],
            [
                "name"=> "Cook Islands",
                "alpha_code_2"=> "CK",
                "\"Alpha-3 code\""=> "COK",
                "\"Numeric code\""=> "184",
                "\"Latitude (average)\""=> "-21.2333",
                "\"Longitude (average)\""=> "-159.7667"
            ],
            [
                "name"=> "Costa Rica",
                "alpha_code_2"=> "CR",
                "\"Alpha-3 code\""=> "CRI",
                "\"Numeric code\""=> "188",
                "\"Latitude (average)\""=> "10",
                "\"Longitude (average)\""=> "-84"
            ],
            [
                "name"=> "Côte d'Ivoire",
                "alpha_code_2"=> "CI",
                "\"Alpha-3 code\""=> "CIV",
                "\"Numeric code\""=> "384",
                "\"Latitude (average)\""=> "8",
                "\"Longitude (average)\""=> "-5"
            ],
            [
                "name"=> "Ivory Coast",
                "alpha_code_2"=> "CI",
                "\"Alpha-3 code\""=> "CIV",
                "\"Numeric code\""=> "384",
                "\"Latitude (average)\""=> "8",
                "\"Longitude (average)\""=> "-5"
            ],
            [
                "name"=> "Croatia",
                "alpha_code_2"=> "HR",
                "\"Alpha-3 code\""=> "HRV",
                "\"Numeric code\""=> "191",
                "\"Latitude (average)\""=> "45.1667",
                "\"Longitude (average)\""=> "15.5"
            ],
            [
                "name"=> "Cuba",
                "alpha_code_2"=> "CU",
                "\"Alpha-3 code\""=> "CUB",
                "\"Numeric code\""=> "192",
                "\"Latitude (average)\""=> "21.5",
                "\"Longitude (average)\""=> "-80"
            ],
            [
                "name"=> "Cyprus",
                "alpha_code_2"=> "CY",
                "\"Alpha-3 code\""=> "CYP",
                "\"Numeric code\""=> "196",
                "\"Latitude (average)\""=> "35",
                "\"Longitude (average)\""=> "33"
            ],
            [
                "name"=> "Czech Republic",
                "alpha_code_2"=> "CZ",
                "\"Alpha-3 code\""=> "CZE",
                "\"Numeric code\""=> "203",
                "\"Latitude (average)\""=> "49.75",
                "\"Longitude (average)\""=> "15.5"
            ],
            [
                "name"=> "Denmark",
                "alpha_code_2"=> "DK",
                "\"Alpha-3 code\""=> "DNK",
                "\"Numeric code\""=> "208",
                "\"Latitude (average)\""=> "56",
                "\"Longitude (average)\""=> "10"
            ],
            [
                "name"=> "Djibouti",
                "alpha_code_2"=> "DJ",
                "\"Alpha-3 code\""=> "DJI",
                "\"Numeric code\""=> "262",
                "\"Latitude (average)\""=> "11.5",
                "\"Longitude (average)\""=> "43"
            ],
            [
                "name"=> "Dominica",
                "alpha_code_2"=> "DM",
                "\"Alpha-3 code\""=> "DMA",
                "\"Numeric code\""=> "212",
                "\"Latitude (average)\""=> "15.4167",
                "\"Longitude (average)\""=> "-61.3333"
            ],
            [
                "name"=> "Dominican Republic",
                "alpha_code_2"=> "DO",
                "\"Alpha-3 code\""=> "DOM",
                "\"Numeric code\""=> "214",
                "\"Latitude (average)\""=> "19",
                "\"Longitude (average)\""=> "-70.6667"
            ],
            [
                "name"=> "Ecuador",
                "alpha_code_2"=> "EC",
                "\"Alpha-3 code\""=> "ECU",
                "\"Numeric code\""=> "218",
                "\"Latitude (average)\""=> "-2",
                "\"Longitude (average)\""=> "-77.5"
            ],
            [
                "name"=> "Egypt",
                "alpha_code_2"=> "EG",
                "\"Alpha-3 code\""=> "EGY",
                "\"Numeric code\""=> "818",
                "\"Latitude (average)\""=> "27",
                "\"Longitude (average)\""=> "30"
            ],
            [
                "name"=> "El Salvador",
                "alpha_code_2"=> "SV",
                "\"Alpha-3 code\""=> "SLV",
                "\"Numeric code\""=> "222",
                "\"Latitude (average)\""=> "13.8333",
                "\"Longitude (average)\""=> "-88.9167"
            ],
            [
                "name"=> "Equatorial Guinea",
                "alpha_code_2"=> "GQ",
                "\"Alpha-3 code\""=> "GNQ",
                "\"Numeric code\""=> "226",
                "\"Latitude (average)\""=> "2",
                "\"Longitude (average)\""=> "10"
            ],
            [
                "name"=> "Eritrea",
                "alpha_code_2"=> "ER",
                "\"Alpha-3 code\""=> "ERI",
                "\"Numeric code\""=> "232",
                "\"Latitude (average)\""=> "15",
                "\"Longitude (average)\""=> "39"
            ],
            [
                "name"=> "Estonia",
                "alpha_code_2"=> "EE",
                "\"Alpha-3 code\""=> "EST",
                "\"Numeric code\""=> "233",
                "\"Latitude (average)\""=> "59",
                "\"Longitude (average)\""=> "26"
            ],
            [
                "name"=> "Ethiopia",
                "alpha_code_2"=> "ET",
                "\"Alpha-3 code\""=> "ETH",
                "\"Numeric code\""=> "231",
                "\"Latitude (average)\""=> "8",
                "\"Longitude (average)\""=> "38"
            ],
            [
                "name"=> "Falkland Islands (Malvinas)",
                "alpha_code_2"=> "FK",
                "\"Alpha-3 code\""=> "FLK",
                "\"Numeric code\""=> "238",
                "\"Latitude (average)\""=> "-51.75",
                "\"Longitude (average)\""=> "-59"
            ],
            [
                "name"=> "Faroe Islands",
                "alpha_code_2"=> "FO",
                "\"Alpha-3 code\""=> "FRO",
                "\"Numeric code\""=> "234",
                "\"Latitude (average)\""=> "62",
                "\"Longitude (average)\""=> "-7"
            ],
            [
                "name"=> "Fiji",
                "alpha_code_2"=> "FJ",
                "\"Alpha-3 code\""=> "FJI",
                "\"Numeric code\""=> "242",
                "\"Latitude (average)\""=> "-18",
                "\"Longitude (average)\""=> "175"
            ],
            [
                "name"=> "Finland",
                "alpha_code_2"=> "FI",
                "\"Alpha-3 code\""=> "FIN",
                "\"Numeric code\""=> "246",
                "\"Latitude (average)\""=> "64",
                "\"Longitude (average)\""=> "26"
            ],
            [
                "name"=> "France",
                "alpha_code_2"=> "FR",
                "\"Alpha-3 code\""=> "FRA",
                "\"Numeric code\""=> "250",
                "\"Latitude (average)\""=> "46",
                "\"Longitude (average)\""=> "2"
            ],
            [
                "name"=> "French Guiana",
                "alpha_code_2"=> "GF",
                "\"Alpha-3 code\""=> "GUF",
                "\"Numeric code\""=> "254",
                "\"Latitude (average)\""=> "4",
                "\"Longitude (average)\""=> "-53"
            ],
            [
                "name"=> "French Polynesia",
                "alpha_code_2"=> "PF",
                "\"Alpha-3 code\""=> "PYF",
                "\"Numeric code\""=> "258",
                "\"Latitude (average)\""=> "-15",
                "\"Longitude (average)\""=> "-140"
            ],
            [
                "name"=> "French Southern Territories",
                "alpha_code_2"=> "TF",
                "\"Alpha-3 code\""=> "ATF",
                "\"Numeric code\""=> "260",
                "\"Latitude (average)\""=> "-43",
                "\"Longitude (average)\""=> "67"
            ],
            [
                "name"=> "Gabon",
                "alpha_code_2"=> "GA",
                "\"Alpha-3 code\""=> "GAB",
                "\"Numeric code\""=> "266",
                "\"Latitude (average)\""=> "-1",
                "\"Longitude (average)\""=> "11.75"
            ],
            [
                "name"=> "Gambia",
                "alpha_code_2"=> "GM",
                "\"Alpha-3 code\""=> "GMB",
                "\"Numeric code\""=> "270",
                "\"Latitude (average)\""=> "13.4667",
                "\"Longitude (average)\""=> "-16.5667"
            ],
            [
                "name"=> "Georgia",
                "alpha_code_2"=> "GE",
                "\"Alpha-3 code\""=> "GEO",
                "\"Numeric code\""=> "268",
                "\"Latitude (average)\""=> "42",
                "\"Longitude (average)\""=> "43.5"
            ],
            [
                "name"=> "Germany",
                "alpha_code_2"=> "DE",
                "\"Alpha-3 code\""=> "DEU",
                "\"Numeric code\""=> "276",
                "\"Latitude (average)\""=> "51",
                "\"Longitude (average)\""=> "9"
            ],
            [
                "name"=> "Ghana",
                "alpha_code_2"=> "GH",
                "\"Alpha-3 code\""=> "GHA",
                "\"Numeric code\""=> "288",
                "\"Latitude (average)\""=> "8",
                "\"Longitude (average)\""=> "-2"
            ],
            [
                "name"=> "Gibraltar",
                "alpha_code_2"=> "GI",
                "\"Alpha-3 code\""=> "GIB",
                "\"Numeric code\""=> "292",
                "\"Latitude (average)\""=> "36.1833",
                "\"Longitude (average)\""=> "-5.3667"
            ],
            [
                "name"=> "Greece",
                "alpha_code_2"=> "GR",
                "\"Alpha-3 code\""=> "GRC",
                "\"Numeric code\""=> "300",
                "\"Latitude (average)\""=> "39",
                "\"Longitude (average)\""=> "22"
            ],
            [
                "name"=> "Greenland",
                "alpha_code_2"=> "GL",
                "\"Alpha-3 code\""=> "GRL",
                "\"Numeric code\""=> "304",
                "\"Latitude (average)\""=> "72",
                "\"Longitude (average)\""=> "-40"
            ],
            [
                "name"=> "Grenada",
                "alpha_code_2"=> "GD",
                "\"Alpha-3 code\""=> "GRD",
                "\"Numeric code\""=> "308",
                "\"Latitude (average)\""=> "12.1167",
                "\"Longitude (average)\""=> "-61.6667"
            ],
            [
                "name"=> "Guadeloupe",
                "alpha_code_2"=> "GP",
                "\"Alpha-3 code\""=> "GLP",
                "\"Numeric code\""=> "312",
                "\"Latitude (average)\""=> "16.25",
                "\"Longitude (average)\""=> "-61.5833"
            ],
            [
                "name"=> "Guam",
                "alpha_code_2"=> "GU",
                "\"Alpha-3 code\""=> "GUM",
                "\"Numeric code\""=> "316",
                "\"Latitude (average)\""=> "13.4667",
                "\"Longitude (average)\""=> "144.7833"
            ],
            [
                "name"=> "Guatemala",
                "alpha_code_2"=> "GT",
                "\"Alpha-3 code\""=> "GTM",
                "\"Numeric code\""=> "320",
                "\"Latitude (average)\""=> "15.5",
                "\"Longitude (average)\""=> "-90.25"
            ],
            [
                "name"=> "Guernsey",
                "alpha_code_2"=> "GG",
                "\"Alpha-3 code\""=> "GGY",
                "\"Numeric code\""=> "831",
                "\"Latitude (average)\""=> "49.5",
                "\"Longitude (average)\""=> "-2.56"
            ],
            [
                "name"=> "Guinea",
                "alpha_code_2"=> "GN",
                "\"Alpha-3 code\""=> "GIN",
                "\"Numeric code\""=> "324",
                "\"Latitude (average)\""=> "11",
                "\"Longitude (average)\""=> "-10"
            ],
            [
                "name"=> "Guinea-Bissau",
                "alpha_code_2"=> "GW",
                "\"Alpha-3 code\""=> "GNB",
                "\"Numeric code\""=> "624",
                "\"Latitude (average)\""=> "12",
                "\"Longitude (average)\""=> "-15"
            ],
            [
                "name"=> "Guyana",
                "alpha_code_2"=> "GY",
                "\"Alpha-3 code\""=> "GUY",
                "\"Numeric code\""=> "328",
                "\"Latitude (average)\""=> "5",
                "\"Longitude (average)\""=> "-59"
            ],
            [
                "name"=> "Haiti",
                "alpha_code_2"=> "HT",
                "\"Alpha-3 code\""=> "HTI",
                "\"Numeric code\""=> "332",
                "\"Latitude (average)\""=> "19",
                "\"Longitude (average)\""=> "-72.4167"
            ],
            [
                "name"=> "Heard Island and McDonald Islands",
                "alpha_code_2"=> "HM",
                "\"Alpha-3 code\""=> "HMD",
                "\"Numeric code\""=> "334",
                "\"Latitude (average)\""=> "-53.1",
                "\"Longitude (average)\""=> "72.5167"
            ],
            [
                "name"=> "Holy See (Vatican City State)",
                "alpha_code_2"=> "VA",
                "\"Alpha-3 code\""=> "VAT",
                "\"Numeric code\""=> "336",
                "\"Latitude (average)\""=> "41.9",
                "\"Longitude (average)\""=> "12.45"
            ],
            [
                "name"=> "Honduras",
                "alpha_code_2"=> "HN",
                "\"Alpha-3 code\""=> "HND",
                "\"Numeric code\""=> "340",
                "\"Latitude (average)\""=> "15",
                "\"Longitude (average)\""=> "-86.5"
            ],
            [
                "name"=> "Hong Kong",
                "alpha_code_2"=> "HK",
                "\"Alpha-3 code\""=> "HKG",
                "\"Numeric code\""=> "344",
                "\"Latitude (average)\""=> "22.25",
                "\"Longitude (average)\""=> "114.1667"
            ],
            [
                "name"=> "Hungary",
                "alpha_code_2"=> "HU",
                "\"Alpha-3 code\""=> "HUN",
                "\"Numeric code\""=> "348",
                "\"Latitude (average)\""=> "47",
                "\"Longitude (average)\""=> "20"
            ],
            [
                "name"=> "Iceland",
                "alpha_code_2"=> "IS",
                "\"Alpha-3 code\""=> "ISL",
                "\"Numeric code\""=> "352",
                "\"Latitude (average)\""=> "65",
                "\"Longitude (average)\""=> "-18"
            ],
            [
                "name"=> "India",
                "alpha_code_2"=> "IN",
                "\"Alpha-3 code\""=> "IND",
                "\"Numeric code\""=> "356",
                "\"Latitude (average)\""=> "20",
                "\"Longitude (average)\""=> "77"
            ],
            [
                "name"=> "Indonesia",
                "alpha_code_2"=> "ID",
                "\"Alpha-3 code\""=> "IDN",
                "\"Numeric code\""=> "360",
                "\"Latitude (average)\""=> "-5",
                "\"Longitude (average)\""=> "120"
            ],
            [
                "name"=> "Iran, Islamic Republic of",
                "alpha_code_2"=> "IR",
                "\"Alpha-3 code\""=> "IRN",
                "\"Numeric code\""=> "364",
                "\"Latitude (average)\""=> "32",
                "\"Longitude (average)\""=> "53"
            ],
            [
                "name"=> "Iraq",
                "alpha_code_2"=> "IQ",
                "\"Alpha-3 code\""=> "IRQ",
                "\"Numeric code\""=> "368",
                "\"Latitude (average)\""=> "33",
                "\"Longitude (average)\""=> "44"
            ],
            [
                "name"=> "Ireland",
                "alpha_code_2"=> "IE",
                "\"Alpha-3 code\""=> "IRL",
                "\"Numeric code\""=> "372",
                "\"Latitude (average)\""=> "53",
                "\"Longitude (average)\""=> "-8"
            ],
            [
                "name"=> "Isle of Man",
                "alpha_code_2"=> "IM",
                "\"Alpha-3 code\""=> "IMN",
                "\"Numeric code\""=> "833",
                "\"Latitude (average)\""=> "54.23",
                "\"Longitude (average)\""=> "-4.55"
            ],
            [
                "name"=> "Israel",
                "alpha_code_2"=> "IL",
                "\"Alpha-3 code\""=> "ISR",
                "\"Numeric code\""=> "376",
                "\"Latitude (average)\""=> "31.5",
                "\"Longitude (average)\""=> "34.75"
            ],
            [
                "name"=> "Italy",
                "alpha_code_2"=> "IT",
                "\"Alpha-3 code\""=> "ITA",
                "\"Numeric code\""=> "380",
                "\"Latitude (average)\""=> "42.8333",
                "\"Longitude (average)\""=> "12.8333"
            ],
            [
                "name"=> "Jamaica",
                "alpha_code_2"=> "JM",
                "\"Alpha-3 code\""=> "JAM",
                "\"Numeric code\""=> "388",
                "\"Latitude (average)\""=> "18.25",
                "\"Longitude (average)\""=> "-77.5"
            ],
            [
                "name"=> "Japan",
                "alpha_code_2"=> "JP",
                "\"Alpha-3 code\""=> "JPN",
                "\"Numeric code\""=> "392",
                "\"Latitude (average)\""=> "36",
                "\"Longitude (average)\""=> "138"
            ],
            [
                "name"=> "Jersey",
                "alpha_code_2"=> "JE",
                "\"Alpha-3 code\""=> "JEY",
                "\"Numeric code\""=> "832",
                "\"Latitude (average)\""=> "49.21",
                "\"Longitude (average)\""=> "-2.13"
            ],
            [
                "name"=> "Jordan",
                "alpha_code_2"=> "JO",
                "\"Alpha-3 code\""=> "JOR",
                "\"Numeric code\""=> "400",
                "\"Latitude (average)\""=> "31",
                "\"Longitude (average)\""=> "36"
            ],
            [
                "name"=> "Kazakhstan",
                "alpha_code_2"=> "KZ",
                "\"Alpha-3 code\""=> "KAZ",
                "\"Numeric code\""=> "398",
                "\"Latitude (average)\""=> "48",
                "\"Longitude (average)\""=> "68"
            ],
            [
                "name"=> "Kenya",
                "alpha_code_2"=> "KE",
                "\"Alpha-3 code\""=> "KEN",
                "\"Numeric code\""=> "404",
                "\"Latitude (average)\""=> "1",
                "\"Longitude (average)\""=> "38"
            ],
            [
                "name"=> "Kiribati",
                "alpha_code_2"=> "KI",
                "\"Alpha-3 code\""=> "KIR",
                "\"Numeric code\""=> "296",
                "\"Latitude (average)\""=> "1.4167",
                "\"Longitude (average)\""=> "173"
            ],
            [
                "name"=> "Korea, Democratic People's Republic of",
                "alpha_code_2"=> "KP",
                "\"Alpha-3 code\""=> "PRK",
                "\"Numeric code\""=> "408",
                "\"Latitude (average)\""=> "40",
                "\"Longitude (average)\""=> "127"
            ],
            [
                "name"=> "Korea, Republic of",
                "alpha_code_2"=> "KR",
                "\"Alpha-3 code\""=> "KOR",
                "\"Numeric code\""=> "410",
                "\"Latitude (average)\""=> "37",
                "\"Longitude (average)\""=> "127.5"
            ],
            [
                "name"=> "South Korea",
                "alpha_code_2"=> "KR",
                "\"Alpha-3 code\""=> "KOR",
                "\"Numeric code\""=> "410",
                "\"Latitude (average)\""=> "37",
                "\"Longitude (average)\""=> "127.5"
            ],
            [
                "name"=> "Kuwait",
                "alpha_code_2"=> "KW",
                "\"Alpha-3 code\""=> "KWT",
                "\"Numeric code\""=> "414",
                "\"Latitude (average)\""=> "29.3375",
                "\"Longitude (average)\""=> "47.6581"
            ],
            [
                "name"=> "Kyrgyzstan",
                "alpha_code_2"=> "KG",
                "\"Alpha-3 code\""=> "KGZ",
                "\"Numeric code\""=> "417",
                "\"Latitude (average)\""=> "41",
                "\"Longitude (average)\""=> "75"
            ],
            [
                "name"=> "Lao People's Democratic Republic",
                "alpha_code_2"=> "LA",
                "\"Alpha-3 code\""=> "LAO",
                "\"Numeric code\""=> "418",
                "\"Latitude (average)\""=> "18",
                "\"Longitude (average)\""=> "105"
            ],
            [
                "name"=> "Latvia",
                "alpha_code_2"=> "LV",
                "\"Alpha-3 code\""=> "LVA",
                "\"Numeric code\""=> "428",
                "\"Latitude (average)\""=> "57",
                "\"Longitude (average)\""=> "25"
            ],
            [
                "name"=> "Lebanon",
                "alpha_code_2"=> "LB",
                "\"Alpha-3 code\""=> "LBN",
                "\"Numeric code\""=> "422",
                "\"Latitude (average)\""=> "33.8333",
                "\"Longitude (average)\""=> "35.8333"
            ],
            [
                "name"=> "Lesotho",
                "alpha_code_2"=> "LS",
                "\"Alpha-3 code\""=> "LSO",
                "\"Numeric code\""=> "426",
                "\"Latitude (average)\""=> "-29.5",
                "\"Longitude (average)\""=> "28.5"
            ],
            [
                "name"=> "Liberia",
                "alpha_code_2"=> "LR",
                "\"Alpha-3 code\""=> "LBR",
                "\"Numeric code\""=> "430",
                "\"Latitude (average)\""=> "6.5",
                "\"Longitude (average)\""=> "-9.5"
            ],
            [
                "name"=> "Libyan Arab Jamahiriya",
                "alpha_code_2"=> "LY",
                "\"Alpha-3 code\""=> "LBY",
                "\"Numeric code\""=> "434",
                "\"Latitude (average)\""=> "25",
                "\"Longitude (average)\""=> "17"
            ],
            [
                "name"=> "Libya",
                "alpha_code_2"=> "LY",
                "\"Alpha-3 code\""=> "LBY",
                "\"Numeric code\""=> "434",
                "\"Latitude (average)\""=> "25",
                "\"Longitude (average)\""=> "17"
            ],
            [
                "name"=> "Liechtenstein",
                "alpha_code_2"=> "LI",
                "\"Alpha-3 code\""=> "LIE",
                "\"Numeric code\""=> "438",
                "\"Latitude (average)\""=> "47.1667",
                "\"Longitude (average)\""=> "9.5333"
            ],
            [
                "name"=> "Lithuania",
                "alpha_code_2"=> "LT",
                "\"Alpha-3 code\""=> "LTU",
                "\"Numeric code\""=> "440",
                "\"Latitude (average)\""=> "56",
                "\"Longitude (average)\""=> "24"
            ],
            [
                "name"=> "Luxembourg",
                "alpha_code_2"=> "LU",
                "\"Alpha-3 code\""=> "LUX",
                "\"Numeric code\""=> "442",
                "\"Latitude (average)\""=> "49.75",
                "\"Longitude (average)\""=> "6.1667"
            ],
            [
                "name"=> "Macao",
                "alpha_code_2"=> "MO",
                "\"Alpha-3 code\""=> "MAC",
                "\"Numeric code\""=> "446",
                "\"Latitude (average)\""=> "22.1667",
                "\"Longitude (average)\""=> "113.55"
            ],
            [
                "name"=> "Macedonia, the former Yugoslav Republic of",
                "alpha_code_2"=> "MK",
                "\"Alpha-3 code\""=> "MKD",
                "\"Numeric code\""=> "807",
                "\"Latitude (average)\""=> "41.8333",
                "\"Longitude (average)\""=> "22"
            ],
            [
                "name"=> "Madagascar",
                "alpha_code_2"=> "MG",
                "\"Alpha-3 code\""=> "MDG",
                "\"Numeric code\""=> "450",
                "\"Latitude (average)\""=> "-20",
                "\"Longitude (average)\""=> "47"
            ],
            [
                "name"=> "Malawi",
                "alpha_code_2"=> "MW",
                "\"Alpha-3 code\""=> "MWI",
                "\"Numeric code\""=> "454",
                "\"Latitude (average)\""=> "-13.5",
                "\"Longitude (average)\""=> "34"
            ],
            [
                "name"=> "Malaysia",
                "alpha_code_2"=> "MY",
                "\"Alpha-3 code\""=> "MYS",
                "\"Numeric code\""=> "458",
                "\"Latitude (average)\""=> "2.5",
                "\"Longitude (average)\""=> "112.5"
            ],
            [
                "name"=> "Maldives",
                "alpha_code_2"=> "MV",
                "\"Alpha-3 code\""=> "MDV",
                "\"Numeric code\""=> "462",
                "\"Latitude (average)\""=> "3.25",
                "\"Longitude (average)\""=> "73"
            ],
            [
                "name"=> "Mali",
                "alpha_code_2"=> "ML",
                "\"Alpha-3 code\""=> "MLI",
                "\"Numeric code\""=> "466",
                "\"Latitude (average)\""=> "17",
                "\"Longitude (average)\""=> "-4"
            ],
            [
                "name"=> "Malta",
                "alpha_code_2"=> "MT",
                "\"Alpha-3 code\""=> "MLT",
                "\"Numeric code\""=> "470",
                "\"Latitude (average)\""=> "35.8333",
                "\"Longitude (average)\""=> "14.5833"
            ],
            [
                "name"=> "Marshall Islands",
                "alpha_code_2"=> "MH",
                "\"Alpha-3 code\""=> "MHL",
                "\"Numeric code\""=> "584",
                "\"Latitude (average)\""=> "9",
                "\"Longitude (average)\""=> "168"
            ],
            [
                "name"=> "Martinique",
                "alpha_code_2"=> "MQ",
                "\"Alpha-3 code\""=> "MTQ",
                "\"Numeric code\""=> "474",
                "\"Latitude (average)\""=> "14.6667",
                "\"Longitude (average)\""=> "-61"
            ],
            [
                "name"=> "Mauritania",
                "alpha_code_2"=> "MR",
                "\"Alpha-3 code\""=> "MRT",
                "\"Numeric code\""=> "478",
                "\"Latitude (average)\""=> "20",
                "\"Longitude (average)\""=> "-12"
            ],
            [
                "name"=> "Mauritius",
                "alpha_code_2"=> "MU",
                "\"Alpha-3 code\""=> "MUS",
                "\"Numeric code\""=> "480",
                "\"Latitude (average)\""=> "-20.2833",
                "\"Longitude (average)\""=> "57.55"
            ],
            [
                "name"=> "Mayotte",
                "alpha_code_2"=> "YT",
                "\"Alpha-3 code\""=> "MYT",
                "\"Numeric code\""=> "175",
                "\"Latitude (average)\""=> "-12.8333",
                "\"Longitude (average)\""=> "45.1667"
            ],
            [
                "name"=> "Mexico",
                "alpha_code_2"=> "MX",
                "\"Alpha-3 code\""=> "MEX",
                "\"Numeric code\""=> "484",
                "\"Latitude (average)\""=> "23",
                "\"Longitude (average)\""=> "-102"
            ],
            [
                "name"=> "Micronesia, Federated States of",
                "alpha_code_2"=> "FM",
                "\"Alpha-3 code\""=> "FSM",
                "\"Numeric code\""=> "583",
                "\"Latitude (average)\""=> "6.9167",
                "\"Longitude (average)\""=> "158.25"
            ],
            [
                "name"=> "Moldova, Republic of",
                "alpha_code_2"=> "MD",
                "\"Alpha-3 code\""=> "MDA",
                "\"Numeric code\""=> "498",
                "\"Latitude (average)\""=> "47",
                "\"Longitude (average)\""=> "29"
            ],
            [
                "name"=> "Monaco",
                "alpha_code_2"=> "MC",
                "\"Alpha-3 code\""=> "MCO",
                "\"Numeric code\""=> "492",
                "\"Latitude (average)\""=> "43.7333",
                "\"Longitude (average)\""=> "7.4"
            ],
            [
                "name"=> "Mongolia",
                "alpha_code_2"=> "MN",
                "\"Alpha-3 code\""=> "MNG",
                "\"Numeric code\""=> "496",
                "\"Latitude (average)\""=> "46",
                "\"Longitude (average)\""=> "105"
            ],
            [
                "name"=> "Montenegro",
                "alpha_code_2"=> "ME",
                "\"Alpha-3 code\""=> "MNE",
                "\"Numeric code\""=> "499",
                "\"Latitude (average)\""=> "42",
                "\"Longitude (average)\""=> "19"
            ],
            [
                "name"=> "Montserrat",
                "alpha_code_2"=> "MS",
                "\"Alpha-3 code\""=> "MSR",
                "\"Numeric code\""=> "500",
                "\"Latitude (average)\""=> "16.75",
                "\"Longitude (average)\""=> "-62.2"
            ],
            [
                "name"=> "Morocco",
                "alpha_code_2"=> "MA",
                "\"Alpha-3 code\""=> "MAR",
                "\"Numeric code\""=> "504",
                "\"Latitude (average)\""=> "32",
                "\"Longitude (average)\""=> "-5"
            ],
            [
                "name"=> "Mozambique",
                "alpha_code_2"=> "MZ",
                "\"Alpha-3 code\""=> "MOZ",
                "\"Numeric code\""=> "508",
                "\"Latitude (average)\""=> "-18.25",
                "\"Longitude (average)\""=> "35"
            ],
            [
                "name"=> "Myanmar",
                "alpha_code_2"=> "MM",
                "\"Alpha-3 code\""=> "MMR",
                "\"Numeric code\""=> "104",
                "\"Latitude (average)\""=> "22",
                "\"Longitude (average)\""=> "98"
            ],
            [
                "name"=> "Burma",
                "alpha_code_2"=> "MM",
                "\"Alpha-3 code\""=> "MMR",
                "\"Numeric code\""=> "104",
                "\"Latitude (average)\""=> "22",
                "\"Longitude (average)\""=> "98"
            ],
            [
                "name"=> "Namibia",
                "alpha_code_2"=> "NA",
                "\"Alpha-3 code\""=> "NAM",
                "\"Numeric code\""=> "516",
                "\"Latitude (average)\""=> "-22",
                "\"Longitude (average)\""=> "17"
            ],
            [
                "name"=> "Nauru",
                "alpha_code_2"=> "NR",
                "\"Alpha-3 code\""=> "NRU",
                "\"Numeric code\""=> "520",
                "\"Latitude (average)\""=> "-0.5333",
                "\"Longitude (average)\""=> "166.9167"
            ],
            [
                "name"=> "Nepal",
                "alpha_code_2"=> "NP",
                "\"Alpha-3 code\""=> "NPL",
                "\"Numeric code\""=> "524",
                "\"Latitude (average)\""=> "28",
                "\"Longitude (average)\""=> "84"
            ],
            [
                "name"=> "Netherlands",
                "alpha_code_2"=> "NL",
                "\"Alpha-3 code\""=> "NLD",
                "\"Numeric code\""=> "528",
                "\"Latitude (average)\""=> "52.5",
                "\"Longitude (average)\""=> "5.75"
            ],
            [
                "name"=> "Netherlands Antilles",
                "alpha_code_2"=> "AN",
                "\"Alpha-3 code\""=> "ANT",
                "\"Numeric code\""=> "530",
                "\"Latitude (average)\""=> "12.25",
                "\"Longitude (average)\""=> "-68.75"
            ],
            [
                "name"=> "New Caledonia",
                "alpha_code_2"=> "NC",
                "\"Alpha-3 code\""=> "NCL",
                "\"Numeric code\""=> "540",
                "\"Latitude (average)\""=> "-21.5",
                "\"Longitude (average)\""=> "165.5"
            ],
            [
                "name"=> "New Zealand",
                "alpha_code_2"=> "NZ",
                "\"Alpha-3 code\""=> "NZL",
                "\"Numeric code\""=> "554",
                "\"Latitude (average)\""=> "-41",
                "\"Longitude (average)\""=> "174"
            ],
            [
                "name"=> "Nicaragua",
                "alpha_code_2"=> "NI",
                "\"Alpha-3 code\""=> "NIC",
                "\"Numeric code\""=> "558",
                "\"Latitude (average)\""=> "13",
                "\"Longitude (average)\""=> "-85"
            ],
            [
                "name"=> "Niger",
                "alpha_code_2"=> "NE",
                "\"Alpha-3 code\""=> "NER",
                "\"Numeric code\""=> "562",
                "\"Latitude (average)\""=> "16",
                "\"Longitude (average)\""=> "8"
            ],
            [
                "name"=> "Nigeria",
                "alpha_code_2"=> "NG",
                "\"Alpha-3 code\""=> "NGA",
                "\"Numeric code\""=> "566",
                "\"Latitude (average)\""=> "10",
                "\"Longitude (average)\""=> "8"
            ],
            [
                "name"=> "Niue",
                "alpha_code_2"=> "NU",
                "\"Alpha-3 code\""=> "NIU",
                "\"Numeric code\""=> "570",
                "\"Latitude (average)\""=> "-19.0333",
                "\"Longitude (average)\""=> "-169.8667"
            ],
            [
                "name"=> "Norfolk Island",
                "alpha_code_2"=> "NF",
                "\"Alpha-3 code\""=> "NFK",
                "\"Numeric code\""=> "574",
                "\"Latitude (average)\""=> "-29.0333",
                "\"Longitude (average)\""=> "167.95"
            ],
            [
                "name"=> "Northern Mariana Islands",
                "alpha_code_2"=> "MP",
                "\"Alpha-3 code\""=> "MNP",
                "\"Numeric code\""=> "580",
                "\"Latitude (average)\""=> "15.2",
                "\"Longitude (average)\""=> "145.75"
            ],
            [
                "name"=> "Norway",
                "alpha_code_2"=> "NO",
                "\"Alpha-3 code\""=> "NOR",
                "\"Numeric code\""=> "578",
                "\"Latitude (average)\""=> "62",
                "\"Longitude (average)\""=> "10"
            ],
            [
                "name"=> "Oman",
                "alpha_code_2"=> "OM",
                "\"Alpha-3 code\""=> "OMN",
                "\"Numeric code\""=> "512",
                "\"Latitude (average)\""=> "21",
                "\"Longitude (average)\""=> "57"
            ],
            [
                "name"=> "Pakistan",
                "alpha_code_2"=> "PK",
                "\"Alpha-3 code\""=> "PAK",
                "\"Numeric code\""=> "586",
                "\"Latitude (average)\""=> "30",
                "\"Longitude (average)\""=> "70"
            ],
            [
                "name"=> "Palau",
                "alpha_code_2"=> "PW",
                "\"Alpha-3 code\""=> "PLW",
                "\"Numeric code\""=> "585",
                "\"Latitude (average)\""=> "7.5",
                "\"Longitude (average)\""=> "134.5"
            ],
            [
                "name"=> "Palestinian Territory, Occupied",
                "alpha_code_2"=> "PS",
                "\"Alpha-3 code\""=> "PSE",
                "\"Numeric code\""=> "275",
                "\"Latitude (average)\""=> "32",
                "\"Longitude (average)\""=> "35.25"
            ],
            [
                "name"=> "Panama",
                "alpha_code_2"=> "PA",
                "\"Alpha-3 code\""=> "PAN",
                "\"Numeric code\""=> "591",
                "\"Latitude (average)\""=> "9",
                "\"Longitude (average)\""=> "-80"
            ],
            [
                "name"=> "Papua New Guinea",
                "alpha_code_2"=> "PG",
                "\"Alpha-3 code\""=> "PNG",
                "\"Numeric code\""=> "598",
                "\"Latitude (average)\""=> "-6",
                "\"Longitude (average)\""=> "147"
            ],
            [
                "name"=> "Paraguay",
                "alpha_code_2"=> "PY",
                "\"Alpha-3 code\""=> "PRY",
                "\"Numeric code\""=> "600",
                "\"Latitude (average)\""=> "-23",
                "\"Longitude (average)\""=> "-58"
            ],
            [
                "name"=> "Peru",
                "alpha_code_2"=> "PE",
                "\"Alpha-3 code\""=> "PER",
                "\"Numeric code\""=> "604",
                "\"Latitude (average)\""=> "-10",
                "\"Longitude (average)\""=> "-76"
            ],
            [
                "name"=> "Philippines",
                "alpha_code_2"=> "PH",
                "\"Alpha-3 code\""=> "PHL",
                "\"Numeric code\""=> "608",
                "\"Latitude (average)\""=> "13",
                "\"Longitude (average)\""=> "122"
            ],
            [
                "name"=> "Pitcairn",
                "alpha_code_2"=> "PN",
                "\"Alpha-3 code\""=> "PCN",
                "\"Numeric code\""=> "612",
                "\"Latitude (average)\""=> "-24.7",
                "\"Longitude (average)\""=> "-127.4"
            ],
            [
                "name"=> "Poland",
                "alpha_code_2"=> "PL",
                "\"Alpha-3 code\""=> "POL",
                "\"Numeric code\""=> "616",
                "\"Latitude (average)\""=> "52",
                "\"Longitude (average)\""=> "20"
            ],
            [
                "name"=> "Portugal",
                "alpha_code_2"=> "PT",
                "\"Alpha-3 code\""=> "PRT",
                "\"Numeric code\""=> "620",
                "\"Latitude (average)\""=> "39.5",
                "\"Longitude (average)\""=> "-8"
            ],
            [
                "name"=> "Puerto Rico",
                "alpha_code_2"=> "PR",
                "\"Alpha-3 code\""=> "PRI",
                "\"Numeric code\""=> "630",
                "\"Latitude (average)\""=> "18.25",
                "\"Longitude (average)\""=> "-66.5"
            ],
            [
                "name"=> "Qatar",
                "alpha_code_2"=> "QA",
                "\"Alpha-3 code\""=> "QAT",
                "\"Numeric code\""=> "634",
                "\"Latitude (average)\""=> "25.5",
                "\"Longitude (average)\""=> "51.25"
            ],
            [
                "name"=> "Réunion",
                "alpha_code_2"=> "RE",
                "\"Alpha-3 code\""=> "REU",
                "\"Numeric code\""=> "638",
                "\"Latitude (average)\""=> "-21.1",
                "\"Longitude (average)\""=> "55.6"
            ],
            [
                "name"=> "Romania",
                "alpha_code_2"=> "RO",
                "\"Alpha-3 code\""=> "ROU",
                "\"Numeric code\""=> "642",
                "\"Latitude (average)\""=> "46",
                "\"Longitude (average)\""=> "25"
            ],
            [
                "name"=> "Russian Federation",
                "alpha_code_2"=> "RU",
                "\"Alpha-3 code\""=> "RUS",
                "\"Numeric code\""=> "643",
                "\"Latitude (average)\""=> "60",
                "\"Longitude (average)\""=> "100"
            ],
            [
                "name"=> "Russia",
                "alpha_code_2"=> "RU",
                "\"Alpha-3 code\""=> "RUS",
                "\"Numeric code\""=> "643",
                "\"Latitude (average)\""=> "60",
                "\"Longitude (average)\""=> "100"
            ],
            [
                "name"=> "Rwanda",
                "alpha_code_2"=> "RW",
                "\"Alpha-3 code\""=> "RWA",
                "\"Numeric code\""=> "646",
                "\"Latitude (average)\""=> "-2",
                "\"Longitude (average)\""=> "30"
            ],
            [
                "name"=> "Saint Helena, Ascension and Tristan da Cunha",
                "alpha_code_2"=> "SH",
                "\"Alpha-3 code\""=> "SHN",
                "\"Numeric code\""=> "654",
                "\"Latitude (average)\""=> "-15.9333",
                "\"Longitude (average)\""=> "-5.7"
            ],
            [
                "name"=> "Saint Kitts and Nevis",
                "alpha_code_2"=> "KN",
                "\"Alpha-3 code\""=> "KNA",
                "\"Numeric code\""=> "659",
                "\"Latitude (average)\""=> "17.3333",
                "\"Longitude (average)\""=> "-62.75"
            ],
            [
                "name"=> "Saint Lucia",
                "alpha_code_2"=> "LC",
                "\"Alpha-3 code\""=> "LCA",
                "\"Numeric code\""=> "662",
                "\"Latitude (average)\""=> "13.8833",
                "\"Longitude (average)\""=> "-61.1333"
            ],
            [
                "name"=> "Saint Pierre and Miquelon",
                "alpha_code_2"=> "PM",
                "\"Alpha-3 code\""=> "SPM",
                "\"Numeric code\""=> "666",
                "\"Latitude (average)\""=> "46.8333",
                "\"Longitude (average)\""=> "-56.3333"
            ],
            [
                "name"=> "Saint Vincent and the Grenadines",
                "alpha_code_2"=> "VC",
                "\"Alpha-3 code\""=> "VCT",
                "\"Numeric code\""=> "670",
                "\"Latitude (average)\""=> "13.25",
                "\"Longitude (average)\""=> "-61.2"
            ],
            [
                "name"=> "Saint Vincent & the Grenadines",
                "alpha_code_2"=> "VC",
                "\"Alpha-3 code\""=> "VCT",
                "\"Numeric code\""=> "670",
                "\"Latitude (average)\""=> "13.25",
                "\"Longitude (average)\""=> "-61.2"
            ],
            [
                "name"=> "St. Vincent and the Grenadines",
                "alpha_code_2"=> "VC",
                "\"Alpha-3 code\""=> "VCT",
                "\"Numeric code\""=> "670",
                "\"Latitude (average)\""=> "13.25",
                "\"Longitude (average)\""=> "-61.2"
            ],
            [
                "name"=> "Samoa",
                "alpha_code_2"=> "WS",
                "\"Alpha-3 code\""=> "WSM",
                "\"Numeric code\""=> "882",
                "\"Latitude (average)\""=> "-13.5833",
                "\"Longitude (average)\""=> "-172.3333"
            ],
            [
                "name"=> "San Marino",
                "alpha_code_2"=> "SM",
                "\"Alpha-3 code\""=> "SMR",
                "\"Numeric code\""=> "674",
                "\"Latitude (average)\""=> "43.7667",
                "\"Longitude (average)\""=> "12.4167"
            ],
            [
                "name"=> "Sao Tome and Principe",
                "alpha_code_2"=> "ST",
                "\"Alpha-3 code\""=> "STP",
                "\"Numeric code\""=> "678",
                "\"Latitude (average)\""=> "1",
                "\"Longitude (average)\""=> "7"
            ],
            [
                "name"=> "Saudi Arabia",
                "alpha_code_2"=> "SA",
                "\"Alpha-3 code\""=> "SAU",
                "\"Numeric code\""=> "682",
                "\"Latitude (average)\""=> "25",
                "\"Longitude (average)\""=> "45"
            ],
            [
                "name"=> "Senegal",
                "alpha_code_2"=> "SN",
                "\"Alpha-3 code\""=> "SEN",
                "\"Numeric code\""=> "686",
                "\"Latitude (average)\""=> "14",
                "\"Longitude (average)\""=> "-14"
            ],
            [
                "name"=> "Serbia",
                "alpha_code_2"=> "RS",
                "\"Alpha-3 code\""=> "SRB",
                "\"Numeric code\""=> "688",
                "\"Latitude (average)\""=> "44",
                "\"Longitude (average)\""=> "21"
            ],
            [
                "name"=> "Seychelles",
                "alpha_code_2"=> "SC",
                "\"Alpha-3 code\""=> "SYC",
                "\"Numeric code\""=> "690",
                "\"Latitude (average)\""=> "-4.5833",
                "\"Longitude (average)\""=> "55.6667"
            ],
            [
                "name"=> "Sierra Leone",
                "alpha_code_2"=> "SL",
                "\"Alpha-3 code\""=> "SLE",
                "\"Numeric code\""=> "694",
                "\"Latitude (average)\""=> "8.5",
                "\"Longitude (average)\""=> "-11.5"
            ],
            [
                "name"=> "Singapore",
                "alpha_code_2"=> "SG",
                "\"Alpha-3 code\""=> "SGP",
                "\"Numeric code\""=> "702",
                "\"Latitude (average)\""=> "1.3667",
                "\"Longitude (average)\""=> "103.8"
            ],
            [
                "name"=> "Slovakia",
                "alpha_code_2"=> "SK",
                "\"Alpha-3 code\""=> "SVK",
                "\"Numeric code\""=> "703",
                "\"Latitude (average)\""=> "48.6667",
                "\"Longitude (average)\""=> "19.5"
            ],
            [
                "name"=> "Slovenia",
                "alpha_code_2"=> "SI",
                "\"Alpha-3 code\""=> "SVN",
                "\"Numeric code\""=> "705",
                "\"Latitude (average)\""=> "46",
                "\"Longitude (average)\""=> "15"
            ],
            [
                "name"=> "Solomon Islands",
                "alpha_code_2"=> "SB",
                "\"Alpha-3 code\""=> "SLB",
                "\"Numeric code\""=> "90",
                "\"Latitude (average)\""=> "-8",
                "\"Longitude (average)\""=> "159"
            ],
            [
                "name"=> "Somalia",
                "alpha_code_2"=> "SO",
                "\"Alpha-3 code\""=> "SOM",
                "\"Numeric code\""=> "706",
                "\"Latitude (average)\""=> "10",
                "\"Longitude (average)\""=> "49"
            ],
            [
                "name"=> "South Africa",
                "alpha_code_2"=> "ZA",
                "\"Alpha-3 code\""=> "ZAF",
                "\"Numeric code\""=> "710",
                "\"Latitude (average)\""=> "-29",
                "\"Longitude (average)\""=> "24"
            ],
            [
                "name"=> "South Georgia and the South Sandwich Islands",
                "alpha_code_2"=> "GS",
                "\"Alpha-3 code\""=> "SGS",
                "\"Numeric code\""=> "239",
                "\"Latitude (average)\""=> "-54.5",
                "\"Longitude (average)\""=> "-37"
            ],
            [
                "name"=> "Spain",
                "alpha_code_2"=> "ES",
                "\"Alpha-3 code\""=> "ESP",
                "\"Numeric code\""=> "724",
                "\"Latitude (average)\""=> "40",
                "\"Longitude (average)\""=> "-4"
            ],
            [
                "name"=> "Sri Lanka",
                "alpha_code_2"=> "LK",
                "\"Alpha-3 code\""=> "LKA",
                "\"Numeric code\""=> "144",
                "\"Latitude (average)\""=> "7",
                "\"Longitude (average)\""=> "81"
            ],
            [
                "name"=> "Sudan",
                "alpha_code_2"=> "SD",
                "\"Alpha-3 code\""=> "SDN",
                "\"Numeric code\""=> "736",
                "\"Latitude (average)\""=> "15",
                "\"Longitude (average)\""=> "30"
            ],
            [
                "name"=> "Suriname",
                "alpha_code_2"=> "SR",
                "\"Alpha-3 code\""=> "SUR",
                "\"Numeric code\""=> "740",
                "\"Latitude (average)\""=> "4",
                "\"Longitude (average)\""=> "-56"
            ],
            [
                "name"=> "Svalbard and Jan Mayen",
                "alpha_code_2"=> "SJ",
                "\"Alpha-3 code\""=> "SJM",
                "\"Numeric code\""=> "744",
                "\"Latitude (average)\""=> "78",
                "\"Longitude (average)\""=> "20"
            ],
            [
                "name"=> "Swaziland",
                "alpha_code_2"=> "SZ",
                "\"Alpha-3 code\""=> "SWZ",
                "\"Numeric code\""=> "748",
                "\"Latitude (average)\""=> "-26.5",
                "\"Longitude (average)\""=> "31.5"
            ],
            [
                "name"=> "Sweden",
                "alpha_code_2"=> "SE",
                "\"Alpha-3 code\""=> "SWE",
                "\"Numeric code\""=> "752",
                "\"Latitude (average)\""=> "62",
                "\"Longitude (average)\""=> "15"
            ],
            [
                "name"=> "Switzerland",
                "alpha_code_2"=> "CH",
                "\"Alpha-3 code\""=> "CHE",
                "\"Numeric code\""=> "756",
                "\"Latitude (average)\""=> "47",
                "\"Longitude (average)\""=> "8"
            ],
            [
                "name"=> "Syrian Arab Republic",
                "alpha_code_2"=> "SY",
                "\"Alpha-3 code\""=> "SYR",
                "\"Numeric code\""=> "760",
                "\"Latitude (average)\""=> "35",
                "\"Longitude (average)\""=> "38"
            ],
            [
                "name"=> "Taiwan, Province of China",
                "alpha_code_2"=> "TW",
                "\"Alpha-3 code\""=> "TWN",
                "\"Numeric code\""=> "158",
                "\"Latitude (average)\""=> "23.5",
                "\"Longitude (average)\""=> "121"
            ],
            [
                "name"=> "Taiwan",
                "alpha_code_2"=> "TW",
                "\"Alpha-3 code\""=> "TWN",
                "\"Numeric code\""=> "158",
                "\"Latitude (average)\""=> "23.5",
                "\"Longitude (average)\""=> "121"
            ],
            [
                "name"=> "Tajikistan",
                "alpha_code_2"=> "TJ",
                "\"Alpha-3 code\""=> "TJK",
                "\"Numeric code\""=> "762",
                "\"Latitude (average)\""=> "39",
                "\"Longitude (average)\""=> "71"
            ],
            [
                "name"=> "Tanzania, United Republic of",
                "alpha_code_2"=> "TZ",
                "\"Alpha-3 code\""=> "TZA",
                "\"Numeric code\""=> "834",
                "\"Latitude (average)\""=> "-6",
                "\"Longitude (average)\""=> "35"
            ],
            [
                "name"=> "Thailand",
                "alpha_code_2"=> "TH",
                "\"Alpha-3 code\""=> "THA",
                "\"Numeric code\""=> "764",
                "\"Latitude (average)\""=> "15",
                "\"Longitude (average)\""=> "100"
            ],
            [
                "name"=> "Timor-Leste",
                "alpha_code_2"=> "TL",
                "\"Alpha-3 code\""=> "TLS",
                "\"Numeric code\""=> "626",
                "\"Latitude (average)\""=> "-8.55",
                "\"Longitude (average)\""=> "125.5167"
            ],
            [
                "name"=> "Togo",
                "alpha_code_2"=> "TG",
                "\"Alpha-3 code\""=> "TGO",
                "\"Numeric code\""=> "768",
                "\"Latitude (average)\""=> "8",
                "\"Longitude (average)\""=> "1.1667"
            ],
            [
                "name"=> "Tokelau",
                "alpha_code_2"=> "TK",
                "\"Alpha-3 code\""=> "TKL",
                "\"Numeric code\""=> "772",
                "\"Latitude (average)\""=> "-9",
                "\"Longitude (average)\""=> "-172"
            ],
            [
                "name"=> "Tonga",
                "alpha_code_2"=> "TO",
                "\"Alpha-3 code\""=> "TON",
                "\"Numeric code\""=> "776",
                "\"Latitude (average)\""=> "-20",
                "\"Longitude (average)\""=> "-175"
            ],
            [
                "name"=> "Trinidad and Tobago",
                "alpha_code_2"=> "TT",
                "\"Alpha-3 code\""=> "TTO",
                "\"Numeric code\""=> "780",
                "\"Latitude (average)\""=> "11",
                "\"Longitude (average)\""=> "-61"
            ],
            [
                "name"=> "Trinidad & Tobago",
                "alpha_code_2"=> "TT",
                "\"Alpha-3 code\""=> "TTO",
                "\"Numeric code\""=> "780",
                "\"Latitude (average)\""=> "11",
                "\"Longitude (average)\""=> "-61"
            ],
            [
                "name"=> "Tunisia",
                "alpha_code_2"=> "TN",
                "\"Alpha-3 code\""=> "TUN",
                "\"Numeric code\""=> "788",
                "\"Latitude (average)\""=> "34",
                "\"Longitude (average)\""=> "9"
            ],
            [
                "name"=> "Turkey",
                "alpha_code_2"=> "TR",
                "\"Alpha-3 code\""=> "TUR",
                "\"Numeric code\""=> "792",
                "\"Latitude (average)\""=> "39",
                "\"Longitude (average)\""=> "35"
            ],
            [
                "name"=> "Turkmenistan",
                "alpha_code_2"=> "TM",
                "\"Alpha-3 code\""=> "TKM",
                "\"Numeric code\""=> "795",
                "\"Latitude (average)\""=> "40",
                "\"Longitude (average)\""=> "60"
            ],
            [
                "name"=> "Turks and Caicos Islands",
                "alpha_code_2"=> "TC",
                "\"Alpha-3 code\""=> "TCA",
                "\"Numeric code\""=> "796",
                "\"Latitude (average)\""=> "21.75",
                "\"Longitude (average)\""=> "-71.5833"
            ],
            [
                "name"=> "Tuvalu",
                "alpha_code_2"=> "TV",
                "\"Alpha-3 code\""=> "TUV",
                "\"Numeric code\""=> "798",
                "\"Latitude (average)\""=> "-8",
                "\"Longitude (average)\""=> "178"
            ],
            [
                "name"=> "Uganda",
                "alpha_code_2"=> "UG",
                "\"Alpha-3 code\""=> "UGA",
                "\"Numeric code\""=> "800",
                "\"Latitude (average)\""=> "1",
                "\"Longitude (average)\""=> "32"
            ],
            [
                "name"=> "Ukraine",
                "alpha_code_2"=> "UA",
                "\"Alpha-3 code\""=> "UKR",
                "\"Numeric code\""=> "804",
                "\"Latitude (average)\""=> "49",
                "\"Longitude (average)\""=> "32"
            ],
            [
                "name"=> "United Arab Emirates",
                "alpha_code_2"=> "AE",
                "\"Alpha-3 code\""=> "ARE",
                "\"Numeric code\""=> "784",
                "\"Latitude (average)\""=> "24",
                "\"Longitude (average)\""=> "54"
            ],
            [
                "name"=> "United Kingdom",
                "alpha_code_2"=> "GB",
                "\"Alpha-3 code\""=> "GBR",
                "\"Numeric code\""=> "826",
                "\"Latitude (average)\""=> "54",
                "\"Longitude (average)\""=> "-2"
            ],
            [
                "name"=> "United States",
                "alpha_code_2"=> "US",
                "\"Alpha-3 code\""=> "USA",
                "\"Numeric code\""=> "840",
                "\"Latitude (average)\""=> "38",
                "\"Longitude (average)\""=> "-97"
            ],
            [
                "name"=> "United States Minor Outlying Islands",
                "alpha_code_2"=> "UM",
                "\"Alpha-3 code\""=> "UMI",
                "\"Numeric code\""=> "581",
                "\"Latitude (average)\""=> "19.2833",
                "\"Longitude (average)\""=> "166.6"
            ],
            [
                "name"=> "Uruguay",
                "alpha_code_2"=> "UY",
                "\"Alpha-3 code\""=> "URY",
                "\"Numeric code\""=> "858",
                "\"Latitude (average)\""=> "-33",
                "\"Longitude (average)\""=> "-56"
            ],
            [
                "name"=> "Uzbekistan",
                "alpha_code_2"=> "UZ",
                "\"Alpha-3 code\""=> "UZB",
                "\"Numeric code\""=> "860",
                "\"Latitude (average)\""=> "41",
                "\"Longitude (average)\""=> "64"
            ],
            [
                "name"=> "Vanuatu",
                "alpha_code_2"=> "VU",
                "\"Alpha-3 code\""=> "VUT",
                "\"Numeric code\""=> "548",
                "\"Latitude (average)\""=> "-16",
                "\"Longitude (average)\""=> "167"
            ],
            [
                "name"=> "Venezuela, Bolivarian Republic of",
                "alpha_code_2"=> "VE",
                "\"Alpha-3 code\""=> "VEN",
                "\"Numeric code\""=> "862",
                "\"Latitude (average)\""=> "8",
                "\"Longitude (average)\""=> "-66"
            ],
            [
                "name"=> "Venezuela",
                "alpha_code_2"=> "VE",
                "\"Alpha-3 code\""=> "VEN",
                "\"Numeric code\""=> "862",
                "\"Latitude (average)\""=> "8",
                "\"Longitude (average)\""=> "-66"
            ],
            [
                "name"=> "Viet Nam",
                "alpha_code_2"=> "VN",
                "\"Alpha-3 code\""=> "VNM",
                "\"Numeric code\""=> "704",
                "\"Latitude (average)\""=> "16",
                "\"Longitude (average)\""=> "106"
            ],
            [
                "name"=> "Vietnam",
                "alpha_code_2"=> "VN",
                "\"Alpha-3 code\""=> "VNM",
                "\"Numeric code\""=> "704",
                "\"Latitude (average)\""=> "16",
                "\"Longitude (average)\""=> "106"
            ],
            [
                "name"=> "Virgin Islands, British",
                "alpha_code_2"=> "VG",
                "\"Alpha-3 code\""=> "VGB",
                "\"Numeric code\""=> "92",
                "\"Latitude (average)\""=> "18.5",
                "\"Longitude (average)\""=> "-64.5"
            ],
            [
                "name"=> "Virgin Islands, U.S.",
                "alpha_code_2"=> "VI",
                "\"Alpha-3 code\""=> "VIR",
                "\"Numeric code\""=> "850",
                "\"Latitude (average)\""=> "18.3333",
                "\"Longitude (average)\""=> "-64.8333"
            ],
            [
                "name"=> "Wallis and Futuna",
                "alpha_code_2"=> "WF",
                "\"Alpha-3 code\""=> "WLF",
                "\"Numeric code\""=> "876",
                "\"Latitude (average)\""=> "-13.3",
                "\"Longitude (average)\""=> "-176.2"
            ],
            [
                "name"=> "Western Sahara",
                "alpha_code_2"=> "EH",
                "\"Alpha-3 code\""=> "ESH",
                "\"Numeric code\""=> "732",
                "\"Latitude (average)\""=> "24.5",
                "\"Longitude (average)\""=> "-13"
            ],
            [
                "name"=> "Yemen",
                "alpha_code_2"=> "YE",
                "\"Alpha-3 code\""=> "YEM",
                "\"Numeric code\""=> "887",
                "\"Latitude (average)\""=> "15",
                "\"Longitude (average)\""=> "48"
            ],
            [
                "name"=> "Zambia",
                "alpha_code_2"=> "ZM",
                "\"Alpha-3 code\""=> "ZMB",
                "\"Numeric code\""=> "894",
                "\"Latitude (average)\""=> "-15",
                "\"Longitude (average)\""=> "30"
            ],
            [
                "name"=> "Zimbabwe",
                "alpha_code_2"=> "ZW",
                "\"Alpha-3 code\""=> "ZWE",
                "\"Numeric code\""=> "716",
                "\"Latitude (average)\""=> "-20",
                "\"Longitude (average)\""=> "30"
            ]
        ];
        return response()->json(['msg'=> 'Found','data'=>$json]);
    }
}
