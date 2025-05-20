# OOP

## Class diagrams

Class diagram in mermaid

Syntax breakdown:

    Defining classes: An individual class is defined with the class keyword followed by the class name.

    Adding class properties: Class properties are added with a + sign. In the example above, +breed is a property.

    Adding methods: Methods are recognized by mermaid using (), the round braces. Note that all the properties and methods are grouped under the same class using curly braces.

    Defining return types: Return types are defined after the method name/ class name. string and void are the return types in the above code.

    Defining relation ships: In OOP, relationships are the specific types of logical connections found on class and object diagrams. The following relationship types are supported in mermaid:

| Type	| Description |
| --- | --- | 
|<	| --	Inheritance|
|*-- |	Composition|




o--	Aggregation
-->	Association
--	Link (Solid)
..>	Dependency
..	>	Realization
..	Link (Dashed)

