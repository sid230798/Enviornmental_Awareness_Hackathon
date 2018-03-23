from datetime import datetime, timedelta
import time
from addData import run


while True:
    print("Scraping")
    run()
    dt = datetime.now() + timedelta(hours=1)
    a = True
    while datetime.now() < dt:
         if a:
             a = False
             print("In Sleep")
         time.sleep(60*31)