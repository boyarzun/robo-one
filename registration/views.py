# Django
from django.contrib.auth.forms import AuthenticationForm, UserCreationForm
from django.contrib.auth import login, authenticate
from django.shortcuts import render, redirect
from django.http import HttpResponse
from django.urls import reverse_lazy
from django.conf import settings

# Models
from django.contrib.auth.models import User

# CCBV
from django.contrib.auth.views import PasswordResetView

# Utils
from registration.utils import re_captcha


def register(request):
    template = "registration/register.html"

    if request.method == "POST":
        user_form = UserCreationForm(data=request.POST)
        get_re_captcha = re_captcha(request, settings.RE_CAPTCHA_SECRET_KEY)

        if user_form.is_valid() and get_re_captcha["valid"]:
            user_form.save()

            # Authentication
            username = user_form.cleaned_data.get("username")
            raw_password = user_form.cleaned_data.get("password1")
            user = authenticate(username=username, password=raw_password)

            login(request, user)

            return redirect(reverse_lazy("pages:home"))
        else:
            return render(
                request,
                template,
                {
                    "form": user_form,
                    "site_key": settings.RE_CAPTCHA_SITE_KEY,
                    "re_captcha_error": get_re_captcha["message"]
                    if not get_re_captcha["valid"]
                    else None,
                },
            )

    else:
        user_form = UserCreationForm()

    return render(
        request, template, {"form": user_form, "site_key": settings.RE_CAPTCHA_SITE_KEY}
    )

