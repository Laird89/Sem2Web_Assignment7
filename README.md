# Sem2Web_Assignment7

Semester 2 web programming assignment 7

More PHP practice, using PHP sessions.

Multi-page checkout system implemented using PHP sessions. It consists of four PHP files, each representing a different page in the checkout process.

Page1.php:

This file contains the initial page of the checkout process. It includes a simple form with fields for the user to input their name and email. The form's action is set to "Page2.php," indicating that the data will be sent to the next page in the checkout process.

Page2.php:

Upon submission of the form in Page1.php, this file starts a PHP session and stores the user's name and email in session variables. It then presents a new form with an address field. The form's action is set to "Page3.php," indicating that the address information will be sent to the next page.

Page3.php:

Similar to Page2.php, this file starts a PHP session and stores the user's address in a session variable. It then presents a new form with a credit card number field. The form's action is set to "Page4.php," indicating that the credit card information will be sent to the next page.

Page4.php:

Upon submission of the credit card form, this file starts a PHP session, stores the credit card information in a session variable, and then displays a summary of the user's information. The user's name, email, address, and credit card number are retrieved from the session variables and displayed on the page.

 
