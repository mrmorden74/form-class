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
			'tagAtrributes' => [
				'title' => 'Anrede',
				'placeholder' => 'Anrede und Titel'
			]
		],
		'vorname' => [
			'type' => 'text',
			'label' => 'Vorname',
			'id' => 'vorname',
			'required' => true,
			'errorClass' => 'field-error',
			'tagAtrributes' => [
				'title' => 'Vorname',
				'placeholder' => 'Vorname'
			]

		],
		'nachname' => [
			'type' => 'text',
			'label' => 'Nachname',
			'id' => 'nachname',
			'required' => true,
			'errorClass' => 'field-error',
			'tagAtrributes' => [
				'title' => 'Nachname',
				'placeholder' => 'Nachname'
			]

		],
		'email' => [
			'type' => 'text',
			'label' => 'Email',
			'id' => 'email',
			'required' => true,
			'errorClass' => 'field-error',
			'tagAtrributes' => [
				'title' => 'Email',
				'placeholder' => 'Email Adresse'
			]

		],
		'nachricht' => [
			'type' => 'text',
			'label' => 'Nachricht',
			'id' => 'nachricht',
			'required' => true,
			'errorClass' => 'field-error',
			'tagAtrributes' => [
				'title' => 'Nachricht',
				'placeholder' => 'Was wollen Sie uns mitteilen?'
			]

		]
	]
];
?>