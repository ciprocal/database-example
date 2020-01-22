# database-example
Simple website displaying information from a MySQL Database using PHP.
The following tutorial is for those to follow to set up and host the project on their own. There were some issues when trying to set this up during the presentation, so I felt a step-by-step guide for you to do at home would be better. If you have any questions/feedback about the material or have issues with anything in this process, feel free to contact me at my school email: **20160lc@chaminade-hs.org**

## Part 1: Getting Started
First, go to [000webhost.com](http://000webhost.com) and create an account. I have heard that your Chaminade Email doesnt work here, so try and use a personal email if you would like to. Signing in using Google may be beneficial here.

Afterwards, you should be given a screen similar to the one below, prompting you to create a new website. Click "Create New Site" and then enter a unique name for your website in the next form. Make sure you click the button outlined in purple on the top-right of the page and not any of the links in the bottom half of the image.
<img width="1440" alt="Screen Shot 2020-01-21 at 5 21 00 PM" src="https://user-images.githubusercontent.com/33110258/72848894-8d6f2b00-3c73-11ea-9730-0fee1d60e177.png">

This form will prompt you to create a domain name for your website. Because this is a free service, the domain will have `.000webhostapp.com` at the end of the name. 

<img width="1440" alt="Screen Shot 2020-01-21 at 5 21 25 PM" src="https://user-images.githubusercontent.com/33110258/72849359-8399f780-3c74-11ea-92a5-de8d4888e283.png">

Once you have successfully submitted the form, you have created a new, hosted website for yourself. 

## Part 2: Creating a Database
After you have finished creating the website. You should be greeted with a dashboard page. The left-hand side of the page should feature a navigation menu. Click on the "Tools" link, which should be the second link available and right under "Build a Website". 

After selecting this link, click on the link that says "Database Manager", as shown in the image below. Once doing so, you should have a webpage similar to the one below.

<img width="1440" alt="Screen Shot 2020-01-21 at 5 38 06 PM" src="https://user-images.githubusercontent.com/33110258/72849832-a37deb00-3c75-11ea-97ad-df422165c3cc.png">

Click the button that says "New Database", and you should be given the following prompt below. You can enter any names/password you desire here, but keep in mind we will use these in our code later. I suggest not using an actual password of yours, as you only need a "dummy" password here so the code can interact with the database. Also, try not to use spaces when naming these databases, and I suggest sticking to simple one-word names for the purpose of this demonstration.

<img width="1440" alt="Screen Shot 2020-01-21 at 5 38 14 PM" src="https://user-images.githubusercontent.com/33110258/72850237-ad541e00-3c76-11ea-95ac-6e5325ca594a.png">

After filling out the form, it may take a minute or so for the database to be created. Once it is finished, click on the purple "Manage" button and click the first link that should appear, "PhpMyAdmin". You should then be directed to another webpage with a lot of information. All you need to worry about is the first database on the left-hand side of the page. As shown below, click the text that has an "id" and a bunch of numbers after it. Following should be an underscore and then the name you gave the database earlier. In the image below, this would be `id12321960_mydbname`.

<img width="1440" alt="Screen Shot 2020-01-21 at 5 57 13 PM" src="https://user-images.githubusercontent.com/33110258/72850844-0b353580-3c78-11ea-84c3-e0dc5be52202.png">

Clicking this link will bring up a prompt on the webpage that states there are no tables for the database. In the text field that says "Name:", enter `Names` as the name of the table, as this is what I used in the code. Next, change the number of columns to 2, as we only need two types of data input. Your form should look like the one in the image below. After doing this, click "Go".

<img width="1440" alt="Screen Shot 2020-01-21 at 6 07 32 PM" src="https://user-images.githubusercontent.com/33110258/72851518-de821d80-3c79-11ea-9e5c-8a9751865770.png">

Next, you will be given two rows to fill out, as shown below. In the column that says "Name", fill out the first row with the name `FirstName` and the second row with the name `LastName`. Next, change the Type first both the first and the second rows to TEXT instead of VAR. The image below is what you should have. You don't have to fill out anything else on this page, and you can click "Save" on the bottom-right.

<img width="1440" alt="Screen Shot 2020-01-21 at 6 07 56 PM" src="https://user-images.githubusercontent.com/33110258/72851425-98c55500-3c79-11ea-871b-3c1156ea0347.png">

Once this is completed, your database should be properly set up. From this point we will go back the page that has our database manager from before to continue the setup process.

## Part 3: Uploading the Webpage Files
After returning to the database manager from earlier. Click on the link found in the left-hand side of the page that says "File Manager". This can be found right above "Database Manager" in the tools section of the dashboard if you are not already there.

A prompt should appear that reads, "Fast, Easy & Secure File Upload -- Click the button below to access file manager." Click the purple button following this text to be directed to our file management directory, as shown in the image below.

<img width="1440" alt="Screen Shot 2020-01-21 at 6 17 01 PM" src="https://user-images.githubusercontent.com/33110258/72851923-f5753f80-3c7a-11ea-9ea5-284bcb7784ab.png">

Next, come back to this repository so you can download the files for each webpage. There are different methods for moving these files into the directory, and some methods might be easier than others depending on if you are doing this on an iPad or a Laptop/Desktop computer.

#### Method 1 - Downloading Files from Github (Laptop)
This method works better on a laptop or desktop device, since I dont believe iPads have the ability to open .zip files without some sort of third-party application that the school-issued ones don't have. For this method, simply go to this repository's home page where this README is located and click the "Clone or Download" button on the right side of the page shown in the image below. 

<img width="1440" alt="Screen Shot 2020-01-21 at 6 36 56 PM" src="https://user-images.githubusercontent.com/33110258/72852872-e0e67680-3c7d-11ea-91f2-7d369610e512.png">

Download the .zip file to your device and open it up to show the files found in this repository. Next, go back to the file manager page with the red bar at the top, and simply drag and drop these files onto the webpage. The files should appear together in a prompt, and then click the red "Upload" button on the bottom-right of the prompt. You can delete the README.md file from the directory, as this wont be neccessary here. If this is completed successfully, your directory should look like the one below.

<img width="1440" alt="Screen Shot 2020-01-21 at 6 42 19 PM" src="https://user-images.githubusercontent.com/33110258/72852904-f9ef2780-3c7d-11ea-95fd-9289ca286579.png">

After these files are uploaded and your directory looks like the one above, you can move on to the next part. You can skip Method 2 below if you completed this. If not, try the method below.

#### Method 2 - Copying and Pasting Content (iPad)
This method simply requires you to create the file names in the directory itself and then copy and paste the code from this Github page to each respective file. To do this, you first must go back to the File Manager webpage with the red bar on top and click on the file icon with a plus next to it, shown in the image below with the label "Create File".

<img width="1440" alt="Screen Shot 2020-01-21 at 6 17 18 PM" src="https://user-images.githubusercontent.com/33110258/72853368-31aa9f00-3c7f-11ea-80b7-676f6e045161.png">

A prompt should appear asking for the name of the file. Enter the name of one of the files in this repository, whether it be `index.php`, `insert.php`, or `delete.php`. Then, repeat this process so the other files are created as well.

Return to this GitHub repository and click on any of the files. You can simply copy the code on each file page and paste it into the respective file located in the directory. You can do this by clicking on a file and then clicking the pencil icon at the top of the page, which will bring up a text editor and allow you to paste the code, as shown below.

<img width="1440" alt="Screen Shot 2020-01-21 at 6 57 53 PM" src="https://user-images.githubusercontent.com/33110258/72853624-f65ca000-3c7f-11ea-98ba-8a39d5dcf6ba.png">

Once you save this file, do the same for the other two files in the repository. After this is completed, you can move on to the next part below.

## Part 4: Entering Your Database Information
There should be a specific part in the code of each of the files that contains the following empty variables, shown below:
```php
$servername = "";
$username = "";
$password = "";
$dbname = "";
```

Within the quotation marks for the "$servername" variable, simply enter `localhost`. To find the information for the other three variables, refer back to the form we filled out in the Database Manager earlier. For a refresher, it should look like the form below:

<img width="1440" alt="Screen Shot 2020-01-21 at 5 38 14 PM" src="https://user-images.githubusercontent.com/33110258/72850237-ad541e00-3c76-11ea-95ac-6e5325ca594a.png">

Within the quotation marks for the "$password" variable, enter the password you remember filling out in this form. For the other two variables, you must return to the Database Manager page on your website dashboard. After doing this, you should see a table with the values you entered into the form, excluding the password, as shown below:

<img width="1440" alt="Screen Shot 2020-01-21 at 5 56 11 PM" src="https://user-images.githubusercontent.com/33110258/72854196-aaaaf600-3c81-11ea-90c4-bff326d11072.png">

Copy the text under the "DB Name" heading into the "$dbname" variable, and copy the text under the "DB User" heading into the "$username" variable. So for my example, the variables would look like this:
```php
$servername = "localhost";
$username = "id12321960_mydbuser";
$password = "mypassword";
$dbname = "id12321960_mydbname";
```
After filling this information out, go to each file and replace the blank variables with what you have just filled in. Save each file after editing, and you should be good to go.

## Conclusion
After following these examples, you can access your website by going to ```http://(yourwebsitetitle).000webhostapp.com``` in any browser. If done correctly, your homepage should appear as it does below and you can insert names into the database by filling out the form and clicking "Submit", and you can then clear the database by clicking "Clear" at the bottom of the page.

<img width="1440" alt="Screen Shot 2020-01-21 at 9 05 18 PM" src="https://user-images.githubusercontent.com/33110258/72859430-ca4a1a80-3c91-11ea-9799-76ef5ba28cd2.png">


I encourage you to edit these files as you will and in any way you want, such as implementing CSS to make the website look cleaner or by using other types of inputs to store in the database. You can do anything with this!

If you have any questions/feedback about the material or have issues with anything in this process, feel free to contact me at my school email: **20160lc@chaminade-hs.org**




