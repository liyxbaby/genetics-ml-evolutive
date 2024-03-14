# Genetics ML Evolutive
A library to study evolutive, genetics-based machine learning algorithms in an object-oriented programming paradigm. The original project was by another author, and this is a fork by [liyxbaby](https://github.com/liyxbaby).

## The Ingredients
Evolutive revolves around the following classes, each representing crucial components in this mechanics:
- **Nursery** Facilitates all breeding of Specimens, mirroring an evolutive procedure.
- **Breed** Symbolizes a group of Specimens bred from an original Dna.
- **Specimen** Represents a distinct Specimen carrying specific Dna.
- **Dna** Holds all the differential traits of the Specimen it is a part of. It contains Genes.
- **Gene** Represents a characteristic of a Specimen. It contains a Mutagen.
- **Mutagen** Represents external influences causing Specimens' differences by mutating a gene. Mutagens alter Genes in a unique way (an offset) when a Gene is mutated (mutation takes place when a Specimen is bred). The simulated evolutive procedure tries to preserve Mutagens leading to better fitness and mutates ones that offer less fitness.

## The Procedure
1. **The Zero Specimen** First, a specimen is 