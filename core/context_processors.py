from django.conf import settings


def app_data(request):
    return {
        # Site
        "APP_NAME": settings.APP_NAME,
    }
