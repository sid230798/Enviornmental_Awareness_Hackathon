import requests
from bs4 import BeautifulSoup
import unicodedata
from newspaper import Article, build, fulltext
from urllib.request import urlopen


class Guardian:
	@staticmethod
	def get_urls():

		feed_url = "https://www.theguardian.com/environment/pollution"
		url = urlopen(feed_url).read()
		soup = BeautifulSoup(url, 'html.parser')
		print(soup.prettify())
		pages = []
		for ulist in soup.find_all('ul', {'class':"u-unstyled l-list l-list--columns-2 l-list--rows-3"}):
			count=0
			for li in ulist.find_all('li', {'class':"fc-slice__item l-list__item l-row__item l-row__item--span-1 u-faux-block-link"}):
				count=count+1
				if(count>5):
					return pages
				link=""	
				for a in li.find_all('a', href=True) :
					link = a['href']
				print(link)
				pages.append(link)
		
		return pages

class NDTV:
	@staticmethod
	def get_urls():

		feed_url = "https://www.ndtv.com/topic/pollution"
		url = urlopen(feed_url).read()
		soup = BeautifulSoup(url, 'html.parser')
		pages = []
		for div in soup.find_all('div',id="news_list"):
			for ultag in div('ul'):
				
				print("faf")
				count=0
				for li in ultag('li'):
					count=count+1
					if(count>5):
						return pages
						 
					for a in li.find_all('a', href=True) :
						link = a['href']
						# if link[0] == '/':
						# 	link = "https://www.ndtv.com" + link
						print(link)	
						pages.append(link)
			
		

class NYT:
	@staticmethod
	def get_urls():
		feed_url = "https://www.nytimes.com/topic/subject/air-pollution"
		url = urlopen(feed_url).read()
		soup = BeautifulSoup(url,'html.parser')
		print(soup.prettify())
		pages = []
		for olist in soup.find_all('ol', {'class':"story-menu theme-stream initial-set"}):
			count=0
			for li in olist.find_all('li', id=True):
				count=count+1
				if(count>5):
					return pages
				link=""	
				for a in li.find_all('a', href=True):
					link = a['href']
					print(link)	
						
				pages.append(link)
		

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