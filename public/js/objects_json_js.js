"use strict";

'use strict';

// todo:
// Create an array of objects that represent books.
// var books = 
// {"books": [
// 	{"title": "Lord of the Flies","author":{ "firstName":"William", "lastName":"Golding"}},
// 	{"title": "Heart of Darkness","author":{"firstName":"Joseph",  "lastName":"Conrad"}},
// 	{"title": "Things Fall Apart","author":{ "firstName":"Chinua",  "lastName":"Achebe"}},
// 	{"title": "Of Mice and Men", "author":{ "firstName":"John",    "lastName":"Steinbeck"}},
// 	{"title": "The Great Gatsby","author":{ "firstName":"Scott",    "lastName":"Fitzgerald"}}
// 	]}

var books = [
	{    
		"title": "Lord of the Flies",
		"author": {
			"firstName":"William", 
			"lastName":"Golding" 
		}		
	},
	{
		"title" : "Heart of Darkness",
		"author" : {
			"firstName": "Joseph",
			"lastName": "Conrad"
		}
	},
	{  
		"title" : "Things Fall Apart",
		"author" : {
			"firstName": "Chinua",
			"lastName" : "Achebe"
		}
	},
	{	
		"title": "Of Mice and Men",
		"author" : {
			"firstName": "John",
			"lastName" : "Steinbeck"
		}
	},
	{   
		"title" : "The Great Gatsby",
		"author" : {
			"firstName" : "Scott",
			"lastName" : "Fitzgerald"
		}
	}
];
//the shape of our data is an array with objects in it
// Each book should have a title and an author.
// The book author should be an object with a firstName and lastName.
// Be creative and add at least 5 books to the array
// var books = [todo];

// log out the books array
console.log(books);

// todo:
// Loop through the array of books using .forEach and print out the specified information about each one.
// start loop here
    // console.log("Book #" + todo);
    // console.log("Title: " + todo);
    // console.log("Author: " + todo);
    // console.log("---");
// end loop here



books.forEach(function(book,index,array){
	console.log("Book #" + (index + 1));
    console.log("Title: " + book.title);
    console.log("Author: " + book.author.firstName + " " + book.author.lastName + ".");
    console.log("---");


});



