<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2017.0.1.363
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Отправка каркас каталог проектов',
	'heading' => 'Отправка новой формы',
	'success_redirect' => 'thanks9.html',
	'resources' => array(
		'checkbox_checked' => 'Отмечено',
		'checkbox_unchecked' => 'Флажок не установлен',
		'submitted_from' => 'Формы, отправленные с веб-сайта: %s',
		'submitted_by' => 'IP-адрес посетителя: %s',
		'too_many_submissions' => 'Недопустимо высокое количество отправок с этого IP-адреса за последнее время',
		'failed_to_send_email' => 'Не удалось отправить сообщение эл. почты',
		'invalid_reCAPTCHA_private_key' => 'Недействительный закрытый ключ reCAPTCHA.',
		'invalid_reCAPTCHA2_private_key' => 'Недействительный закрытый ключ reCAPTCHA 2.0.',
		'invalid_reCAPTCHA2_server_response' => 'Недействительный ответ сервера reCAPTCHA 2.0.',
		'invalid_field_type' => 'Неизвестный тип поля \'%s\'.',
		'invalid_form_config' => 'Недопустимая конфигурация поля \"%s\".',
		'unknown_method' => 'Неизвестный метод запроса сервера'
	),
	'email' => array(
		'from' => 'zakaz@wood-cnt.ru',
		'to' => 'zakaz@wood-cnt.ru'
	),
	'fields' => array(
		'custom_U11440' => array(
			'order' => 2,
			'type' => 'string',
			'label' => 'Имя',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Имя\' не может быть пустым.'
			)
		),
		'custom_U11444' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'телефон',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'телефон\' не может быть пустым.'
			)
		),
		'custom_U11448' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Проект',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Проект\' не может быть пустым.'
			)
		)
	)
);

process_form($form);
?>
