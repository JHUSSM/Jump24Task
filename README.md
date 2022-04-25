# Jump24Task
My Jump24 Task Attempt. 

It's important to know when making your Mysqli database in phpMyAdmin, the name of the database should be <b> login_register </b> and the table should be called <b> users </b>. The users table should have the following:

* ‘id’ - int, primary key
* ‘username’ - varchar, 255
* ‘email’ - varchar, 255
* ‘password’ - varchar, 255

<br>
<br>
I really enjoyed putting this PHP project together. I’ve learnt so much from doing my own research and finding credible sources of information. I’ve gone from never writing in PHP code just two weeks ago, to making what I have made possible and learnt so much along the way. 
<br>
<br>
The task asked of me to <b>Create a simple application using PHP that allows a user to login using their email address and a password</b> . I figured it would only be possible if they have a signup page to begin with, so those access details could be saved to a database and be used to login. 
I concentrated on having the signup page functional. Doing all the checks like seeing if those details were being saved to the mysqli database, I had set up at phpMyAdmin. Everything worked fine, so I moved onto making the login page, like the task asked for. Just like the sign up page, the login page worked as it should, getting the correct access details for the user from the database. 
Now that the user was logged in I was met with a blank page, I wasn’t really sure what to fill it with, I thought about putting all this text in there, but decided to put it in the readme file instead. 


Sure, I had some bumps along the way, when I was making this application, but nothing too crazy, just the odd missing closing bracket or missing semicolon. I found and corrected those quite easily thanks to the syntax errors when I refreshed the browser.


I had my first big problem when I noticed that the css code I was writing and making changes to, stopped appearing on my website. After making a few changes to my .CSS file on VS Code, I noticed when looking at my application from the web that it was not updating. I tried saving and refreshing even commenting out all the CSS code etc but nothing was working, so I went to inspect the code from the website itself. When I'd make changes to the CSS portion of the app from the web it would show its updates live on the web. However when i’d refresh the webpage or click a button on the app all the changes would revert back to the original. After this happened I looked into what could be causing this issue, which was that I may need to clear my browser cache and/or the CDN cache, so I tried 2 solutions I found on the web. 

The first was to head back to visual studio code and press either <b> shift + f5 </b> or <b> ctrl + shift + r</b>, but this suggestion didn't work. 
The second solution I tried was to try opening the style sheet itself (by entering its address into the browser's address bar) and pressing <b>F5</b>. This solution ended up working for me and I was able to see all the changes that I had made. 
Now that I got it to work I looked for a solution to prevent this from happening. I found that if I add a version number as a GET parameter, the style sheet gets refreshed when necessary, but not more often than that, which is ideal. This solution has worked well for me since having it in place.

I then made a logout button so the user can do just that and return to the login page. My logout function had the least amount of code because nothing complicated was happening; it was just ending the session and returning to the login page, which in my case was ‘index,php’.  I then focused on trying to make the update password page and this was a bit of a challenge for me. I started off by taking code from my register.php page and making the front end look like how I wanted it to with the old password, new password and confirm new password sections.

The next big issue that I faced was trying to get my ‘update your password’ page to work so it does just that, but i couldn’t get it to work no matter what I tried. I did find a solution or two that should have worked but they were not compatible with the code I already had. This could’ve been due to the versions of PHP the two different codes were written in, or was because we had different MySQL database schema configurations, so I was stuck for a while. I tried taking things out and adding things in which got me closer to my goal but I could only get so far on my own with my limited knowledge. 
I did also try to add a function so that the user had to have 10 characters for their password, which didn't work not because my function was bad but i didn’t really know how to implement it into all my other conditionals. So ultimately to have the rest of my code functioning properly I removed it.


The application currently has a working signup page, login page, logging out function and a half working update password page. I hope you can see that I put effort into this and really tried.



