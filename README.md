# My Portfolio Website 
Hi, my name is Kontatan. Here is a repository of my website
I use this website as my coding playground to level up my abilities and share it to all of you.
Why? I hopefully that it will be benifit to someone who just getting start on Web Developer, 
I wish you to have a good start, reduce learning curved and not wasted so many hours just like me.

******************************************************
This code is Laravel 5.8 with a little customize, I set it up the same as what I upload to my web hosting.
If you try to upload Laravel to your web hosting which is a shared host, here is what you need to do.

1. Find the root of your host. In my case it is "public" folder

2. I use Laragon on window 10 as my developement environment not homestead If you like me, 
Laragon init project by set the root of your project like "www/your project" but point the path to your project 
on "www/your project/public"  you need to create .htaccess just download here and place it 
in the root of your project "www/your project"
When you want to link file on any page such as CSS files.
You need to change path for example "/storage/css/some file"
in to "/public/storage/css/some file"
If your Shared host has root folder in different name don't forget to modify .htacess and correct the path above

3. (Optional) you can modify the path of the project on your machine to be the same as host, in order to make it easy on develope by...
Open Laragon Menu > Apache > sites-enabled > auto.your project.test.conf 
change from 


******************************************************
<VirtualHost *:80> 
    DocumentRoot "C:/laragon/www/your project/public/"
    ServerName project.test
    ServerAlias *.project.test
    <Directory "C:/laragon/www/your project/public/">
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
******************************************************

into 

******************************************************
<VirtualHost *:80> 
    DocumentRoot "C:/laragon/www/your project/"
    ServerName project.test
    ServerAlias *.project.test
    <Directory "C:/laragon/www/your project/">
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
******************************************************


 And Viola! You will run your app on localhost with no any damaged link problem.
 Good Luck with your project!!
