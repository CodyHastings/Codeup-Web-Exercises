(function(){
    "use strict";

    /**
     * TODO:
     * Create person object, store it in a variable named person
     */

     // var person = {
     //    "firstName": "Cody",
     //    "lastName": "Hastings",
     //    "sayHello": function() {
     //    console.log("Hello " + this.firstName + " " + this.lastName);
     //    },
       
     // }

     //    person.sayHello();


    /**
     * TODO:
     * Create firstName and lastName properties in your person object, and
     * assign your name to them
     */

    /**
     * TODO:
     * Add a sayHello method to the person object that returns a greeting using
     * the firstName and lastName properties.
     * console.log the returned message to check your work
     *
     * Example
     * person.sayHello() // returns "Hello from Rick Sanchez!"
     */

    /** TODO: Remember this problem from before?
     *
     * HEB has an offer for the shoppers that buy products amounting to more
     * than $200. Write a JS program, using conditionals, that logs to the
     * browser, how much does Ryan, Cameron and George need to pay. We know that
     * Cameron bought $180, Ryan $250 and George $320. Your program will have to
     * display a line with the name of the person, the amount before the
     * discount, the discount, if any, and the amount after the discount.
     *
     * Uncomment the lines below to create an array of objects where each object
     * represents one shopper. Use a foreach loop to iterate through the array,
     * and console.log the relevant messages for each person
     */

    var shoppers = [
        {name: 'Cameron', amount: 180},
        {name: 'Ryan', amount: 250},
        {name: 'George', amount: 320}
    ];


    shoppers.forEach(function(person) {
        if (person.amount > 200) {
            console.log(person.name + " bought " + "$" + person.amount + " and gets a 10% discount for spending over $200 " + person.name + " pays $" + person.amount * .9 + " at the register." );
        } else {
            console.log(person.name + " bought less than $200 and does not get a discount. " + person.name + " spends " + person.amount + " at the register.");
        }

        });


    


})();