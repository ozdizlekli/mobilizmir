import urllib.request
from bs4 import BeautifulSoup

url = "https://www.bossogarage.com"
req = urllib.request.Request(url, headers={'User-Agent': 'Mozilla/5.0'})
html = urllib.request.urlopen(req).read()

soup = BeautifulSoup(html, 'html.parser')
for script in soup(["script", "style"]):
    script.extract()    # rip it out

text = soup.get_text(separator=' | ', strip=True)
print(text[2000:6000])
