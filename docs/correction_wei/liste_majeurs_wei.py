#!/usr/bin/python3

import requests
import json


wei_departure_date = "2023-09-08"


def get_major_newcomers(wei_departure_date):

    year = wei_departure_date.split("-")[0]
    month = wei_departure_date.split("-")[1]
    day = wei_departure_date.split("-")[2]
    url = 'https://allegorix.utt.fr/API_BDE/index.php/admis/'

    newcomers_raw = requests.get(url + year + ',' + month + day)
    newcomers = newcomers_raw.json()

    major_newcomers = []

    for newcomer in newcomers:
        if newcomer["MAJEUR"]=="true":
            major_newcomers.append(newcomer["ADM_ID"])

    return major_newcomers

if __name__ == "__main__":
    major_newcomers = get_major_newcomers(wei_departure_date)
    print(major_newcomers)
    length_major_newcomers = str(len(major_newcomers))
    print('Nombre de majeurs : ' + length_major_newcomers)
