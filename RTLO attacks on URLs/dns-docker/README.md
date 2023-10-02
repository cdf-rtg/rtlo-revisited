# Docker DNS Setup
Disclaimer: Please use Kali Linux (with 'root' permissions) docker will attempt to map the DNS server to UDP port 53. Ports lower than 1024 can only be used by 'root'.

## Pre-requisites
- To install docker and docker-compose on Kali, navigate to this github repository folder and run the install_kali.sh script:
```
./install_kali.sh
```
## Usage
- Navigate into the 'artifacts' folder and find these two files:
    - db.moc.elgoog
    - db.moc.koobecaf
- For each of the files mentioned above, change the IP address 192.168.56.8 to the desired IP address of your choice. Don't forget to save the files once you have modified.
- Once done, build the docker image first:
```
docker compose build
```
- Once docker image is built, launch the docker container and run it in the background:
```
docker compose up -d
```
- To test if the DNS server is up and running, run the following command:
```
dig @127.0.0.1 moc.koobecaf
```
- Once you are done with your attack and you want to switch off the DNS server, navigate into this github directory and type this command:
```
docker compose down
```
## Additional Configurations
If you plan on adding additional domain names for the RTLO attacks, you will need to do three things within the 'artifacts' folder:
- Edit the named.conf.local file to include the new zone / domain name that you are configuring. For example, if I want to add a new domain name called 'mister.noob', add this at the bottom of the file:
```
zone "mister.noob" {
    type master;
    file "/etc/bind/zones/db.mister.noob";
};
```
- Create a new file called db.newdomainname (replace the 'newdomainname' keyword with the name of the new zone / domain name). In terms of its contents, you can refer to this template below (make sure to change from 'newdomainname' to name of the new zone / domain name):
```
$TTL    604800
; make sure to preserve the last '.' after the domain name
@       IN      SOA     ns1.newdomainname. root.newdomainname. (
                  3       ; Serial
             604800     ; Refresh
              86400     ; Retry
            2419200     ; Expire
             604800 )   ; Negative Cache TTL
;
; name servers - NS records (make sure to have that '.' after the domain name)
     IN      NS      ns1.newdomainname.

; name servers - A records
; @ => the domain name itself
; If you want to add a new A record (e.g trollmachine.newdomainname = 1.2.3.4), you add the following line: trollmachine     IN      A       1.2.3.4
@		IN	A	192.168.56.8
ns1		IN	A	192.168.56.8
```
- Go to the Dockerfile and add the following line AFTER the last COPY command (change db.newdomainname to the file created before this):
```
COPY artifacts/db.newdomainname /etc/bind/zones
```
- Rebuild the image once more using docker compose:
```
docker compose build
docker compose up -d
```
