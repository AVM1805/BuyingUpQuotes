# -*- coding: utf-8 -*-
#!/usr/bin/env python
import os, sys

sys.path.append('/home/l/lazerjtl_1805/.local/lib/python3.6/site-packages/bs4')
sys.path.append('/home/l/lazerjtl_1805/.local/lib/python3.6/site-packages/requests')

import requests
from bs4 import BeautifulSoup
import json


names = ['INTRR', 'RCOM', 'RG']
urls = [
    "https://quote.rbc.ru/ticker/59272",
    "https://quote.rbc.ru/ticker/59436",
    "https://quote.rbc.ru/ticker/59268"
]

costs = []

for elem in urls:
    response = requests.get(elem)
    soup = BeautifulSoup(response.text, 'html.parser')
    cost = soup.find('span', class_='chart__info__sum')
    oldstr = str(cost.text)
    costs.append(oldstr.replace("₽", ""))

with open("./quotes21/public_html/costData.json", "w") as f:
    json.dump({names[i]: costs[i] for i in range(len(names))}, f, sort_keys=True, indent=4)

