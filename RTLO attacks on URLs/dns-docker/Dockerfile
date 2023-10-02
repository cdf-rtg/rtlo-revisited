FROM ubuntu:bionic

RUN apt-get update \
  && apt-get install -y \
  bind9 \
  bind9utils \
  vim \
  bind9-doc

# Enable IPv4
RUN sed -i 's/OPTIONS=.*/OPTIONS="-4 -u bind"/' /etc/default/bind9

# Copy configuration files
COPY artifacts/named.conf.options /etc/bind/
COPY artifacts/named.conf.local /etc/bind/
COPY artifacts/db.moc.elgoog /etc/bind/zones/
COPY artifacts/db.moc.koobecaf /etc/bind/zones/


ADD artifacts/services.sh /bin/services.sh

# Run eternal loop
CMD ["sh", "/bin/services.sh"]
