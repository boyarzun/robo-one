# Django
from django.http import request
from django.shortcuts import render

# CCBV
from django.views.generic import TemplateView

# Form
from .forms import Test


class HomeTemplateView(TemplateView):
    template_name = "pages/home.html"


def home(request):

    form = Test()

    return render(request, "pages/home.html", {"form": form})


def index(request):

    return render(request, "pages/index.html", {"head_title": "Inicio"})


def robo_one(request):

    return render(request, "pages/robo_one.html", {"head_title": "Robo One"})


def robo_one_light(request):

    return render(
        request, "pages/robo_one_light.html", {"head_title": "Robo One Light"}
    )


def news(request):

    return render(request, "pages/news.html", {"head_title": "Noticias"})


def single_news(request, id):

    return render(
        request, "pages/single_news.html", {"head_title": "Noticia", "id": id}
    )


def about(request):

    return render(request, "pages/about.html", {"head_title": "Acerca de"})


def learn(request):

    return render(request, "pages/learn.html", {"head_title": "Aprende Más"})


def faq(request):

    return render(request, "pages/faq.html", {"head_title": "Preguntas Frecuentes"})


def ranking_list(request, id):

    return render(request, "pages/ranking.html", {"head_title": "Ranking", "id": id})


def ranking_results(request):

    return render(
        request, "pages/ranking/2020/1-robo-one-chile.html", {"head_title": "Ranking"}
    )


def ranking_first_robo_one_chile_iframe(request):
    return render(
        request,
        "pages/ranking/2020/1-robo-one-chile-iframe.html",
        {"head_title": "Ranking"},
    )
