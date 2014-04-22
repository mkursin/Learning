
# -*- coding: utf-8 -*-
import os

# BASE_DIR = 'd:\direct'
BASE_DIR = raw_input('Введите директорию')


def delete_all_brackets(dirname, filename):
    to = filename.replace('(', '').replace(')', '')
    if not filename == to:
        os.rename(os.path.join(dirname, filename), os.path.join(dirname, to))
        print "success renamed\n"

data = []
for dirname, dirnames, filenames in os.walk(BASE_DIR):
    for filedirname in dirnames:
        data.append((dirname, filedirname))
    for filename in filenames:
        data.append((dirname, filename))
for dirname, filename in reversed(data):
    delete_all_brackets(dirname, filename)
