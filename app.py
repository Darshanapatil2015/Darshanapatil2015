
import smtplib

Email = 'Darshana1994patil@gmail.com'

server = smtplib.SMTP('smtp.gmail.com', 587)
    
server.starttls()

server.login ('Darshupatil1994@gmail.com','xtsk rqno myti sfzf')

msg = "Phishing attacks are common and unfortunately, they are growing in prevalence. To know more "
server.sendmail('Darshupatil1994@gmail.com', Email, msg )

out=print('Email sent successfully')

