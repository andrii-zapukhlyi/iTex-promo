# iTex-promo
## A centralised system for remote control of promo monitors in the chain of stores

The system is located on a separate virtual machine running **Ubuntu Server**. <br>
It was made in the form of a slider using **PHP** and **JavaScript** and has an opened port for connections via the HTTP protocol. <br>
Therefore, multiple TVs turn on **automatically** via the **Wake on LAN** in the morning, connected to a website that is accessible from a specific IP address and shows promotions until they are turned off at the end of the day via the **CRON**. <br>
An **API** is used to display informers with exchange rates, weather and other information. <br>
Images are copied from a network folder using **fstab**, **shell script** and **cron** job scheduler. <br>
This solution allows you to change the images on TVs **without** changing the HTML code. <br>
The system is **centralised**, **automatic** and **remotely controlled.** 
Allows to display slides and promo-videos as well.
