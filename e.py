import smtplib

# creates SMTP session
s = smtplib.SMTP('smtp.gmail.com', 587)

# start TLS for security
s.starttls()

# Authentication
s.login("devesh.22110833@viit.ac.in", "abc")

# message to be sent
message = "Hello,your booking has been confirmed"

# sending the mail
s.sendmail("devesh.22110833@viit.ac.in", "rutuja.22110669@viit.ac.in", message)
print("Mail sent")
# terminating the session
s.quit()
