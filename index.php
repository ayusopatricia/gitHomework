<?php

namespace Hello\World;

	$objHelloWorld = new HelloWorld("Oscar");
	$objHelloWorld->say();
	
	$objShowHelloWorld = new ShowHelloWorld($objHelloWorld->getNombre());
	$objShowHelloWorld->epale();