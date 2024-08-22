# Going to Bed
Completed as part of Codecademy's Learn PHP course. 


## Description
This project provides practice for:

    Creating objects from classes
    Writing and using methods
    Using static methods


## Instructions

Make a Helper Class

In this project we will be creating some pajamas for barnyard animals. The farmer has a special way that she likes names formatted. To ensure this, we are going to build our own string function similar to PHP’s built in strtolower or strtoupper.

We’re going to put this function inside of a helper class StringUtils (making it a method). We can then add other string utilities or reuse this class in another project for the same farmer.

Begin by creating a StringUtils class.

The farmer likes names to be entirely lowercase, except for the second letter, which should always be uppercase.

Define a method called secondCase inside of StringUtils which accomplishes this. This method should be static since we won’t be instantiating StringUtils. We are only using it as a helper class.

Test this method by invoking it statically with some strings and printing the results to the screen. There is a case that causes an error, can you find it?

While “Q” might not be a popular name, we might use StringUtils in a different application in the future and our method should handle single characters gracefully.

Modify secondCase so that it does not generate an error for:

echo StringUtils::secondCase("Q"); #should print "q"
echo StringUtils::secondCase(""); #should print an empty string

Pajamas Already

Now that we have our helper class, we are ready to start making pajamas.

Create a Pajamas class. It should have 3 private properties:

    owner
    fit
    color

Add a constructor class for Pajamas. It should allow 3 arguments to be passed in corresponding to the 3 properties we just defined.

Provide defaults for each argument (of your choosing).

Make sure to assign the passed in values to their corresponding properties. Use secondCase in the StringUtils helper class to ensure that the owner property is properly formatted.

We want to be able to describe each Pajamas object.

Add a public describe method which returns a string using the 3 properties to tell us about the object.

Now we have enough that we can begin testing our class out. Create an instance of the Pajamas class for “CHICKEN”. Assign it to the variable chicken_PJs. Use your favorite color and fit.

Print the result of using the describe method on chicken_PJs.

Let’s say something happened to chicken’s pajamas to change the fit. Like maybe they were washed many times and shrunk. Since fit is a private property, we need to make a setter.

Create a public method setFit which can be used to modify the fit of the pajamas.

Now test the setFit method by tightening up chicken’s PJs. Be sure to print the result.

A Specialized Type of Pajamas

Some animals need their pajamas to have buttons so that they can put them on.

Create a new class ButtonablePajamas that inherits from Pajamas.

We’ll need a new private property, button_state, to maintain the status of the buttons (“buttoned” or “unbuttoned”).

Add this property to ButtonablePajamas and set it to "unbuttoned".

The describe method makes no mention of buttons, but it seems like the right place for a message about the buttons.

Within ButtonablePajamas, override the describe method. The version for this class should include a statement about whether the pajamas are buttoned or not.

Remember that you can reuse the parent method with parent::describe() and concatenate the statement about the buttons.

Let’s test this class on an animal that definitely needs buttons. Create an instance of ButtonablePajamas with the owner "moose" and save it to the variable $moose_PJs.

Use the describe method to ensure that it let’s us know the pajamas are unbuttoned.

Moose would like to close his pajamas, but button_state is private. Create a method toggleButtons that flips the state of the buttons. It should take no arguments.

Make sure to check that this method works as expected. Print the result.



## Languages used:
* PHP
  
## Completed Date:
* 22Aug24
