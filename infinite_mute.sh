#!/bin/bash

CURRENT_STATE=`amixer get Master | egrep 'Playback.*?\[o' | egrep -o '\[o.+\]'`

if [[ $CURRENT_STATE == '[on]' ]]; then
   while true; do
        amixer set Master mute
   done
else
    amixer set Master unmute
    amixer set Front unmute
    amixer set Headphone unmute
fi
