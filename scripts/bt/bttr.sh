#!/usr/bin/expect

set prompt "pi@raspberrypi ~ $ "
spawn ssh root@192.168.1.49 NeTVBrowser SetURL http://192.168.1.23/external/visuals/bt/bttr.html

set timeout 30
expect {
    timeout {
        puts "Connection timed out"
        exit 1
    }

    "yes/no" {
        send "yes\r"
        exp_continue
    }

    "assword:" {
        send "tyrurleo\r"
        exp_continue
    }

    "$prompt" {
        send "ls -la\r"
    }
}

