FROM ubuntu:latest
ENV DEBIAN_FRONTEND noninteractive
RUN apt -y update
RUN apt -y install php php-cli php-xml
RUN mkdir -p /root/xpath
COPY dev /root/xpath
CMD ["php","-S","0.0.0.0:7777","-t","/root/xpath"]
EXPOSE 7777