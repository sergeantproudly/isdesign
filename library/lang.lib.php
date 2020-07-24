<?php

krnLoadLib('settings');
krnLoadLib('define');

class Lang {
	const ERROR404 = 'ERROR404';
	const ERROR404_HEADER = 'ERROR404_HEADER';
	const PRIVACY_POLICY = 'PRIVACY_POLICY';
	const MAP = 'MAP';
	const FEEDBACK = 'FEEDBACK';
	const CALCULATE = 'CALCULATE';
	const VIEW = 'VIEW';
	const VIEW_INSTAGRAM = 'VIEW_INSTAGRAM';
	const DETAILS = 'DETAILS';
	const SOCIAL_SERVICES = 'SOCIAL_SERVICES';
	const FIELD_NAME = 'NAME';
	const FIELD_PHONE = 'PHONE';
	const FIELD_EMAIL = 'EMAIL';
	const FIELD_TEXT = 'TEXT';
	const FIELD_TEXT2 = 'TEXT2';
	const CLOSE = 'CLOSE';
	const AGREEMENT = 'AGREEMENT';
	const SEND = 'SEND';
	const SHARE = 'SHARE';
	const SHOW_MORE = 'SHOW_MORE';
	const ADMINISTRATOR_NAME = 'ADMINISTRATOR_NAME';
	const FORM_ERROR_SERVER = 'FORM_ERROR_SERVER';
	const FORM_ERROR_SPAM = 'FORM_ERROR_SPAM';
	const PAGE_HOME = 'PAGE_HOME';
	const CATEGORY_NEW = 'CATEGORY_NEW';
	const COOKIES_TEXT = 'COOKIES_TEXT';
	const COOKIES_BUTTON = 'COOKIES_BUTTON';
	const MONTHS_JAN = 'MONTHS_JAN';
	const MONTHS_FEB = 'MONTHS_FEB';
	const MONTHS_MAR = 'MONTHS_MAR';
	const MONTHS_APR = 'MONTHS_APR';
	const MONTHS_MAY = 'MONTHS_MAY';
	const MONTHS_JUN = 'MONTHS_JUN';
	const MONTHS_JUL = 'MONTHS_JUL';
	const MONTHS_AUG = 'MONTHS_AUG';
	const MONTHS_SEP = 'MONTHS_SEP';
	const MONTHS_OKT = 'MONTHS_OKT';
	const MONTHS_NOV = 'MONTHS_NOV';
	const MONTHS_DEC = 'MONTHS_DEC';


	protected $db;
	protected $settings;

	protected $langs = [];
	protected $lang;
	protected $data = [
		'ru'	=> [
			self::ERROR404 => 'Видимо, что-то пошло не так.<br/>Попробуйте перейти на <a href="/">главную</a> или <a href="tel:<%TELLINK%>" class="tel">позвоните по номеру <%TEL%></a>',
			self::ERROR404_HEADER => 'Увы, пусто',
			self::PRIVACY_POLICY => 'Обработка персональных данных',
			self::MAP => 'Карта сайта',
			self::FEEDBACK => 'Обратная связь',
			self::CALCULATE => 'Получить расчет стоимости',
			self::VIEW => 'Смотреть',
			self::VIEW_INSTAGRAM => 'Смотреть наш Instagram',
			self::DETAILS => 'Подробнее',
			self::SOCIAL_SERVICES => 'Социальные сети',
			self::FIELD_NAME => 'Имя',
			self::FIELD_PHONE => 'Телефон',
			self::FIELD_EMAIL => 'E-mail',
			self::FIELD_TEXT => 'Вопрос коротко',
			self::FIELD_TEXT2 => 'Вопрос',
			self::CLOSE => 'Закрыть',
			self::AGREEMENT => 'Я даю согласие на обработку своих<br/><a href="/privacy-policy/">персональных данных</a>',
			self::SEND => 'Отправить',
			self::SHARE => 'Поделиться',
			self::SHOW_MORE => 'Показать еще',
			self::ADMINISTRATOR_NAME => 'Администратор',
			self::FORM_ERROR_SERVER => 'Серверная ошибка. При повторном возникновении, пожалуйста, обратитесь к администратору.',
			self::FORM_ERROR_SPAM => 'Сработал антиспам. При повторном возникновении, пожалуйста, обратитесь к администратору.',
			self::PAGE_HOME => 'Главная',
			self::CATEGORY_NEW => 'Новые проекты',
			self::COOKIES_TEXT => 'Используя сайт ISDesign group, вы соглашаетесь с использованием файлов cookie и сервисов сбора технических данных для улучшения качества обслуживания. <a href="/privacy-policy/">Подробнее</a>',
			self::COOKIES_BUTTON => 'Хорошо',
			self::MONTHS_JAN => 'января',
			self::MONTHS_FEB => 'февраля',
			self::MONTHS_MAR => 'марта',
			self::MONTHS_APR => 'апреля',
			self::MONTHS_MAY => 'мая',
			self::MONTHS_JUN => 'июня',
			self::MONTHS_JUL => 'июля',
			self::MONTHS_AUG => 'августа',
			self::MONTHS_SEP => 'сентября',
			self::MONTHS_OKT => 'октября',
			self::MONTHS_NOV => 'ноября',
			self::MONTHS_DEC => 'декабря',
		],
		'en'	=> [
			self::ERROR404 => 'Something went wrong.<br/>You can go to <a href="/">home page</a> or <a href="tel:<%TELLINK%>" class="tel">call us on <%TEL%></a>',
			self::PRIVACY_POLICY => 'Privacy policy',
			self::MAP => 'Sitemap',
			self::FEEDBACK => 'Feedback',
			self::CALCULATE => 'Get calculation',
			self::VIEW => 'View',
			self::VIEW_INSTAGRAM => 'View our Instagram',
			self::DETAILS => 'Details',
			self::SOCIAL_SERVICES => 'Social',
			self::FIELD_NAME => 'Name',
			self::FIELD_PHONE => 'Phone',
			self::FIELD_EMAIL => 'E-mail',
			self::FIELD_TEXT => 'Question briefly',
			self::FIELD_TEXT2 => 'Question',
			self::CLOSE => 'Close',
			self::AGREEMENT => 'I agree to confirm <br/><a href="/privacy-policy/">Privacy policy</a>',
			self::SEND => 'Send',
			self::SHARE => 'Share',
			self::SHOW_MORE => 'See more',
			self::ADMINISTRATOR_NAME => 'Administrator',
			self::FORM_ERROR_SERVER => 'Server side error. If this occurs, please contact us.',
			self::FORM_ERROR_SPAM => 'Spam error. If this occurs, please contact us.',
			self::PAGE_HOME => 'Home',
			self::CATEGORY_NEW => 'New projects',
			self::COOKIES_TEXT => 'Используя сайт ISDesign group, вы соглашаетесь с использованием файлов cookie и сервисов сбора технических данных для улучшения качества обслуживания. <a href="/privacy-policy/">Подробнее</a>',
			self::COOKIES_BUTTON => 'Хорошо',
			self::MONTHS_JAN => 'января',
			self::MONTHS_FEB => 'февраля',
			self::MONTHS_MAR => 'марта',
			self::MONTHS_APR => 'апреля',
			self::MONTHS_MAY => 'мая',
			self::MONTHS_JUN => 'июня',
			self::MONTHS_JUL => 'июля',
			self::MONTHS_AUG => 'августа',
			self::MONTHS_SEP => 'сентября',
			self::MONTHS_OKT => 'октября',
			self::MONTHS_NOV => 'ноября',
			self::MONTHS_DEC => 'декабря',
		],
		'cz'	=> [
			self::ERROR404 => 'Видимо, что-то пошло не так.<br/>Попробуйте перейти на <a href="/">главную</a> или <a href="tel:<%TELLINK%>" class="tel">позвоните по номеру <%TEL%></a>',
			self::PRIVACY_POLICY => 'Обработка персональных данных',
			self::MAP => 'Карта сайта',
			self::FEEDBACK => 'Обратная связь',
			self::CALCULATE => 'Получить расчет стоимости',
			self::VIEW => 'Смотреть',
			self::VIEW_INSTAGRAM => 'Смотреть наш Instagram',
			self::DETAILS => 'Подробнее',
			self::SOCIAL_SERVICES => 'Социальные сети',
			self::FIELD_NAME => 'Имя',
			self::FIELD_PHONE => 'Телефон',
			self::FIELD_EMAIL => 'E-mail',
			self::FIELD_TEXT => 'Вопрос коротко',
			self::FIELD_TEXT2 => 'Вопрос',
			self::CLOSE => 'Закрыть',
			self::AGREEMENT => 'Я даю согласие на обработку своих<br/><a href="/privacy-policy/">персональных данных</a>',
			self::SEND => 'Отправить',
			self::SHARE => 'Поделиться',
			self::SHOW_MORE => 'Показать еще',
			self::ADMINISTRATOR_NAME => 'Администратор',
			self::FORM_ERROR_SERVER => 'Серверная ошибка. При повторном возникновении, пожалуйста, обратитесь к администратору.',
			self::FORM_ERROR_SPAM => 'Сработал антиспам. При повторном возникновении, пожалуйста, обратитесь к администратору.',
			self::PAGE_HOME => 'Главная',
			self::CATEGORY_NEW => 'Новые проекты',
			self::COOKIES_TEXT => 'Используя сайт ISDesign group, вы соглашаетесь с использованием файлов cookie и сервисов сбора технических данных для улучшения качества обслуживания. <a href="/privacy-policy/">Подробнее</a>',
			self::COOKIES_BUTTON => 'Хорошо',
			self::MONTHS_JAN => 'января',
			self::MONTHS_FEB => 'февраля',
			self::MONTHS_MAR => 'марта',
			self::MONTHS_APR => 'апреля',
			self::MONTHS_MAY => 'мая',
			self::MONTHS_JUN => 'июня',
			self::MONTHS_JUL => 'июля',
			self::MONTHS_AUG => 'августа',
			self::MONTHS_SEP => 'сентября',
			self::MONTHS_OKT => 'октября',
			self::MONTHS_NOV => 'ноября',
			self::MONTHS_DEC => 'декабря',
		],
	];

	public function __construct($domain = false) {
		global $Params;
		global $Settings;
		$this->db = $Params['Db']['Link'];
		$this->settings = $Settings;

		$this->langs = $this->db->getInd('Domain', 'SELECT * FROM languages ORDER BY IF(`Order`, -100/`Order`, 0)');
		if ($domain && in_array($domain, array_keys($this->langs))) {
			$this->lang = $this->langs[$domain];
		} else {
			$this->lang = current($this->langs);
		}
	}

	public function GetLangs() {
		return $this->langs;
	}

	public function GetLang($field = false) {
		return $field ? $this->lang[$field] : $this->lang;
	}

	public function GetId() {
		return $this->lang['Id'];
	}
	
	public function GetValue($code) {
		return $this->data[$this->lang['Acronym']][$code];
	}

	public function SetLangById($langId) {
		foreach ($this->langs as $lang) {
			if ($lang['Id'] == $langId) {
				$this->lang = $lang;
				return true;
			}
		}
		return false;
	}

	public function ProcessTemplate($template) {
		$subst = [];
		foreach ($this->data[$this->lang['Acronym']] as $key => $value) {
			$subst['<%LANG::' . $key . '%>'] = $value;
		}
		return strtr($template, $subst);
	}
}

?>