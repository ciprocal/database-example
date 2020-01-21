# database-example
Simple website displaying information from a MySQL Database using PHP.
The following tutorial is for those to follow to set up and host the project on their own. There were some issues when trying to set this up during the presentation, so I felt a step-by-step guide for you to do at home would be better.

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


Download the .zip file to your device and open it up to show the files found in this repository. Next, go back to the file manager page with the red bar at the top, and simply drag and drop these files onto the webpage. The files should appear together in a prompt, and then click the red "Upload" button on the bottom-right of the prompt. You can delete the README.md file from the directory, as this wont be neccessary here. If this is completed successfully, your directory should look like the one below.

#### Method 2 - Copying and Pasting Content (iPad)


