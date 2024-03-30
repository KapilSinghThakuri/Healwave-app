<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $municipalities = collect([
            'Fattanglung Rural Municipality','Maiwakhola Rural Municipality','Meringden Rural Municipality',
            'Mikawakhola Rural Municipality','Phungling Municipality','Serijdangha Rural Municipality',
            'Sidingwa Rural Municipality','Yangwarak Rural Municipality',
            'Aatharai Triveni Rural Municipality','Bhotkhola Rural Municipality',
            'Chainpur Municipality','Chichila Rural Municipality','Dharmadevi Municipality',
            'Khadbari Municipality','Madi Municipality','Makalu Rural Municipality',
            'Panchkhapan Municipality','Sabhapokhari Rural Municipality','Silichong Rural Municipality',
            'Mapya Rural Municipality','Thulung Rural Municipality','Khumbupasanglahmu Rural Municipality',
            'Likhupike Rural Municipality','Mahakulung Rural Municipality','Necha Salyan Rural Municipality',
            'Solududhakunda Municipality','Sotang Rural Municipality','Champadevi Rural Municipality',
            'Chisankhugadhi Rural Municipality','Khijidemba Rural Municipality','Likhu Rural Municipality','Manebhanjyang Rural Municipality','Molung Rural Municipality',
            'Siddhicharan Municipality','Sunkoshi Rural Municipality','Ainselukhark Rural Municipality','Barahapokhari Rural Municipality','Diprung Rural Municipality','Halesi Tuwachung Municipality','Jantedhunga Rural Municipality','Kepilasagadhi Rural Municipality','Khotehang Rural Municipality','Lamidanda Rural Municipality','Rupakot Majhuwagadhi Municipality','Sakela Rural Municipality','Aamchowk Rural Municipality','Arun Rural Municipality','Bhojpur Municipality','Hatuwagadhi Rural Municipality','Pauwadungma Rural Municipality','Ram Prasad Rai Rural Municipality','Shadananda Municipality','Salpa silicho Rural Municipality','Tayamkemaiyum Rural Municipality','Cha Thar Jorpati Rural Municipality','Chaubise Rural Municipality','Dhankuta Municipality','Khalsa Chintang Sahidbhumi Rural Municipality','Mahalakshmi Municipality','Pakhribash Municipality','Sangurigadhi Rural Municipality','Aathrai Rural Municipality','Chaa Thar Rural Municipality','Laliguransh Municipality','Menchayayam Rural Municipality','Myanglung Municipality','Phedap Rural Municipality','Falgunanda Rural Municipality','Hilihang Rural Municipality','Kummayak Rural Municipality','Miklajung Rural Municipality','Phalaelung Rural Municipality','Phidim Municipality','Tumwaewa Rural Municipality','Yangwarak Rural Municipality','Chulachuli Rural Municipality','Deumai Municipality','Fakfokthum Rural Municipality','Ilam Municipality','Mai Jogmai Rural Municipality','Mai Municipality','Mangsebung Rural Municipality','Rong Rural Municipality','Sandakpur Rural Municipality','Suryaudaya Municipality','Arjundhara Municipality','Barhadashi Rural Municipality','Bhadrapur Municipality','Birtamod Municipality','Buddha Shanti Rural Municipality','Damak Municipality','Gauradaha Municipality','Gaurigunj Rural Municipality','Haldibari Rural Municipality','Jhapa Rural Municipality','Kachanakawal Rural Municipality','Kamal Rural Municipality','Kankai Municipality','Mechinagar Municipality','Sitasatakshi Municipality','Belbari Municipality','Biratnagar Upa Maha Municipality','Budhiganga Rural Municipality','Dha Municipality althan Rural Municipality','Gramthan Rural Municipality','Jahada Rural Municipality','Kanepokhari Rural Municipality','Katahari Rural Municipality','Kerabari Rural Municipality','Letang Municipality','Miklajung Rural Municipality','Patahri shanishchare Municipality','Rangeli Municipality','Ratuwamai Municipality','Sundar Haraicha Municipality','Sunbarshi municipality','Uralabari Municipality','Baraha Municipality','Barju Rural Municipality','Devangunj Rural Municipality','Dharan Upamaha Municipality','Duhabi Municipality','Gadhi Rural Municipality','Harinagar Rural Municipality','Inarwa Municipality','Itahari Upa Maha Municipality','Jhokraha Rural Municipality','Koshi Rural Municipality','Ramdhuni Municipality','Belaka Municipality','Chaudandigadhi Municipality','Katari Municipality','Rautamai Rural Municipality','Sunkoshi Rural Municipality','Tapli Rural Municipality','Triyuga Municipality','Udayapurgadhi Rural Municipality','Rajgadh Rural Municipality','Bishnupur Rural Municipality','Bode Barsain Municipality','Chhinnamasta Rural Municipality','Dakneshwori Municipality','Hanumannagar Kankalani Municipality','Kanchanrup Municipality','Khadak Municipality','Krishna Savaran Rural Municipality','Mahadev Rural Municipality','Rajbiraj Municipality','Rupani Rural Municipality','Saptakoshi Rural Municipality','Shambhunath Municipality','Balanbihul Rural Municipality','Tilathi Koiladi Rural Municipality','Tirahut Rural Municipality','Surunga Municipality','Arnama Rural Municipality','Aurahi Rural Municipality','Bariyarpatti Rural Municipality','Bhagawa Municipality ur Rural Municipality','Dhangadhimai Municipality','Golbazar Municipality','Kalya Municipality ur Municipality','Karjanhya Rural Municipality','Lahan Municipality','Laxmipur Patari Rural Municipality','Mirchaiya Municipality','Naraha Rural Municipality','Nawarajpur Rural Municipality','Sakhuwanankarkatti Rural Municipality','Siraha Municipality','Sukhipur Rural Municipality','Bishnupur Gaunpalika','Chireshwar Nath Municipality','Dhanushadham Municipality','Sabaila Municipality','Mithla Municipality','Ganeshman Charnath N.P.','Janakpur Up Municipality','Shahidnagar Nagar palika','Mithala Bihari nagar palika','Hanshpur Nagar Palika','Bideha Nagar Palika','Kamala siddhi Nagar Palika','Nagarain nagar Palika','mukhiya Patti gaun Palika','Bateshwar Gaun Palika','Dhanauji gaun Palika','Janak Nandani gaun Palika','Laxminya Gaun Palika','Aarurahi Gaun Palika','Loharpatti Municipality','Bardibas Municipality','Aurhi Municipality','Ramgopalpur Municipality','Gaushala Municipality','Balba Municipality','Manara Siswa Municipality','Bhangha Municipality','Mathihani Municipality','Jaleswar Muncipality','Mahottari Rural Municipality','Samshi Rural Municipality','Sonma Rural Municipality','Ekdara Rural Municipality','Pipra Rural Municipality','Malangwa Municipality','Haripurwa Municipality','Godaita Municipality','Balara Municipality','Ishworpur Municipality','Lalbandi Municipality','Bagmati Municipality','Barhathwa Municipality','Haripur Municipality','Hariwon Municipality','Kabilashi Municipality','Kaudena Rural Municipality','Chandranagar Rural Municipality','Brahmpuri Rural Municipality','Parsa Rural Municipality','Chakraghatta Rural Municipality','Bishnu Rural Municipality','Ramnagar Rural Municipality','Basbariya Rural Municipality','Dhankaul Rural Municipality','chandrapur Municipality','garudha Municipality','gaur Municipality','baudhimai Municipality','brindaban Municipality','devahi gonahi Municipality','durgabhagwati Municipality','gadhimai Municipality','gajura Municipality','kathariya Municipality','madab narayan Municipality','mailapur Municipality','fatuwa bijaypur Municipality','isnath Municipality','proha Municipality','rajpur Municipality','yamunamai rural municipality','rajdevi rural municipality','SIMRONGODH Municipality','KOLHABI Municipality','NIJGADH Municipality','AADARSHA KOTWAL Rural Municipality','Baragadhi Rural Munucipality','MAHA GADHIMAI GA. PA.','PACHARAUTA Municipality','DEVTAL GA. PA.','Subarna Rural Municipality','KARAIYAMAI GA. PA.','kalaiya Sub-metropolitian City','JITPUR SIMARA UP. MA. Municipality .','PARWANIPUR GA. PA.','PRASAUNI GA. PA.','Bishrampur Rural Munucipality','PHETA GA. PA.','Bahudaramai Rural Municipality','Jeerabhawani Rural Municipality','Bindabasini Rural Municipality','Birgunj Municipality','Chhipaharmai Rural Municipality','Dhobini Rural Municipality','Jagarnathpur Rural Municipality','Pakahamai Municipality ur Rural Municipality','Parsagadhi Rural Municipality','Paterwa sugauli Rural Municipality','Pokhariya Municipality','SakhuwaPrasauni Rural Municipality','Thori Rural Municipality','Kalikamai Rural Municipality','Baiteshwor Rural Municipality','Bhimeshwor Municipality','Bigu Rural Municipality','Gaurishankar Rural Municipality','Jiri Municipality','Kalinchok Rural Municipality','Melung Rural Municipality','Sailung Rural Municipality','Tamakoshi Rural Municipality','Balefi Rural Municipality','Barhabise Municipality','Bhotekoshi Rural Municipality','Chautara Sangachokgadhi Municipality','Helambu Rural Municipality','Indrawati Rural Municipality','Jugal Rural Municipality','Lisangkhu Pakhar Rural Municipality','Sunkoshi Rural Municipality','Melamchi Municipality','Panchpokhari ThanRural Municipality','Tripurasundari Rural Municipality','Gosaikunda Rural Municipality','Kalika Rural Municipality','Naukunda Rural Municipality','Parbati Kunda Rural Municipality','Uttargaya Rural Municipality','Benighat Rorang Rural Municipality','Galchhi Rural Municipality','Dhunibesi Municipality','Gajuri Rural Municipality','Gangajamuna Rural Municipality','Jwalamukhi Rural Municipality','Khaniyabash Rural Municipality','Netrawati Rural Municipality','Nilakantha Municipality','Rubi Valley Rural Municipality','Siddhalek Rural Municipality','Thakre Rural Municipality','Tripura Sundari Rural Municipality','Belkotgadhi Municipality','Bidur Municipality','Dupcheshwar Rural Municipality','Kakani Rural Municipality','Kispang Rural Municipality','Likhu Rural Municipality','Meghang Rural Municipality','Panchakanya Rural Municipality','Shivapuri Rural Municipality','Suryagadhi Rural Municipality','Tadi Rural Municipality','Tarkeshwar Rural Municipality','Budhanilakantha Municipality','Chandragiri Municipality','Dakshinkali Municipality','Gokarneshwor Municipality','Kageshwori Manahora Municipality','Kathmandu Maha Municipality','Kirtipur Municipality','Nagarjun Municipality','Shankharapur Municipality','Tarakeshwor Municipality','Tokha Municipality','Bhaktapur Municipality','Changunarayan Municipality','Madhyapur Thimi Municipality','Suryabinayak Municipality','Bagmati Rural Municipality','Godawari Municipality','Konjyosom Rural Municipality','Lalitpur Maha Municipality','Mahalaxmi Municipality','Mahankal Rural Municipality','Banepa Municipality','Bethanchowk Rural Municipality','Bhumlu Rural Municipality','Chaurideurali Rural Municipality','Dhulikhel Municipality','Khanikola Rural Municipality','Mahabharat Rural Municipality','Mandandeupur Municipality','Namobuddha Municipality','Panauti Municipality','Panchkhal Municipality','Roshi Rural Municipality','Temal Rural Municipality','Doramba Rural Municipality','Gokulganga Rural Municipality','Khadadevi Rural Municipality','Manthali Municipality','Likhu Rural Municipality','Ramechhap Municipality','Sunapati Rural Municipality','Umakunda Rural Municipality','Dudhouli Municipality','Ghanglekh Rural Municipality','Golanjor Rural Municipality','Hariharpurgadhi Rural Municipality','Kamalamai Municipality','Marin Rural Municipality','Phikkal Rural Municipality','Sunkoshi Rural Municipality','Ti Municipality atan Rural Municipality','Bakaiya Rural Municipality','Bhimphedi Rural Municipality','Bagmati Rural Municipality','Hetauda Upamaha Municipality','Indrasarowar Rural Municipality','Kailash Rural Municipality','Makawa Municipality urgadhi Rural Municipality','Manahari Rural Municipality','Raksirang Rural Municipality','Thaha Municipality','Bharatpur Metropolitian City','Ichchha Kamana Rural Municipality','Kalika Municipality','Khairahani Municipality','Madi Municipality','Rapti Municipality','Ratnanagar Municipality','Aarughat Rural Municipality','Ajirkot Rural Municipality','Bhimsen Rural Municipality','Chum Nubri Rural Municipality','Dharche Rural Municipality','Gandaki Rural Municipality','Gorkha Municipality','Palungtar Municipality','Sahid Lakhan Rural Municipality','Siranchok Rural Municipality','Sulikot Rural Municipality','Chame Rural Municipality','Narphu Rural Municipality','Nashong Rural Municipality','Neshyang Rural Municipality','Barha Gaun Muktikshetra Rural Municipality','Dalome Rural Municipality','Gharapjhong Rural Municipality','Lomanthang Rural Municipality','Thasang Rural Municipality','Beni Municipality','Annapurna Rural Municipality','Dhaulagiri Rural Municipality','Malika Rural Municipality','Mangala Rural Municipality','Raghuganga Rural Municipality','Machhapuchchhre Rural Municipality','Madi Rural Municipality','Pokhara Maha Municipality','Rupa Rural Municipality','Annapurna Rural Municipality','Besi Sahar Municipality','Madhya Nepal Municipality','Rainaas Municipality','Sundar Bazar Municipality','Kablasothaar Municipality','Dudhpokhari Municipality','Dordi Municipality','Marsyangdi Municipality','Anbukhaireni Rural Municipality','Bandipur Rural Municipality','Bhanu Municipality','Bhimad Municipality','Byas Municipality','Devghat Rural Municipality','Ghiring Rural Municipality','Myagde Rural Municipality','Rhishing Rural Municipality','Shuklagandaki Municipality','Binayee Triveni Rural Municipality','Bulingtar Rural Municipality','Bungdikali Rural Municipality','Devchuli Municipality','Gaidakot Municipality','Hupsekot Rural Municipality','Kawasoti Municipality','Madhyabindu Municipality','Arjunchaupari Rural Municipality','Bhirkot Municipality','Biruwa Rural Municipality','Chapakot Municipality','Galyang Municipality','Harinas Rural Municipality','Kaligandaki Rural Municipality','Phedikhola Rural Municipality','Putalibazar Municipality','Waling Municipality','Aandhikhola Rural Municipality','Bihadi Rural Municipality','Jaljala Rural Municipality','Kushma Municipality','Mahashila Rural Municipality','Modi Rural Municipality','Painyu Rural Municipality','Phalebas Municipality','Badigad Rural Municipality','Baglung Municipality','Bareng Rural Municipality','Dhorpatan Municipality','Galkot Municipality','Jaimuni Municipality','Kanthekhola Rural Municipality','Nisikhola Rural Municipality','TamanKhola Rural Municipality','TaraKhola Rural Municipality','Bhume Rural Municipality','Putha Uttarganga Rural Municipality','Sisne Rural Municipality','Paribartan Rural Municipality','Lungri Rural Municipality','Madi Rural Municipality','Rolpa Municipality','Runtigadi Rural Municipality','Gangadev Rural Municipality','Sunchhahari Rural Municipality','sunil smiriti Rural Municipality','Thawang Rural Municipality','Tribeni Rural Municipality','Ayirabati Rural Municipality','Gaumukhi Rural Municipality','Jhimruk Rural Municipality','Mallarani Rural Municipality','Mandavi Rural Municipality','Naubahini Rural Municipality','Pyuthan Municipality','Sarumarani Rural Municipality','Sworgadwary Municipality','Chandrakot Rural Municipality','Chatrakot Rural Municipality','Dhurkot Rural Municipality','Gulmidarbar Rural Municipality','Isma Rural Municipality','Kaligandaki Rural Municipality','Madane Rural Municipality','Malika Rural Municipality','Musikot Municipality','Resunga Municipality','Ruru Rural Municipality','Satyawati Rural Municipality','Bhumikasthan Municipality','Chhatradev Rural Municipality','Malarani Rural Municipality','Panini Rural Municipality','Sandhikharka Municipality','Shitaganga Municipality','Bagnaskali Rural Municipality','Mathagadhi Rural Municipality','Nisdi Rural Municipality','Purbakhola Rural Municipality','Rainadevi Chhahara Rural Municipality','Rambha Rural Municipality','Rampur Municipality','Ribdikot Rural Municipality','Tansen Municipality','Tinau Rural Municipality','Bardaghat Municipality','Palhi Nandan Rural Municipality','Pratappur Rural Municipality','Ramgram Municipality','Sarawal Rural Municipality','Sunwal Municipality','Tribenisusta Rural Municipality','Butwal Upamaha Municipality','Devdaha Municipality','Gaidahawa Rural Municipality','Kanchan Rural Municipality','Kotahimai Rural Municipality','Lumbini SanskritikMunicipality','Marchawari Rural Municipality','Omsatiya Rural Municipality','Rohini Rural Municipality','Sainamaina Municipality','Sammarimai Rural Municipality','Siddharthanagar Municipality','Siyari Rural Municipality','Sudhdhodhan Rural Municipality','Tillotama Municipality','Mayadevi Rural Municipality','Banganga Municipality','Bijayanagar Rural Municipality','Buddhabhumi Municipality','Kapilbastu Municipality','Krishnanagar Municipality','Maharajgunj Municipality','Mayadevi Rural Municipality','Shivaraj Municipality','Suddhodhan Rural Municipality','Yashodhara Rural Municipality','Babai Rural Municipality','Banglachuli Rural Municipality','Dangisharan Rural Municipality','Gadhawa Rural Municipality','Ghorahi Upamaha Municipality','Lamahi Municipality','Rajpur Rural Municipality','Rapti Rural Municipality','Shantinagar Rural Municipality','Tulsipur Upamaha Municipality','Baijanath Rural Municipality','Duduwa Rural Municipality','Janaki Rural Municipality','Khajura Rural Municipality','Kohalpur Municipality','Narainapur Rural Municipality','Nepalganj Upamaha Municipality','Rapti sonari Rural Municipality','Badhaiyatal Rural Municipality','Bansagadhi Municipality','Barbardiya Municipality','Geruwa Rural Municipality','Gulariya Municipality','Madhuwan Municipality','Rajapur Municipality','Thakurbaba Municipality','Chharka Tangsong Rural Municipality','Dolpo Buddha Rural Municipality','Jagadulla Rural Municipality','Kaike Rural Municipality','Mudkechula Rural Municipality','Shey Phoksundo Rural Municipality','Thuli Bheri Municipality','Tripurasundari Municipality','Chhayanath Rara Municipality','Khatyad Rural Municipality','Mugum Karmarong Rural Municipality','Soru Rural Municipality','Adanchuli Rural Municipality','Chankheli Rural Municipality','Kharpunath Rural Municipality','Namkha Rural Municipality','Sarkegad Rural Municipality','Simkot Rural Municipality','Tanjakot Rural Municipality','Chandannath Municipality','Guthichaur Tila Rural Municipality','Hima Rural Municipality','Kanakasundari Rural Municipality','Patarasi Rural Municipality','Sinja Rural Municipality','Tatopani Rural Municipality','Tila Rural Municipality','Kalika Rural Municipality','Khandachakra Municipality','Mahawai Rural Municipality','Naraharinath Rural Municipality','Pachaljharana Rural Municipality','Palata Rural Municipality','Raskot Municipality','Sanni Tribeni Rural Municipality','Tilagufa Municipality','Aathabis Municipality','Bhagawatimai Rural Municipality','Bhairabi Rural Municipality','Chamunda Bindrasain Municipality','Dallu Municipality','Dungeshwor Rural Municipality','Gurans Rural Municipality','Mahabu Gaun Palika','Narayan Municipality','Naumule Rural Municipality','Thantikandh Rural Municipality','Barekot Rural Municipality','Bheri Municipality','Chhedagad Municipality','Junichande Rural Municipality','Kuse Rural Municipality','Shiwalaya Rural Municipality','Tribeni Nalagad Municipality','Aathbiskot Municipality','Banfikot Rural Municipality','Chaurjahari Municipality','Musikot Municipality','Sani Bheri Rural Municipality','Tribeni Rural Municipality','Bagchaur Municipality','Bangad Kupinde Municipality','Chhatreshwori Rural Municipality','Darma Rural Municipality','SIddhaKumakh Rural Municipality','Kalimati Rural Municipality','Kapurkot Rural Municipality','Kumakhmalika Rural Municipality','Sharada Municipality','Tribeni Rural Municipality','Barahtal Rural Municipality','Bheriganga Municipality','Birendranagar Municipality','Chaukune Rural Municipality','Chingad Rural Municipality','Gurbhakot Municipality','Lekbeshi Municipality','Panchpuri Municipality','Simta Rural Municipality','Badimalika Municipality','Budhiganga Municipality','Budhinanda Municipality','Chhededaha Rural Municipality','Gaumul Rural Municipality','Himali Rural Municipality','Pandav Gupha Rural Municipality','Swami Kartik Rural Municipality','Tribeni Municipality','Bithadchir Rural Municipality','Bungal Municipality','Chabis pathivera Rural Municipality','Durgathali Rural Municipality','JayaPrithivi Municipality','Kanda Rural Municipality','Kedarsyun Rural Municipality','Khaptad chhanna Rural Municipality','Masta Rural Municipality','Surma Rural Municipality','Talkot Rural Municipality','Thalara Rural Municipality','Apihimal Rural Municipality','Byas Rural Municipality','Dunhun Rural Municipality','Lekam Rural Municipality','Mahakali Municipality','Malikarjun Rural Municipality','Marma Rural Municipality','Naugad Rural Municipality','Shailyashikhar Municipality','Dasharathchanda Municipality','Dilasaini Rural Municipality','Dogadakedar Rural Municipality','Melauli Municipality','Pancheshwar Rural Municipality','Patam Municipality','Puchaudi Municipality','Shivanath Rural Municipality','Sigas Rural Municipality','Surnaya Rural Municipality','Ajaymeru Rural Municipality','Alital Rural Municipality','Amargadhi Municipality','Bhageshwar Rural Municipality','Ganayapdhura Rural Municipality','Nawadurga Rural Municipality','Parashuram Municipality','Adharsha Rural Municipality','Badikedar Rural Municipality','Bogtan Rural Municipality','Dipayal Silgadi Municipality','Jorayal Rural Municipality','K I Singh Rural Municipality','Purbichauki Rural Municipality','Sayal Rural Municipality','Shikhar Municipality','Bannigadhi Jayagadh Rural Municipality','Chaurpati Rural Municipality','Dhakari Rural Municipality','Kamal Bazar Municipality','Mangalsen Municipality','Mellekh Rural Municipality','Panchadeval Binayak Municipality','Ramaroshan Rural Municipality','Sa Municipality hebagar Municipality','Turmakhad Municipality','Bardagoriya Rural Municipality','Bhajani Municipality','Chure Rural Municipality','Dhangadhi Upamaha Municipality','gaurignaga Rural Municipality','ghodaghodi Rural Municipality','Godawari Municipality','Janaki Rural Municipality','Joshipur Rural Municipality','Kailari Rural Municipality','Lamki Chuha Municipality','Mohanyal Rural Municipality','Tikapur Municipality','Bedkot Municipality','Belauri Municipality','Beldandi Rural Municipality','Bhimdatta Municipality','Krishnapur Municipality','Laljhadi Rural Municipality','Punarbas Municipality','Shuklaphanta Municipality','Mahakali Municipality',
        ]);
        $municipalityArray = $municipalities->map(function ($municipality) {
            return ['municipality_name' => $municipality];
        })->all();

        foreach ($municipalityArray as $value) {
            DB::table('municipalities')->insert($value);
        }
    }
}
