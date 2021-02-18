from contact.views import send_email
from django.urls import path
from pages.views import *

app_name = "contact"

urlpatterns = [
    path("send/", send_email, name="contact"),
]
