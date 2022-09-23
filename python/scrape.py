from bs4 import BeautifulSoup as bs
import requests
import json

def scrape():
    fil = ""
    try:
        url = "https://universityinfo.co.za/"
        r = requests.get(url)
        soup = bs(r.text, "html.parser")
    except:
        with open(r"C:\Users\njabulo\Documents\Custom Office Templates\2023 Online Applications Open _ South African Universities.html", "r") as f:
            f = f.read()
            soup = bs(f, "html.parser")
            

    status = soup.find_all("div", {"class": "info"})
    return status

def uni(lis):
    dictionary = {}
    for i in lis:
        if "Website" not in i.find_all('p')[2].text: continue
        dictionary[f"{i.find_all('p')[2].text}"] = f"{i.find_all('p')[5]}"
    return dictionary

def stat(lis):
    return lis[0].find_all("p")[5]

def main():
    status = scrape()
    #print(uni(status))

    #dictionar = {f"{uni(status)}": f"{stat(status)}"}

    with open("python/data.json", "w") as f:
        json.dump(uni(status), f, indent=4)

if __name__ == "__main__":
    main()

