from scrap import HT, NDTV ,NYT, IDN,Guardian
from newspaper import Article
import pymysql
from datetime import datetime
import unicodedata

class artAdd:

    def __init__(self, urls):
        for url in urls:
            print(url)
        self.articles = [Article(url) for url in urls]

    def get_details(self):
        title = []
        descrp = []
        publish_date = []
        image_url = []
        for article in self.articles:
            try:
                article.download()
                print("Downloaded")
                article.parse()
                title.append(unicodedata.normalize('NFKD', article.title).encode('ascii','ignore'))
                print(unicodedata.normalize('NFKD', article.title).encode('ascii','ignore'))
                descrp.append(unicodedata.normalize('NFKD', article.text).encode('ascii','ignore'))
                publish_date.append(article.publish_date)
                image_url.append(article.top_image)
            except:
                minlen = min(len(title), len(descrp), len(publish_date), len(image_url))
                maxlen = max(len(title), len(descrp), len(publish_date), len(image_url))
                if (maxlen - minlen) == 0:
                    pass
                else:
                    ab = minlen
                    fet = [title, descrp, publish_date, image_url]
                    for _ in range(maxlen - minlen):
                        for f in fet:
                            if(len(f) <= ab):
                                continue
                            else:
                                f.remove(f[-1])
                        
        
        return title, descrp, publish_date, image_url


def run():

    guar_urls=Guardian.get_urls()
    #ht_urls = HT.get_urls()
    ndtv_urls = NDTV.get_urls()
    NYT_urls = NYT.get_urls()
    # idn_urls = IDN.get_urls()


    urls = []
    urls.extend(guar_urls)
    urls.extend(ndtv_urls)
    urls.extend(NYT_urls)
    # urls.extend(idn_urls)

    articles = artAdd(urls)

    titles, descrp, time_stamp, image_url = articles.get_details()

    num_articles = len(titles)
    print(num_articles)

    db = pymysql.connect("localhost","root", "12qwaszx", "hack")

    cursor = db.cursor()

    newArticles = 0

    for i in range(num_articles):
        try:
            if time_stamp[i] == None:
                query = "INSERT INTO `news`(`title`, `content`, `url`, `image_url`) values(\"%s\", \"%s\", \"%s\", \"%s\")" %(pymysql.escape_string(titles[i].decode("utf-8")), pymysql.escape_string(descrp[i].decode("utf-8")), urls[i], image_url[i])
            else:
                query = "INSERT INTO `news`(`title`, `content`, `url`, `image_url`, `time_stamp`) values(\"%s\", \"%s\", \"%s\", \"%s\", \"%s\")" %(pymysql.escape_string(titles[i].decode("utf-8")), pymysql.escape_string(descrp[i].decode("utf-8")), urls[i], image_url[i], time_stamp[i].strftime('%Y-%m-%d %H:%M:%S'))
            cursor.execute(query)
            db.commit()
            newArticles += 1
        except pymysql.MySQLError as e:
            code, *msg = e.args
            if code == 1062:
                pass
            else:
                print("ERROR CODE: {} | {}".format(code, *msg))

    print("{} new articles".format(newArticles))
    db.close()
run()