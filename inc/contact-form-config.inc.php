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
		],
		'newsletter' => [
			'type' => 'checkbox',
			'label' => 'Newsletter bestellen?',
			'id' => 'newsletter',
			'required' => false,
			'errorClass' => 'field-error',
			'value' => 'ja'
		],
		'kreditkarte' => [
			'type' => 'radio',
			'label' => 'Kreditkarten',
			'id' => 'kreditKarte',
			'required' => false,
			'errorClass' => 'field-error',
			'showFieldset' => false,
			'description' => 'Wie möchten Sie zahlen?',
			'radioButtons' => [
				['label' => 'Visa', 'value' => 'v', 'id' => 'visa', 'checked' => true],
				['label' => 'Mastercard', 'value' => 'm', 'id' => 'master'],
				['label' => 'American Express', 'value' => 'v', 'id' => 'express']
			]
		// SELECTBOX
		]
	]
];
?>