Send eMail from XAMPP Server
============================

1. What is required:
   - Email account with SMTP Support (eg: Gmail)
   - SMTP Server Address	- smtp.gmail.com
   - Port					- 465 (ssl)
   - Username				- GmailUsername@gmail.com
   - Password				- GmailPassword
   - Enable access for less secure apps

2. XAMPP Server Installed on PC

3. Backup before modifying the file below:
   Change following settings on:
   - c:\xampp\php\php.ini
   - SMTP=smtp.gmail.com
   - smtp_port=465
   - sendmail_from=yourGmailAddress@gmail.com
   - sendmail_path=”\”C:\xampp\sendmail\sendmail.exe\” -t”


4. Backup before modifying the file below:
   Change following settings on:
   - c:\xampp\sendmail\sendmail.ini
   - smtp_server=smtp.gmail.com
   - smtp_port=465
   - error_logfile=error.log
   - debug_logfile=debug.log
   - auth_username=yourGmailAddress@gmail.com
   - auth_password=yourGmailPassword
   - force_sender=yourGmailAddress@gmail.com

5. Restart Apache on XAMPP before Sending

For more tutorials in Sinhala, Visit:
https://www.youtube.com/channel/UCApF2rj6dvqFDW9Ao4R3DTw/