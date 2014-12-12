#!/usr/bin/env python

from time import sleep
import os
import RPi.GPIO as GPIO

GPIO.setmode(GPIO.BCM)
#GPIO.setup(3, GPIO.IN)
#GPIO.setup(4, GPIO.IN)
GPIO.setup(2, GPIO.IN, pull_up_down = GPIO.PUD_DOWN)
GPIO.setup(3, GPIO.IN, pull_up_down = GPIO.PUD_DOWN)
GPIO.setup(4, GPIO.IN, pull_up_down = GPIO.PUD_DOWN)
GPIO.setup(7, GPIO.IN, pull_up_down = GPIO.PUD_DOWN)
GPIO.setup(8, GPIO.IN, pull_up_down = GPIO.PUD_DOWN)
GPIO.setup(9, GPIO.IN, pull_up_down = GPIO.PUD_DOWN)
GPIO.setup(10, GPIO.IN, pull_up_down = GPIO.PUD_DOWN)
GPIO.setup(11, GPIO.IN, pull_up_down = GPIO.PUD_DOWN)
GPIO.setup(17, GPIO.IN, pull_up_down = GPIO.PUD_DOWN)
GPIO.setup(25, GPIO.IN, pull_up_down = GPIO.PUD_DOWN)
while True:
        if ( GPIO.input(2) == False ):
                os.system('mpg321 GPIO02.mp3 &')
        if ( GPIO.input(3) == False ):
                os.system('mpg321 GPIO03.mp3 &')
        if ( GPIO.input(4) == False ):
                os.system('mpg321 GPIO04.mp3 &')
        if ( GPIO.input(7) == False ):
                os.system('mpg321 GPIO07.mp3 &')
        if ( GPIO.input(8) == False ):
                os.system('mpg321 GPIO08.mp3 &')
        if ( GPIO.input(9) == False ):
                os.system('mpg321 GPIO09.mp3 &')
        if ( GPIO.input(10) == False ):
                os.system('mpg321 GPIO10.mp3 &')
        if ( GPIO.input(11) == False ):
                os.system('mpg321 GPIO11.mp3 &')
        if ( GPIO.input(17) == False ):
                os.system('mpg321 GPIO17.mp3 &')
        if ( GPIO.input(25) == False ):
                os.system('mpg321 GPIO25.mp3 &')
        sleep(0.5);


