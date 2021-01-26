from gtts import gTTS 
  
import os 
import sys

mytext = sys.argv[1]
file_name = sys.argv[2]
language = 'en'
  
myobj = gTTS(text=mytext, lang=language, slow=False) 
  
myobj.save(file_name+".mp3") 
