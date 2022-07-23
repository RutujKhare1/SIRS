import sys

file = open("log.txt",'w')
res = sys.argv[1]
file.write(res)


# import json
# import requests
# from urllib.request import urlopen

# url = r'http://localhost/test1/index.php'
# result = requests.get(url).json
# print(result,type(result))
# data = json.loads(result)


# response = urlopen(url)
# res = response.read()
# print(res,type(res))
# remote_data = json.loads(str(res))  
# print(remote_data)