<?php
// Paths.
define('PORTAL_IMAGES_PATH', IMAGES_PATH . '/gyms');

// raid level constants
define('RAID_LEVEL_ALL', '654321');

// Value used for denoting anytime attendance
define('ANYTIME', '1970-01-01 00:00:00');
define('ANYTIME_TS', preg_replace("/[^0-9]/", "", ANYTIME));

// Icons.
defined('TEAM_B') 		    or define('TEAM_B',          iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F499))); // CORAZON AZUL
defined('TEAM_R') 		    or define('TEAM_R',          iconv('UCS-4LE', 'UTF-8', pack('V', 0x2764)));  // CORAZON ROJO
defined('TEAM_Y') 		    or define('TEAM_Y',          iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F49B))); // CORAZON AMARILLO
defined('TEAM_CANCEL') 		or define('TEAM_CANCEL',     iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F494))); // NO VOY
defined('TEAM_DONE') 		or define('TEAM_DONE',       iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F4AA))); // FORZUDO
defined('TEAM_UNKNOWN')		or define('TEAM_UNKNOWN',    iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F680)));
defined('EMOJI_HERE') 		or define('EMOJI_HERE',      iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F4CD))); // ESTOY PIRULETA
defined('EMOJI_LATE') 		or define('EMOJI_LATE',      iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F40C))); // TARDO

// NUEVOS
defined('EMOJI_ALARM')		or define('EMOJI_ALARM',     iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F514))); // CAMPANA
defined('EMOJI_APLAUSO')	or define('EMOJI_APLAUSO',   iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F44F))); // CAMPANA
defined('EMOJI_ASPA')       or define('EMOJI_ASPA',      iconv('UCS-4LE', 'UTF-8', pack('V', 0x274C)));  // ASPA
defined('EMOJI_CAMERA')		or define('EMOJI_CAMERA',    iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F4F7))); // CAMARA FOTO
//defined('EMOJI_CHEKING')    or define('EMOJI_CHEKING',   iconv('UCS-4LE', 'UTF-8', pack('V', 0x2611)));  // CHEKING
defined('EMOJI_CHEKING')    or define('EMOJI_CHEKING',   iconv('UCS-4LE', 'UTF-8', pack('V', 0x2705)));  // CHEKING
defined('EMOJI_CHINCHETA')  or define('EMOJI_CHINCHETA', iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F4CC))); // CHINCHETA
defined('EMOJI_CLOCK')		or define('EMOJI_CLOCK',     iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F551))); // RELOJ
defined('EMOJI_COMPARTIR')  or define('EMOJI_COMPARTIR', iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F4E4))); // COHETE
defined('EMOJI_COPA')       or define('EMOJI_COPA',      iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F3C6))); // COPA
defined('EMOJI_FAVORITOS')  or define('EMOJI_FAVORITOS', iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F49E))); // COPA
defined('EMOJI_COPYRY')     or define('EMOJI_COPYRY',    iconv('UCS-4LE', 'UTF-8', pack('V', 0x00A9)));  // FAVORITOS
defined('EMOJI_DEDODERE')   or define('EMOJI_DEDODERE',  iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F449))); // DEDO A LA DERç
defined('EMOJI_ENTRAMOS')   or define('EMOJI_ENTRAMOS',  iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F46C))); // ESTRELLA SHINY
defined('EMOJI_ESTRELLA')   or define('EMOJI_ESTRELLA',  iconv('UCS-4LE', 'UTF-8', pack('V', 0x2B50)));  // ESTRELLA
defined('EMOJI_ESPADAS')    or define('EMOJI_ESPADAS',   iconv('UCS-4LE', 'UTF-8', pack('V', 0x2694)));  // ESPADAS
defined('EMOJI_EGG')		or define('EMOJI_EGG',       iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F95A))); // Huevo
defined('EMOJI_FLAG_ESP')   or define('EMOJI_FLAG_ESP',  iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F1F8))); // BANDERA ESPAÑA
defined('EMOJI_FLECHA')     or define('EMOJI_FLECHA',    iconv('UCS-4LE', 'UTF-8', pack('V', 0x25B6)));  // FLECHA AZUL
defined('EMOJI_GROUP') 		or define('EMOJI_GROUP',     iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F465))); // GRUPO
defined('EMOJI_FORZUDO')    or define('EMOJI_FORZUDO',   iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F4AA))); // FORZUDO
defined('EMOJI_GALLINA')    or define('EMOJI_GALLINA',   iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F413))); // GALLINA
defined('EMOJI_HUEVO')      or define('EMOJI_HUEVO',     iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F95A))); // HUEVO
defined('EMOJI_HUEVOABRE')  or define('EMOJI_HUEVOABRE', iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F423))); // HUEVO ABRE
defined('EMOJI_INFO')		or define('EMOJI_INFO',      iconv('UCS-4LE', 'UTF-8', pack('V', 0x2139)));  // INFO
defined('EMOJI_INVITE') 	or define('EMOJI_INVITE',    iconv('UCS-4LE', 'UTF-8', pack('V', 0x2709)));  // INVITE
defined('EMOJI_WANT_INVITE')or define('EMOJI_WANT_INVITE',iconv('UCS-4LE','UTF-8', pack('V', 0x1F4E4))); // INVITE WAN
defined('EMOJI_WANT_RECIBE')or define('EMOJI_WANT_RECIBE',iconv('UCS-4LE','UTF-8', pack('V', 0x1F4E5))); // WAN RECIBE
defined('EMOJI_IV100')      or define('EMOJI_IV100',     iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F4AF))); // IV 100
defined('EMOJI_LAPIZ')      or define('EMOJI_LAPIZ',     iconv('UCS-4LE', 'UTF-8', pack('V', 0x270F)));  // LAPIZ
defined('EMOJI_MANO')       or define('EMOJI_MANO',      iconv('UCS-4LE', 'UTF-8', pack('V', 0x270B)));  // MANO
defined('EMOJI_MONITOR')    or define('EMOJI_MONITOR',   iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F4BB))); // MONITOR
defined('EMOJI_MEDALLA1')   or define('EMOJI_MEDALLA1',  iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F947))); // MEDALLA 1
defined('EMOJI_MEDALLA2')   or define('EMOJI_MEDALLA2',  iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F948))); // MEDALLA 2
defined('EMOJI_MEDALLA3')   or define('EMOJI_MEDALLA3',  iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F949))); // MEDALLA 3
defined('EMOJI_MUNDO')      or define('EMOJI_MUNDO',     iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F30F))); // BOLA MUNDO
defined('EMOJI_NO_ALARM')	or define('EMOJI_NO_ALARM',  iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F515))); // NO CAMPANA
defined('EMOJI_NOENTRY')	or define('EMOJI_NOENTRY',   iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F6AB))); // NO ENTRAR
defined('EMOJI_NOOK')       or define('EMOJI_NOOK',      iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F44E))); // DEDO NO OK
defined('EMOJI_OK')         or define('EMOJI_OK',        iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F44D))); // DEDO OK
defined('EMOJI_PAPELERA')   or define('EMOJI_PAPELERA',  iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F6AE))); // PAPELERA
defined('EMOJI_PIRULETA')   or define('EMOJI_PIRULETA',  iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F4CD))); // PIRULETA = HERE
defined('EMOJI_PLUS')		or define('EMOJI_PLUS',      iconv('UCS-4LE', 'UTF-8', pack('V', 0x2795)));  // SIGNO +
defined('EMOJI_REFRESH')	or define('EMOJI_REFRESH',   iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F504))); // REFRESCAR
defined('EMOJI_REGISTER')   or define('EMOJI_REGISTER',  iconv('UCS-4LE', 'UTF-8', pack('V', 0x00AE)));  // REGISTER
defined('EMOJI_REENVIAR')   or define('EMOJI_REENVIAR',  iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F300))); // REENVIAR
defined('EMOJI_REFLOTAR')   or define('EMOJI_REFLOTAR',  iconv('UCS-4LE', 'UTF-8', pack('V', 0x264B)));  // REFLOTAR
defined('EMOJI_REMOTE')		or define('EMOJI_REMOTE',    iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F4E1))); // PARABOLICA
defined('EMOJI_REZAR')		or define('EMOJI_REZAR',     iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F64F))); // REZAR
defined('EMOJI_SINGLE') 	or define('EMOJI_SINGLE',    iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F464))); // SOLO
defined('EMOJI_SHINY')      or define('EMOJI_SHINY',     iconv('UCS-4LE', 'UTF-8', pack('V', 0x2728)));  // ESTRELLA SHINY
defined('EMOJI_SALIMOS')    or define('EMOJI_SALIMOS',   iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F503))); // SALIMOS
defined('EMOJI_SALIMOS2')   or define('EMOJI_SALIMOS2',  iconv('UCS-4LE', 'UTF-8', pack('V', 0x267B))); // SALIMOS2
defined('EMOJI_STAR')       or define('EMOJI_STAR',      iconv('UCS-4LE', 'UTF-8', pack('V', 0x2B50)));  // ESTRELLA
defined('EMOJI_SATELITE')   or define('EMOJI_SATELITE',  iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F6F0))); // SATELITE
defined('TOP')              or define('EMOJI_TOP',       iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F530))); // TOP INCURSION
defined('TRIANGULO')        or define('EMOJI_TRIANGULO', iconv('UCS-4LE', 'UTF-8', pack('V', 0x26A0)));  // TRIANGULO PRECAUCION
defined('EMOJI_VICTORY')    or define('EMOJI_VICTORY',   iconv('UCS-4LE', 'UTF-8', pack('V', 0x270C)));  // VICTORIA
defined('EMOJI_WALKER')     or define('EMOJI_WALKER',    iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F3C3))); // ANDANDO
defined('EMOJI_WALK')		or define('EMOJI_WALK',      iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F637))); // Weather Icons.
// Weather Icons.
defined('EMOJI_W_SUNNY') 		or define('EMOJI_W_SUNNY',            iconv('UCS-4LE', 'UTF-8', pack('V', 0x2600)));
defined('EMOJI_W_CLEAR') 		or define('EMOJI_W_CLEAR',            iconv('UCS-4LE', 'UTF-8', pack('V', 0x2728)));
defined('EMOJI_W_RAIN') 		or define('EMOJI_W_RAIN',             iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F327)));
defined('EMOJI_W_PARTLY_CLOUDY') 	or define('EMOJI_W_PARTLY_CLOUDY',    iconv('UCS-4LE', 'UTF-8', pack('V', 0x26C5)));
defined('EMOJI_W_CLOUDY') 		or define('EMOJI_W_CLOUDY',           iconv('UCS-4LE', 'UTF-8', pack('V', 0x2601)));
defined('EMOJI_W_WINDY') 		or define('EMOJI_W_WINDY',            iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F32C)));
defined('EMOJI_W_SNOW') 		or define('EMOJI_W_SNOW',             iconv('UCS-4LE', 'UTF-8', pack('V', 0x2744)));
defined('EMOJI_W_FOG') 			or define('EMOJI_W_FOG',              iconv('UCS-4LE', 'UTF-8', pack('V', 0x1F301)));

// Weather.
$weather = array(
    '1' => EMOJI_W_SUNNY,
    '2' => EMOJI_W_CLEAR,
    '3' => EMOJI_W_RAIN,
    '4' => EMOJI_W_PARTLY_CLOUDY,
    '5' => EMOJI_W_CLOUDY,
    '6' => EMOJI_W_WINDY,
    '7' => EMOJI_W_SNOW,
    '8' => EMOJI_W_FOG
);

// Teams.
$teams = array(
    'mystic'    => TEAM_B,
    'valor'     => TEAM_R,
    'instinct'  => TEAM_Y,
    'unknown'   => TEAM_UNKNOWN,
    'cancel'    => TEAM_CANCEL
);

// Raid eggs.
$eggs = array(
    '9996',  // Level 6 / Mega
    '9995',  // Level 5
    '9994',  // Level 4
    '9993',  // Level 3
    '9992',  // Level 2
    '9991'   // Level 1
);
