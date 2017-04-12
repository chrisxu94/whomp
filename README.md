# Whomp
Whomp is a website designed to make journaling easy. Oftentimes, it can be a chore to journal: digging out a physical journal and then slowly handwriting your entires. Blogs also aren’t exactly replacements for journals, since they are public. Other journaling websites don’t really work because you simply forget to visit them and write in your journal much in the way that you forget to write in their physical journals. But if your journal is on your homepage, which you visit many times a day, it makes it much easier to quickly write an entry before you forget about it. This is Whomp.

Whomp currently lives only in the virtual host (it is pending transfer to the domain Whomp.me). Once you download the Whomp folder with all the relevant files, put it in your vhosts directory. Go to a terminal window and execute “sudo edit /etc/hosts” in order to run edit as the appliance’s “superuser”. Carefully add the following line to the bottom of that file: “127.0.0.1 whomp”. Then save the file and quit edit. 

Head to http://whomp/phpmyadmin within your web browser to access phpmyadmin. You will need to import the “.sql” file included in your whomp folder. Open up the file. Highlight it all, then select Edit > Copy (or hit ctrl-c), then return to phpMyAdmin. Click phpMyAdmin’s SQL tab, and paste everything you copied into that page’s big text box (which is below Run SQL query/queries on server "localhost").

Now, to access it from the virtual machine’s web browser, just type in “http://whomp/“. This will bring you to the log-in screen. If you already have an account, simply sign in with your username and password on the form on the right hand of the screen. If you wish to make an account, click on the yellow “whomp” link on the left which will bring you to a page where you can register for an account by inputting a username, password, and password confirmation. 

Once you are logged in, you see the main page of Whomp, which is a replacement for your home page. A new background picture from our database is loaded upon every visit. It has all the functionality you expect from a home page, including links to Gmail, GCal, and Google Search. Gmail and Gcal are linked at the top navigation bar, as well as a link to your journal. The main text bar in the middle of the screen serves two purposes: you can write in your journal or perform google search. To write in your journal, just write your entry (<1000 chars) and then hit “Journal”. You will then be redirected to your journal, where you can view your entry. To perform google search, just type what you want to search and hit “search”.  

The journal page of Whomp is the second important page. You can use it to view all of your journal entries in reverse chronological order. You can also use it to search through your journal entries, either by searching the text of the entries (the first search bar), or by searching by the date of the entries (the second search bar). For example, if I want to look for all entries in which I wrote about “pizza”, I would search “pizza” in the first bar. If I want to look for all the entries in December 2014, I would input December 2014 in the second bar.

Once you queried one of the search bars and submitted it, you will be taken to a page where all your queried journal entries will be displayed. Simply click on the big header titled “Journal” if you want to return to your journal page, or click on “home” to return to the home page. Happy whomping!

	
	
