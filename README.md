# client_web_tracker

## Script description in PHP

This script performs the following actions:
1. Gets information about the user using global variables.
2. Checks if the string with the user's browser (HTTP_USER_AGENT value) contains a substring "DROP". If it does, it replaces the value of the variable `$ua` with the string "user-scamers".
3. Establishes a connection to the MySQL database using the `mysqli_connect` function.
4. Sets the UTF-8 encoding with the function `mysqli_set_charset`.
5. Adds a record to the `user` table with the current date and time, the value of the `$ua` variable and the value of the `$ip` variable.
6. Gets and displays all records from the table `user` containing values of fields `datetime`, `user_agent`, `user_ip`.
7. Closes the connection to the database.

This script can be used to track user actions and detect attempts to break into the site based on the value of the user's browser.

Translated with www.DeepL.com/Translator (free version)
