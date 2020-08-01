<?

if (!defined('WWW_SSL')) {
    define("WWW_SSL","https://geoforum.pl/");
}

if (!defined('DOMAIN')) {
    define("DOMAIN","geoforum.pl");
}

define("CLIENT","client/geoforum/");
define("FIX","zzz_");

define("COMMON_MODE",0);
define("USER_MODE",1);
define("ADMIN_MODE",2);

define("FILM_EXTENTIONS","flv,avi,mpg,swf");
define("MUSIC_EXTENTIONS","mp3");
define("DOC_EXTENTIONS","pdf,doc,docx,xls,xlsx,txt,rtf,csv,zip,rar");
define("IMAGE_EXTENTIONS","gif,jpg,jpeg,png");

define("ALLOWED_EXTENTIONS",DOC_EXTENTIONS.",".IMAGE_EXTENTIONS.",".FILM_EXTENTIONS.",".MUSIC_EXTENTIONS);

define("MICRO_IMAGE_WIDTH",60);

define("MINI_IMAGE_WIDTH",100);
define("SMALL_IMAGE_WIDTH",200);
define("MAIN_IMAGE_WIDTH",300);
define("MIDDLE_IMAGE_WIDTH",600);
define("MAX_IMAGE_WIDTH",1500);
define("BIG_IMAGE_WIDTH",1010);

define("WAIT_HTML","<div class='wait'></div>");
define("WAIT_HTML_SMALL","<div class='wait_small'></div>");


define("USER_FORMULAR_LINK",WWW_SSL."ankieta/");
define("USER_FORMULAR_LINK_THANX",WWW_SSL."?menu=47275,47276&page=form_thank_you");


define("USER_LOGIN_REMINDER",WWW_SSL."?menu=47130,47136&page=user_form&form_name=user_reminder");
define("USER_NICK_LOGIN_REMINDER",WWW_SSL."?menu=47286,47287&page=user_form&form_name=user_nick_reminder");


define("USER_LOGIN_REMINDER_SENT",WWW_SSL."?menu=47130,47136,47152");
define("USER_NICK_LOGIN_REMINDER_SENT",WWW_SSL."?menu=47286,47287,47288");


define("USER_ACCOUNT",WWW_SSL."?menu=47130&page=user_account");
define("USER_NICK_ACCOUNT",WWW_SSL."?menu=47286&page=user_nick_account");

define("USER_LOGIN",WWW_SSL."?menu=47130,47139&page=user_form&form_name=user_login");
define("USER_NICK_LOGIN",WWW_SSL."?menu=47286,47294&page=user_form&form_name=user_nick_login");


define("USER_EDIT_ACCOUNT",WWW_SSL."?menu=47130,47133&page=user_form&form_name=user_edit_account");
define("USER_NICK_EDIT_ACCOUNT",WWW_SSL."?menu=47286,47289&page=user_form&form_name=user_nick_edit_account");

define("USER_EDIT_ACCOUNT_ACTIVATED",WWW_SSL."?menu=47130,47131,47137&page=user_account");
define("USER_NICK_EDIT_ACCOUNT_ACTIVATED",WWW_SSL."?menu=47286,47290,47137&page=user_nick_account");


define("USER_EDIT_ACCOUNT_THANX",WWW_SSL."?menu=47130,47131,47132");
define("USER_NICK_EDIT_ACCOUNT_THANX",WWW_SSL."?menu=47286,47290,47293");


define("USER_EDIT_ACCOUNT_ACTIVATE_ERROR",WWW_SSL."?menu=47130,47131,47138&page=user_account");
define("USER_NICK_EDIT_ACCOUNT_ACTIVATE_ERROR",WWW_SSL."?menu=47286,47290,47292&page=user_nick_account");


define("USER_REGISTER",WWW_SSL."?menu=47130,47131&page=user_form&form_name=user_register");
define("USER_NICK_REGISTER",WWW_SSL."?menu=47286,47290&page=user_form&form_name=user_nick_register");


define("USER_LOGOUT",WWW_SSL."/action/?action=logout");
define("USER_NICK_LOGOUT",WWW_SSL."/action/?action=nick_logout");

define("USER_EDIT_SUBSCRIPTION",WWW_SSL."?menu=47130,47133,47153&page=user_form&form_name=user_edit_subscription");

define("SPIS_GEODETY_LIMIT_OVER",WWW_SSL."?menu=47064,47149,47224&link=archiwum-geodety-pliki-pdf-wyczerpales-swoj-limit-pobran");

define("ARCHIWUM",WWW_SSL."?menu=47151&page=pdf_archieve&year=2010&link=dla-prenumeratorow");



define("BASKET_SHOW",WWW_SSL."?menu=46976,46977&page=basket&link=ksiegarnia-twoj-koszyk");

?>