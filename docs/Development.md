# Development of a Database-Driven Web Application for NCEA Level 3

Project Name: **MotiveAuto**

Project Author: **Myles Smalley**

Assessment Standards: **91902** and **91903**


-------------------------------------------------

## Design, Development and Testing Log

### 21/05/24

Starting Database Sketch

I began looking at what my final database would look like, and after a few different iterations, I landed on this. Each user can have many cars on the sight.
![Alt text](images/db.png)

> User had no questions about the layout of the database, was happy with the layout, and all the features it offers.

I left the Database sketch how it was, since it would cater to the end-users needs as is.

### 23/05/24

Sketched out how I intend the website will run

Below is a all the actions I will aim to include in the functionality of my Website, including all the pages, their function, and all the options that the users will have when accessing the pages.
![Alt text](images/sketch.png)

> End User was happy with how it looked, and said he couldn't wait to see a working version.

My end user gave me no feedback to act on.

### 24/05/24

Started on Website Design using Figma

This is the first draft of what the front end of the home page of my website will look like. I will most definitely add to this, but I will get the end-user to give me tips on what to add.  
![Alt text](images/figmav1.png)

> End user wanted a search bar so they could search for cars that was, instead of just scrolling in hope of finding the car they want. He also said that a darker colour scheme with highlights would be better than the black, white and grey.

Search bar was added, I shall look at colours later down the track.

![Alt text](images/searchbar.png)

### 07/06/24

Finished Figma Draft

I finished a first draft on all the pages in my website.
![Alt text](images/figmav2.png)

> End user is very happy with how the draft is layed out, and how all the components function with each other. I let the end user navigate around the wesite himself, and he didn't have any issues with the UI or Functionality.

I think I will need to make the navigation tab a little larger in the coded version. But other than that, no immediate changes will be made.

### 07/06/24

Colour Scheme

This is the scheme I liked the most after testing some out. I shall see what my end user says. Having a colour scheme that the end user likes in important factor for the Aesthetic heristic.
![Alt text](images/colour.png)

> End user was much happier with the darker colour as apposed to the white, grey and black. They were also a big fan of the green.

I have changed the colour scheme on all the pages to the darker scheme as the end user requested.

Old Colour Scheme
![alt text](images/oldscheme.png)
New Colour Scheme
![alt text](images/newscheme.png)

New UI Design
![alt text](images/newui.png)


### 08/06/24

Font

I had a look at all the diffrent fonts that Figma has integrated into their system. I like the font Jaldi for my website. It's Clear, not fancy and easy to read.

![alt text](images/newfont.png)

> My end user also likes the Jaldi Font, for the same reasons I do, commenting on the fact that its not fancy, and hard on his eyes.

I will use the Jaldi font when I start coding the website.

Old 'Inter' Font

![alt text](images/oldfont.png)

New 'Jaldi' Font

![alt text](images/newfont.png)

### 11/06/24

Created Database

I used the template that I made in the first development log, and created it in MySQL. It has all the tables and columns that I planned, and it looks great.

Tables:

![Alt text](images/carstable.png) ![Alt text](images/messagetable.png) ![Alt text](images/usertable.png)

I also added some test data to the 'users' and 'cars' tables, and they are all working as expected.

![Alt text](images/userstest.png)
![Alt text](images/carstest.png)

> User Feedback

How user Feedback was acted upon.

### 05/07/24

Started on Website.


I've started on my assessment website, the user can log in, and out currently.

Logged Out
![Alt text](images/loggedout.png)

Logged In
![Alt text](images/loggedin.png)


> User says this is a good start, and can't wait to give feedback when the site has more substance. 

### 12/07/24

Colour Scheme (CSS)


I had a play around with the style sheet. Seeing how the green looked and what needed to be changed to make it work with the page.

Before Styles
![Alt text](images/loggedout.png)

After Styles
![Alt text](images/afterstyles.png)

> "Good start. Definitely needs some work with the buttons and the spacing between some text."

Upon editing, I found out that on a light themed device, the background of the web site also inherits that light colour theme (How user Feedback was acted upon.)

Before fix:

![Alt text](images/whitetheme1.png)

After fix: (Still white device theme)

![Alt text](images/whitetheme2.png)

### 14/07/24

Home Page/Seeing Car information

The home page in the main page that users will look at. It is where all the different cars that are for sale will show up and can be viewed and interacted with by the viewer. The user can click on the cars and see extra information about it, including the ability to contact the owner if you are interested in buying it.

Home Page Design:

![Alt text](images/firsthome.png)

Car information Page:

![Alt text](images/firstcarinfo.png)


> I don't like the two text colours, I think pick one or the other. And maybe a border around the image of the same colour?

How user Feedback was acted upon.

Final Home Page design:

![Alt text](images/finalhome.png)

Final Car Information Page design:

![Alt text](images/finalcarinfo.png)

> Yeah, I like that better!

### 15/07/24

Form for Adding Cars


I completed the form that allows the user to add cars to sell. and looks neat. the car information is added, and shows up on the home page as intended.

About to add car in 

![Alt text](images/addingcar.png)

View from Home page after car added.

![Alt text](images/caradded.png)

> "It looks good, and it does it's job. Could you change the colour of the text that shows you what file you've chosen, it doesn't work well with the green."

I changed the colour of the text that my end user wanted, and I think it looks much better.

Before Change:

![alt text](images/beforetext.png)

After Change:

![alt text](images/aftertext.png)

> "Yes, better. My eyes like that."

### 17/07/24

Sending/Recieving Messages

If the End-User decides they want to buy the car, there is a button down the bottom of the Car information Page that redirects the user to a page where they can send the owner a message to say that they are interested. 

First Page Design:

![alt text](images/firstmessage.png)

Message Sent:

![alt text](images/firstsentmessage.png)

Message Received:

![alt text](images/messageseen.png)

> "Well, The code does what it is meant to. But the smaller text colour on the page you use to send messages is extremely hard to read, fix that please."

I changed the text colour to white instead of black, and it is much easier to read. 

Page with white text:

![Alt text](images/finalsentmessage.png)

Message sent with white text:

![Alt text](images/finalmessagesent.png)

>"Yep, that's much better." 

### 23/8/24

HTML Validation

Here I am validating the code for the Welcome page of my website. To make sure there is no holes in my code and I have codded it all properly. If you look at the Screenshot, it says there is a message hidden. That is a line of HTMX Routing, and the validator doesn't like that for some reason.

Validation results from Welcome Page:

![Alt text](images/validate.png)

### 23/8/24

Site Finished/Functionality video

Here is a video of my testing the functionality of my website. In the video you will see me:

-Signing in/Logging out
-Using the Navigation
-Adding a Car to the Database
-Viewing a car
-Sending a message to an owner
-Logging into the owners account and viewing the message we sent him

https://mywaimeaschool-my.sharepoint.com/:v:/g/personal/msmalley_waimea_school_nz/EUZk9MIE97JPn_qntpVFKcsBPJwmSGgS7b_gXa1hDFmc2Q?e=ZvKiT0&nav=eyJyZWZlcnJhbEluZm8iOnsicmVmZXJyYWxBcHAiOiJTdHJlYW1XZWJBcHAiLCJyZWZlcnJhbFZpZXciOiJTaGFyZURpYWxvZy1MaW5rIiwicmVmZXJyYWxBcHBQbGF0Zm9ybSI6IldlYiIsInJlZmVycmFsTW9kZSI6InZpZXcifX0%3D


<!-- ### DATE

Title of Progress


Details of Project

> User Feedback

How user Feedback was acted upon. -->



