import requests
from bs4 import BeautifulSoup
import unicodedata
from newspaper import Article, build, fulltext
from urllib.request import urlopen
from apscheduler.schedulers.blocking import BlockingScheduler


# def some_job():
#     print ("Decorated job")

# scheduler = BlockingScheduler()
# scheduler.add_job(some_job, 'interval', minutes=1)
# scheduler.start()


class NDTV:
	@staticmethod
	def get_urls():

		feed_url = "http://feeds.feedburner.com/ndtvnews-latest"
		url = urlopen(feed_url)
		soup = BeautifulSoup(url, 'xml')
		pages = []
		for item in soup('item'):
			page_link = item('link')[0]
			pages.append(page_link.text)
		
		return pages

class TOI:
	@staticmethod
	def get_urls():
		feed_url = "https://timesofindia.indiatimes.com/"
		url = urlopen(feed_url)
		soup = BeautifulSoup(url, 'lxml')
		pages = []
		for ultag in soup.find_all('ul', {'data-vr-zone': 'latest'}):
			for li in ultag('li'):
				for a in li.find_all('a', href=True):
					link = a['href']
					if link[0] == '/':
						link = "https://timesofindia.indiatimes.com" + link
					pages.append(link)
		
		return pages

class HT:
	@staticmethod
	def get_urls():
		feed_url = "https://www.hindustantimes.com/latest-news/"
		url = urlopen(feed_url)
		soup = BeautifulSoup(url, 'lxml')
		pages = []
		for ultag in soup.find_all('ul', {'class': 'latest-news-bx more-latest-news more-separate'}):
			for li in ultag('li'):
				for a in li.find_all('a', href=True):
					link = a['href']	
				pages.append(link)
		return pages

class IDN:
	@staticmethod
	def get_urls():
		feed_url = "http://indianexpress.com/latest-news/"
		url = urlopen(feed_url)
		soup = BeautifulSoup(url, 'lxml')
		pages = []
		for div in soup.find_all('div',{'class':'articles'}):
			for a in div.find_all('a', href=True):
				link = a['href']
			pages.append(link)
		return pages