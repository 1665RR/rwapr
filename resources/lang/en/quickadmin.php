<?php

return [
	
	'user-management' => [
		'title' => 'Moje ulaznice',
		'created_at' => 'Vrijeme',
		'fields' => [
		],
	],
	
	'roles' => [
		'title' => 'Role',
		'created_at' => 'Vrijeme',
		'fields' => [
			'title' => 'Naziv',
		],
	],
	
	'users' => [
		'title' => 'Korisnici',
		'created_at' => 'Vrijeme',
		'fields' => [
			'name' => 'Ime',
			'email' => 'Email',
			'password' => 'Lozinka',
			'role' => 'Role',
			'remember-token' => 'Remember token',
		],
	],
	
	'events' => [
		'title' => 'Događaji',
		'created_at' => 'Vrijeme',
		'fields' => [
			'title' => 'Naslov',
			'description' => 'Opis',
			'start-time' => 'Početak',
			'venue' => 'Prostor',
		],
	],
	
	'tickets' => [
		'title' => 'Ulaznice',
		'created_at' => 'Vrijeme',
		'fields' => [
			'event' => 'Događaj',
			'title' => 'Vrsta ulaznice',
			'amount' => 'Količina dostupnih ulaznica',
			'available-from' => 'Dostupno od',
			'available-to' => 'Dostupno do',
			'price' => 'Cijena',
		],
	],
	
	'payments' => [
		'title' => 'Plaćanje',
		'created_at' => 'Vrjeme',
		'fields' => [
			'email' => 'Email',
			'merchant' => 'Prodaja',
			'amount' => 'Količina',
		],
	],
	'qa_create' => 'Kriraj',
	'qa_save' => 'Spremi',
	'qa_edit' => 'Uredi',
	'qa_view' => 'View',
	'qa_update' => 'Ažuriraj',
	'qa_list' => 'Lista',
	'qa_no_entries_in_table' => 'Nema podataka u tablici',
	'custom_controller_index' => 'Custom controller index.',
	'qa_logout' => 'Odjava',
	'qa_add_new' => 'Dodaj novi',
	'qa_are_you_sure' => 'Jeste li sigurni?',
	'qa_back_to_list' => 'Natrag na listu',
	'qa_dashboard' => 'Dashboard',
	'qa_delete' => 'Obriši',
	'quickadmin_title' => 'MOJE ULAZNICE',
];