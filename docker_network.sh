#!/bin/bash

docker network create -d ipvlan \
  --subnet=192.168.1.0/24 \
  --gateway=192.168.1.1 \
  -o ipvlan_mode=l2 \
  -o parent=enp0s3.10 ipvlan_net

