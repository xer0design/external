#!/usr/bin/expect

set prompt "pi@raspberrypi ~ $ "
spawn ssh root@192.168.1.49 NeTVBrowser SetURL http://192.168.1.23/external/visuals/sky/br.html

set timeout 5
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

