import urllib.request
from bs4 import BeautifulSoup
import re

url = "https://www.bossogarage.com"
req = urllib.request.Request(url, headers={'User-Agent': 'Mozilla/5.0'})
html = urllib.request.urlopen(req).read()

soup = BeautifulSoup(html, 'html.parser')
text = soup.get_text(separator='\n', strip=True)

# Print the first 2000 characters of the extracted text
print(text[:2000])

# Print some image alts or links to understand the structure
print("\n--- Media & Links ---")
for img in soup.find_all('img')[:10]:
    print("IMG:", img.get('alt', ''), img.get('src', ''))

for a in soup.find_all('a')[:10]:
    print("LINK:", a.get_text(strip=True), a.get('href', ''))
