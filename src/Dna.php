<?php

namespace TinCat\Evolutive;

class Dna {
	private $genes;

	public function __construct($genes) {
		$this->genes = $genes;
	}

	public function __clone() {
		$oldGenes = $this->genes;
		$this->genes = [];
		