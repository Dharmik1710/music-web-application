from mp3_tagger import MP3File, VERSION_2
import eyed3
from os import listdir
from os.path import isfile, join
import re
import os


def show_info(s,a,g,y):
    imgWrite = r"C:\Users\Dharmik\Desktop\New\Album Art\\"+s+".jpg"
    audioFetch = r"C:\Users\Dharmik\Desktop\New\songs\\"+s+".mp3"
    audio = eyed3.load(audioFetch)
    fh = open(imgWrite, "wb")
    IMAGES = audio.tag.images
    if(list(IMAGES)!=[]):
        b = IMAGES[0].image_data
        fh.write(b)
    fh.close()
    writeToFile(s,a,g,y)
    
    

"""
genre - mp3
artist - mp3/show_info
year - mp3
song name - mp3
image - show_info
"""

def writeToFile(song, artist, genre, year):
    f= open(r"C:\xampp\mysql\data\music\data.txt","a+")
    stw="###" + song + "###" + artist + "###" + genre + "###" + year + "\n"
    f.write(stw)
    f.close()


def myFun(fileName):
    audFetch = r"C:\Users\Dharmik\Desktop\New\songs\\" + fileName
    mp3 = MP3File(audFetch)
    mp3.set_version(VERSION_2)

    s=mp3.song
    y=mp3.year
    a=mp3.artist
    g=mp3.genre

    for i in s:
        if(i == "("):
            ind = s.index(i)
            s=s[0:ind]
            break
        elif(i == "["):
            ind = s.index(i)
            s=s[0:ind]

    re.sub('[^A-Za-z0-9]+', '', s)
    print("Song", s)
    
    os.rename(audFetch, r"C:\Users\Dharmik\Desktop\New\songs\\"+s+".mp3")

    show_info(s, a, g ,y)


songFiles = [f for f in listdir(r"C:\Users\Dharmik\Desktop\New\songs") if isfile(join(r"C:\Users\Dharmik\Desktop\New\songs", f))]

f= open(r"C:\xampp\mysql\data\music\data.txt","w+")
f.write("")
f.close()

te=0
ve=0
ae=0
fae=0

for audName in songFiles:
    try:
        print(audName)
        myFun(audName)
    except ValueError:
        ve=ve+1
    except AttributeError:
        ae=ae+1
    except TypeError:
        te=te+1
    except FileExistsError:
        fae=fae+1

print(te)
print(ae)
print(ve)
print(fae)


    
