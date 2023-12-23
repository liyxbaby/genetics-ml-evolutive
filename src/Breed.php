<?php

namespace TinCat\Evolutive;

class Breed {
	private $specimens;

	// Creates a Breed with the specified number of specimens, all genetically related to the provided $baseSpecimen
	public function __construct($baseSpecimen, $numberOfSpecimens, $runParameters) {
		for ($i = 0; $i < $numberOfSpecimens; $i ++)
			$this->specimens[] = $baseSpecimen->breed($runParameters);
	}

	public function getFittestSpecimen() {
		$bestFit = null;
		$bestFitSpecimen = false;
		foreach ($this->specimens as $specimen) {
			$fitnes