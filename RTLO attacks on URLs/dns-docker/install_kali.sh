#!/bin/bash
#
printf '%s\n' "deb https://download.docker.com/linux/debian bullseye stable" | tee /etc/apt/sources.list.d/docker-ce.list

curl -fsSL "https://download.docker.com/linux/debian/gpg" | gpg --dearmor -o /etc/apt/trusted.gpg.d/docker-ce-archive-keyring.gpg

apt update && apt install -y docker-ce docker-ce-cli containerd.io docker-compose-plugin
