## Make an API calls

The idea is to make a controller to make one API call and put that on a select option.
Then, you could select the option and hit the "view" button to display the body of the email.
This is not a button, is a Vue objetc to avoid changing to a different page.

Note: 
I made the API call on the controller and display the info.
I created the Vue object to display the body of a single Email

I don't know how to pass the selected option to that Vue object. I even create a JS function but didn't work.
I Hope I can fix this later. 


[RestAPI site](http://jsonplaceholder.typicode.com)

Option 1
1. Make a Controller to fech the data
2. Make a View to display the data
3. Make a Route where to show the data
4. Code the API call on the Controller

Option 2
1. Create a Vue object inside js components
2. use axios to make API calls and pass data to the objects there
3. If you want all on a SPA, you should use vue-router to make routes to just one page

On Vue we use "v-tags"
v-for --> For a For condition
v-model --> to bind data
v-text --> to add text
v-if --> to create an If condition 

Some properities that we can use on Vuw

props --> Where we can set Properties of an HTML object
data --> Information that we pass to a HTML object (a value)
methods --> Functions that we run 
computed --> To make Data Variables
mounted -->
