import os

path = "pdf/"
for file_name in os.listdir(path):
    file = path + file_name
    if os.path.isfile(file):
        #print('Deleting file:', file)
        os.remove(file)

path = "temp/"
for file_name in os.listdir(path):
    file = path + file_name
    if os.path.isfile(file):
        #print('Deleting file:', file)
        os.remove(file)


