# iTex-promo
## A centralised system for remote control of promo monitors in the chain of stores

The system is located on a separate virtual machine running **Ubuntu Server**. 
It was made in the form of a slider using **PHP** and **JavaScript**, and a port was opened for connections via the HTTP protocol. 
Therefore, multiple TVs turn on **automatically** via a smart socket in the morning, connected to a website that is accessible from a specific IP address and show promotions until they are turned off at the end of the day via the **BIOS**.
An **API** is used to display informers with exchange rates, weather and other information. 
Images are copied from a network folder using **fstab**, **shell script** and **cron** job scheduler.
This solution allows you to change the images on TVs **without** changing the HTML code.
The system is **centralized**, **automatic** and **remotely controlled.**
