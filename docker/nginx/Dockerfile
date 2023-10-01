FROM nginx:latest

ENV TZ="Asia/Jakarta"
ENV PS1="\u@\h:\w\\$"

COPY ./default.conf /etc/nginx/conf.d/default.conf

COPY ./my_custom_proxy_settings.conf /etc/nginx/conf.d/my_custom_proxy_settings.conf
