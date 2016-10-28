<?php
$formConf = [
	'form' => [
		'method' => 'post',
		'action' => '',
		'encType' => '',
		'tagAttributes' => [
			'class' => 'pure-form pure-form-stacked',
			'id' => 'contactForm',
			'title' => 'Kontaktieren Sie uns'
		]
	],
	'fields' => [
		'anrede' => [
			'type' => 'text',
			'label' => 'Anrede/Titel',
			'id' => 'anrede',
			'required' => true,
			'errorClass' => 'field-error',
			'tagAttributes' => [
				'title' => 'Anrede',
				'placeholder' => 'Anrede und Titel'
			]
		],
		'vorname' => [
			'type' => 'text',
			'label' => 'Vorname',
			'id' => 'vorname',
			'required' => true,
			'errorClass' => 'field-error'
		],
		'nachname' => [
			'type' => 'text',
			'label' => 'Nachname',
			'id' => 'nachname',
			'required' => true,
			'errorClass' => 'field-error',
			'tagAttributes' => [
				'title' => 'Nachname',
				'placeholder' => 'Nachname'
			]
		],
		'email' => [
			'type' => 'email',
			'label' => 'E-Mail',
			'id' => 'email',
			'required' => true,
			'errorClass' => 'field-error'
		],
		'nachricht' => [
			'type' => 'textarea',
			'label' => 'Nachricht',
			'id' => 'nachricht',
			'required' => true,
			'errorClass' => 'field-error'
		]
	]
];
?>