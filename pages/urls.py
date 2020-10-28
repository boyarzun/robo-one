from django.urls import path
from pages.views import *

app_name = "pages"

urlpatterns = [
    path("home/", home, name="home"),
    path("", index, name="index"),
    path("robo-one/", robo_one, name="robo_one"),
    path("robo-one-light/", robo_one_light, name="robo_one_light"),
    path("news/", news, name="news"),
    path("news/<int:id>/", single_news, name="single_news"),
    path("about/", about, name="about"),
    path("learn/", learn, name="learn"),
    path("faq/", faq, name="faq"),
    path("ranking/<int:id>/", ranking_list, name="ranking"),
]
