# -*- coding: utf-8 -*-
import os
import os.path

# startDir = raw_input('Введите директорию')

startDir = "d:\direct"

directories = [startDir]
while len(directories) > 0:
    directory = directories.pop()

    for name in os.listdir(directory):
        fullpath = os.path.join(directory, name)
        if os.path.isfile(fullpath):  # если указанный путь я вляется файлом:
            os.rename(fullpath, os.path.join(directory, fullpath.replace('(', '').replace(')', '')))
            print 1

        elif os.path.isdir(fullpath):  # усли указанный путь является директорией
            directories.append(fullpath)
            os.rename(fullpath, os.path.join(directory, fullpath.replace('(', '').replace(')', '')))
            print 2