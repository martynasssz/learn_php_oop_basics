<?php
	
	/*
	
	#public visuability

	class Person {
		public $name;
		public $email;
	}

	$person1 = new Person; //instantiant class creating a new object

	$person1 ->name ='Martin Ku';

	echo $person1->name; //narsykleje parodo Martin Ku

	*/

	#private visuability

	/*

	class Person {
		private $name; // private negalesime tiesiai pasiekti per ojekta
		private $email;

		//kad pasiekti kintamaji ji reikia susisetint, o po to pasiiti per get metoda
		public function setName($name){
			$this->name =$name;
		}

		public function getName(){
			return $this->name;
		}

	}

	$person1 = New Person;

	$person1->setName('Martin Ku');

	echo $person1->getName(); // narsykleje parodo Martin Ku

	*/

	class Person {
		private $name; // private negalesime tiesiai pasiekti per ojekta
		private $email;
		//public static $ageLimit = 40; //static property (kintamajam) uzsetinam defaultine reiksme 40
		private static $ageLimit = 40; //pasiekiam intamaji per static metoda

		//kad nereiktu kiekviena karta padavineti reiksmiu sukuriame konstruktoriu

		public function __construct($name, $email){ //run, when we instantiate (creating) new object //pass name, email to contructor
			$this->name = $name; //set name as we did in setName method
			$this->email = $email; // set email s we did in setName method
			echo __CLASS__.' create<br>';	//megic method   __CLASS__  gives name of the class
		}

		// contruktoriaus sunaikinimui naudojame destruct

		public function __destruct(){
			echo __CLASS__.' destroid<br>';
		}


		//kad pasiekti kintamaji ji reikia susisetint, o po to pasiiti per get metoda
		public function setName($name){
			$this->name =$name;
		}

		public function getName(){
			return $this->name.'<br>';
		}

		public function setEmail($email){
			$this->email=$email;
		}

		public function getEmail(){
			return $this->email.'<br>';
		}	
			
		//kuriame static metoda

		public static function getAgeLimit(){
			return self::$ageLimit; //static metode metode vietoje this naudojame self
		}
	}

	#static properties
	//echo Person::$ageLimit; //pasiekiam static kintamaji nesukurdami objekto //gauname 40

	#static methods

	echo Person::getAgeLimit(); //gauname 40


	//$person1 = New Person('Martin Ku', 'martin@gmail.com');//i objekta paduodame name ir email

	//$person1->setName('Martin Ku');

	//echo $person1->getName(); //narsykleje gauname varda John Doe


	#inherit (extends classes and methods
	

	class Customer extends Person {		
		private $balance;

		public function __construct($name, $email, $balance){
			parent::__construct($name, $email, $balance); //taip pat iskvieciame tevini konstuktoriu
			$this->balance =$balance; //uzsetinam kaip ir setBalance metode
			echo 'A new '.__CLASS__.' has been created<br>';
		}

		public function setBalance($balance){
			$this->balance =$balance;
		}

		public function getBalance(){
			return $this->balance.'<br>';
		}
	}

	//$customer1 = New Customer('Martin Ku', 'martin@gmail.com', 300); //paduodame reismes i objekta:name, email, balance. jei norime paduoti balance, reikia sukurti kontrostruktoriu balance klaseje

	//echo $customer1->getBalance(); //gauname reiksme 300


	



	







